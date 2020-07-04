<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\Translate\V2\TranslateClient;
use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\AudioEncoding;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;

use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;

use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;
use Google\Cloud\Language\V1\Document;
use Google\Cloud\Language\V1\Document\Type;
use Google\Cloud\Language\V1\LanguageServiceClient;
use Google\Cloud\Language\V1\PartOfSpeech\Tag;

use Google\Cloud\Language\LanguageClient;


use App\abecedario;  
use File;
class VistaWelcome extends Controller
{


  public function inicio(Request $data)
  { 
    return view('principal');
  }
  public function temas(Request $data)
  { 
    return view('temas');
  }
  public function traer_resultado(Request $data,$ruta)
  {

    if($ruta == "verbos"){ 

    $tabla = abecedario::get_name_table($ruta);
    $res = abecedario::get_all($tabla->tabla);
    
    return view('resultado_verbo',['res'=>$res,'resp'=>$tabla]);
    }
    $tabla = abecedario::get_name_table($ruta);
    $res = abecedario::get_all($tabla->tabla);
    
    return view('resultado',['res'=>$res,'resp'=>$tabla]);
  }

  public function menu_prueba(Request $data)
  {

    return view('menu_prueba');
  }

  public function traer_vista_prueba($url)
  {
    if ($url == "morfologico" ) {
      return view('vista_formologico');
    }
    if ($url == "terminos-automatico" ) {
      $d=rand(1,987);
      $tipo=rand(1,2);
     

      $termino = abecedario::traer_termino($d);
      
      return view('vista_traduccion',['termino'=>$termino,'tipo'=>$tipo]);
    }

    if ($url == "pronunciacion" ) {
      return view('pronunciacion');
    }
  }

  public function consultar_palabra(Request $data)
  {
      $targetLanguage = '';
      $leng = ''; 
      $result = ''; 
      $trans ='';
      $projectId = '1591836607403';
      
      $language = new LanguageClient([
        'projectId' => $projectId,
        'target' => $targetLanguage,
    ]);

      $texto = $data->palabra;
      $annotation = $language->analyzeSyntax($texto);
    
      $result = $annotation->tokens();
      $leng = $annotation->language();

      if($leng == "es"){
        $trans = $this->traslate_texto($texto,'en');
        $targetLanguage = 'en';
      }

      if($leng == "en"){
      $trans = $this->traslate_texto($texto,'es');
      $targetLanguage = 'es';
      }

      return view('vista_formologico',['result'=>$result ,'leng'=>$leng,'texto'=>$texto,'trans'=>$trans,'len_tr'=>$targetLanguage ]);
  }

  public function traslate_texto($texto,$leng)
  {
      $model = 'nmt';
      $translate = new TranslateClient();
      $result = $translate->translate($texto, [
        'target' => $leng,
        'model'=>$model
    ]);
    return $result;
  }

  public function detectar_leng($texto)
  {
    $translate = new TranslateClient();
    $result = $translate->detectLanguage($texto);
    return $result;
  }

  public function traduccion_automatica(Request $data)
  {
    $ok = 0;
    $d=rand(1,987);
    $tipo=rand(1,2);
    $lang_1 = '';
    $leng = '';
    $termino = abecedario::traer_termino($d);

    $texto = $data->texto_original;
    if ($data->tipo == '1') {
      $leng = 'en';
      $lang_1 = 'en-US';
    }
    if ($data->tipo == '2') {
      $leng = 'es';
      $lang_1 = 'es';

    }

    $trans = $this->traslate_texto($texto,$leng); 
  
    if(mb_strtolower(($data->palabra )) == mb_strtolower($trans['text'])){
     $file = $this->generate_audio($trans['text'],$lang_1);
     $ok = '1';
      
    }else{
      $file =$this->generate_audio($trans['text'],$lang_1);
     $ok = '2';
     
    }
    return view('vista_traduccion',['termino'=>$termino,'tipo'=>$tipo,'file'=>$file,'ok'=>$ok,'trans'=>$trans,'texto'=>$texto,'escrita'=>mb_strtolower(($data->palabra ))]);
  }

  public function generate_audio($texto,$lang)
  {
    $textToSpeechClient = new TextToSpeechClient();
    $input = new SynthesisInput();
    $input->setText($texto);
    $voice = new VoiceSelectionParams();
    $voice->setLanguageCode($lang);
    $audioConfig = new AudioConfig();
    $audioConfig->setAudioEncoding(AudioEncoding::MP3);
    $d=rand(1,987);
    $resp = $textToSpeechClient->synthesizeSpeech($input, $voice, $audioConfig);
    $file = '/audio/temp/temporal-'.$d.'.mp3'; 
    $re=File::delete(public_path(). $file); 
    file_put_contents( public_path() .'/audio/temp/'. 'temporal-'.$d.'.mp3', $resp->getAudioContent());
    return $file;
  }

  public function pronunciacion_audio(Request $data)
  { 
     $lang = $this->detectar_leng($data->palabra)['languageCode'];
     
     if ($lang == "es") {
          $lang_ = "en";
          $lang_1 = "en-US";
     }
     if ($lang == "en") {
      $lang_ = "es";
      $lang_1 = "es";
 }
     $result = $this->traslate_texto($data->palabra,$lang_);
     
     $file = $this->generate_audio($result['text'],$lang_1);
     return view('pronunciacion',['palabra'=>$data->palabra,'trans'=>$result,'audio'=>$file]);
  }
}
