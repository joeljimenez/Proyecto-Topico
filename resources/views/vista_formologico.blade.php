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
                        <h1>Análisis Morfológico-Sintáctico</h1> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-project">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2>Análisis Morfológico-Sintáctico</h2>
                <p class="text-justify">El <strong>El Análisis Morfológico </strong> Consiste en determinar la forma, clase o categoría gramatical de cada palabra de una oración , en cambio el <strong>Análisis Sintáctico</strong> análisis de las funciones sintácticas o relaciones de concordancia y jerarquía que guardan las palabras agrupándolos entre sí en sintagmas u oraciones.</p>
            </div> 
            
        </div>
    </div>
    <div class="container proj-bottom">
        <div class="row">
            <form action="{{route('consultar_palabra')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="" class="font-weight-bold">Escriba una Oración</label>
                    <input type="text" name="palabra" id="" class="form-control" placeholder="ejemplo : Juan corre todos los días" required" max="100">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Verificar Oración</button>
                    <a href="/prueba/morfologico" type="submit" class="btn btn-danger">Nueva Oración</a>
                </div>
            </form> 
            <br>
              <div class="col-12">
                  <h4 class="font-weight-bold">Reglas para escribir una oración:</h4>
                  <li>Puede escribir la oración en inglés o español.</li>
                  <li>No utilizar ningún signo de puntuación</li>
                  <li>Si coloca signos de puntuación, la oración se dividirá y tomará el singo como una palabra.</li>
              </div>
          
        </div>
        @isset($result)
        <hr>
        <div class="row">
            <div class="col-12">
                <h5>La Oración será divida para obtener las categorías gramaticales.</h5>
            <h4 style="font-weight: bold">Oración : {{$texto}}  <small class="text-danger text-uppercase">( {{$leng}} )</small></h4>
            <h4 style="font-weight: bold">Oración : {{$trans['text']}}  <small class="text-danger text-uppercase">( {{$len_tr}} )</small></h4>
           
            </div>
        </div>
            <div class="row">
                @foreach ($result as $item)

                <div class="col-md-3 col-sm-3 fh5co-project animate-box overlay tarjeta" data-animate-effect="fadeIn">
                        <h3 class="text-uppercase text-success" style="font-weight:bold">{{$item['text']['content']}}</h3>
                        <h5><strong>Lema</strong> {{$item['lemma']}}</h5>
                        <h6> <strong>Etiqueta Gramatical</strong> {{$item['partOfSpeech']['tag']}}</h6>
                        <h6> <strong>Aspecto gramatical</strong> {{$item['partOfSpeech']['aspect']}}</h6>
                        <h6> <strong>Número gramatical </strong>{{$item['partOfSpeech']['number']}}</h6>
                        <h6> <strong>Persona gramatical</strong>  {{$item['partOfSpeech']['person']}}</h6>
                        <h6> <strong>Tiempo gramatical </strong>{{$item['partOfSpeech']['tense']}}</h6>
                </div>
                @endforeach
       
            </div> 
        </div>
        @endisset

        <div class="col-12 text-center">
            <br>
            <a href="/pruebas" class="btn btn-danger"> <i class="icon-list"></i> Prueba el conocimiento</a>
            <br>
        </div>

    </div>
 
</div>

@endsection