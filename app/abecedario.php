<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class abecedario extends Model
{
    public static function get_name_table($url)
    {
       $table =  DB::table('name_url')->where('alias',$url)->first();
       return $table;
    }

    public static function get_all($tabla)
    {
       $res =  DB::table($tabla)->get();
       return $res;
    }

    public static function insert_verbos($espa,$ing,$audio,$tipo)
    {
       $table =  DB::table('verbos')->insert([
          'espa'=>$espa,
          'ing'=>$ing,
          'audio'=>$audio,
          'tipo'=>$tipo,
       ]);
       return $table;
    }

    public static function traer_termino($id)
    {
       $table =  DB::table('tabla_termino')->where('id_termino',$id)->first();
       return $table;
    }

}
