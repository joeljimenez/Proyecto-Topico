@extends('app')

@section('content')
<style>
.tarjeta:hover{
    display: block;
    box-shadow: 0px 0px 14px 0px #00000052;
    transition: .9s all;
    cursor: pointer;
    opacity: 0.5;
    background: #73b473a3;

}
</style>
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(https://www.bbva.com/wp-content/uploads/2015/12/bbva-educacion-e1464704439593.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Ejercicios de terminos</h1> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-project">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 ">
                <h2 class="text-center">Ejercicios de terminos</h2>
                <p class="text-justify">El inglés es una lengua de comunicación internacional del comercio y de las finanzas, aprender inglés es el sueño de todos y las claves son:</p>
                <ul>
                    <li>Dedica un tiempo al día.</li>
                    <li>Aprende cuatro (4) palabras en inglés cada mañana.</li>
                    <li>Busca pautas a seguir y aprender inglés.</li>
                    <li>Trata de pensar en inglés.</li>
                    <li>Fíjate metas semanales y mensuales.</li>
                    <li>Aquí podrá practicar términos aleatorios para probar tus conocimientos</li>
                </ul>
            </div> 
            
        </div>
    </div>
    <div class="container proj-bottom">
        <hr>
        <br>
        <div class="row">
            <form action="{{route('traduccion_automatica')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="" class="font-weight-bold">Escriba en @if ($tipo == "1")Ingles @endif  @if ($tipo == "2")Español @endif lo siguiente <span class="text-uppercase text-danger">( 
                        @if ($tipo == "1")
                        {{$termino->termino_es}}  
                        @endif
                        @if ($tipo == "2")
                        {{$termino->termino_en}}  
                        @endif
                        
                         )</span></label>
                         <input type="hidden" name="tipo" value="{{$tipo}}" id="">

                         <input type="hidden" name="texto_original" value="  @if ($tipo == "1")
                         {{$termino->termino_es}}  
                         @endif
                         @if ($tipo == "2")
                         {{$termino->termino_en}}  
                         @endif">

                    <input type="text" name="palabra" id="" class="form-control" placeholder="Escriba en @if ($tipo == "1")Ingles @endif @if ($tipo == "2")Español @endif" required" max="100" autocomplete="off">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Verificar Termino</button>
                    <a href="/prueba/terminos-automatico" type="submit" class="btn btn-danger">Nuevo Termino</a>
                </div>
            </form> 
            <br>
              <div class="col-12">
                  <h4 class="font-weight-bold">Reglas para hacer la practica:</h4>
                  <li>Si el Texto está bien escrito se le avisara y se retornara el audio para su mejor práctica.</li>
                  <li>Si el Texto es mal escribo se le avisara y se retornara el audio para su mejor práctica.</li>
                  <li>Si desea practicar otra palabra solo le da clic al botón Nuevo Termino.</li>
                  <li>Las Palabras son alectorias.</li>
              </div>
          
        </div>
        @isset($trans)
        <hr>
        <div class="row">
            <div class="col-12">
                <h5>Corrección</h5>
            <h4 style="font-weight: bold">Palabra Original : <span class="text-capitalize">{{$texto}}</span> </h4>
            <h4 style="font-weight: bold">Palabra Escrita : <span style="text-transform: capitalize">{{$escrita}}</span> </h4> 
            <audio src="{{asset($file)}}"  controls></audio>
                
            </div>
        </div>
            <div class="row">
              @if ($ok == "1")
                  <p class="alert alert-success">La Palabra Escrita fue correcta<strong class="text-capitalize">{{$trans['text']}}</strong></p>
              @endif

              @if ($ok == "2")
              <p class="alert alert-danger">Palabra Invalida, La correcta es :<strong class="text-capitalize">{{$trans['text']}}</strong></p>
          @endif
            </div> 
        </div>
        @endisset

        <div class="col-12 text-center">
         
            <a href="/pruebas" class="btn btn-danger"> <i class="icon-list"></i> Prueba el conocimiento</a>
            <br>
        </div>

    </div>
 
</div>

@endsection