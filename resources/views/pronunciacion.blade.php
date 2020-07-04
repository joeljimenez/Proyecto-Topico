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
                        <h1>Practicar Pronunciación</h1> 
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
                <h2 class="text-center">Practicar Pronunciación</h2>
                <p class="text-justify">La Pronunciación es la manera en que una palabra o idioma es hablada , Una palabra puede ser hablada de formas diferentes por varios individuos o grupos, dependiendo de muchos factores sociolingüísticos, como por ejemplo el lugar en la cual crecieron o el sitio donde viven actualmente.</p>
            </div> 
            
        </div>
    </div>
    <div class="container proj-bottom">
        <hr>
        <br>
        <div class="row">
            <form action="{{route('pronunciacion_audio')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Redacte Oración</label>
                    <input type="text" name="palabra" id="" class="form-control" placeholder="Escriba la oración o palabra" required" max="100" autocomplete="off">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Ver Pronunciación</button>
                    <a href="/prueba/pronunciacion" type="submit" class="btn btn-danger">Nueva Oración</a>
                </div>
            </form> 
            <br>
              <div class="col-12">
                  <h4 class="font-weight-bold">Reglas para hacer la practica:</h4>
                  <li>Puede crear cualquier oración o palabra para este ejercicio.</li>
                  <li>Puede ser de Ingles a español y español a Ingles.</li>
              </div>
          
        </div>
        @isset($trans)
        <hr>
        <div class="row">
            <div class="col-12">
                <h5>Corrección</h5>
            <h4 style="font-weight: bold">Palabra Original : <span class="text-capitalize">{{$palabra}}</span> </h4>
            <h4 style="font-weight: bold">Palabra Traducida : <span style="text-transform: capitalize">{{$trans['text']}}</span> </h4> 
            <audio src="{{asset($audio)}}"  controls></audio>
                
            </div>
        </div>
            {{-- <div class="row">
              @if ($ok == "1")
                  <p class="alert alert-success">La Palabra Escriba fue correcta <strong class="text-capitalize">{{$trans['text']}}</strong></p>
              @endif

              @if ($ok == "2")
              <p class="alert alert-danger">Palabra Invalida, La correcta es :<strong class="text-capitalize">{{$trans['text']}}</strong></p>
          @endif
            </div>  --}}
        </div>
        @endisset

        <div class="col-12 text-center">
         
            <a href="/pruebas" class="btn btn-danger"> <i class="icon-list"></i> Prueba el conocimiento</a>
            <br>
        </div>

    </div>
 
</div>

@endsection