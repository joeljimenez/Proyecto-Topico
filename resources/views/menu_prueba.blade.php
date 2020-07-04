@extends('app')

@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(https://www.bbva.com/wp-content/uploads/2015/12/bbva-educacion-e1464704439593.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>PRUEBAS</h1> 
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
                <br>
                <h2>MENÚ DE PRUEBAS</h2>
                <hr>
            </div> 
        </div>
    </div>
    <div class="container-fluid proj-bottom">
        <div class="row">
            <div class="col-md-4 col-sm-4 fh5co-project animate-box overlay" data-animate-effect="fadeIn">
                <a href="/prueba/morfologico"><img src="images/project-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <h3>Análisis Morfológico-Sintáctico</h3>
                    <span>Hacer Prueba</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="/prueba/terminos-automatico"><img src="images/project-2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <h3>Práctica de término </h3>
                    <span>Hacer Prueba</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="/prueba/pronunciacion"><img src="images/project-3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <h3>Práctica Pronunciación</h3>
                    <span>Hacer Prueba</span>
                </a>
            </div>
        </div>
    </div>
 
</div>

@endsection