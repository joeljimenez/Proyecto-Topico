
@extends('app')

@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(https://www.bbva.com/wp-content/uploads/2015/12/bbva-educacion-e1464704439593.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>TEMA</h1>
                        <h2 class="text-uppercase">{{$resp->texto}}</h2>
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
                <h2 class="text-uppercase">{{$resp->texto}}</h2>
                <p style="text-align: justify">{{$resp->texto_largo}}</p>
            </div> 
        </div>
    </div>
    <div class="container proj-bottom">
        <hr> 
        <div class="row">
            @foreach($res as $item)
            <div class="col-md-6 col-sm-6 fh5co-project animate-box overlay" data-animate-effect="fadeIn">
                 <div>
                    <h3><strong>Español</strong> {{$item->espa}}</h3>
                    <h3><strong>Ingles</strong> {{$item->ing}}</h3>
                    <h3><strong>Tipo Verbo</strong> <span class="text text-success">{{$item->tipo}}</span></h3>
                    <audio src="{{$item->audio}}"  controls></audio>
                 </div>
                  
                
            </div>
            @endforeach 
        </div>
        <div class="col-12 text-center">
            <a href="/temas" class="btn btn-primary btn-learn"> <i class="icon-expand"></i> Todos los temas</a>
            <br>
            <a href="/pruebas" class="btn btn-danger"> <i class="icon-list"></i> Prueba el conocimiento</a>
        </div>
    </div>
 
</div> 
@endsection
