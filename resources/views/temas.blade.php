@extends('app')

@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(https://www.bbva.com/wp-content/uploads/2015/12/bbva-educacion-e1464704439593.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>TEMAS</h1> 
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
                <h2>Aprende inglés con nuestros temas</h2>
                <p style="text-align: justify">LEARN Consigue que los niños puedan familiarizarse con el inglés ,en un ambiente tranquilo que fomenta el aprendizaje del idioma inglés de forma natural ,cumpliendo así la principal meta y todo desde casa en un ambiente seguro.</p>
            </div> 
        </div>
    </div>
    <div class="container-fluid proj-bottom">
        <div class="row">
            <div class="col-md-4 col-sm-4 fh5co-project animate-box overlay" data-animate-effect="fadeIn">
                <a href="/tema/abecedario"><img src="{{ asset('/images/project-1.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <h3>Abecedario</h3>
                    <span>Ver Curso</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="/tema/colores"><img src="{{ asset('/images/project-2.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <h3>Colores</h3>
                    <span>Ver Curso</span>
                </a>
            </div>
            {{-- <div class="col-md-4 col-sm-4 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="/tema/numeros"><img src="{{ asset('/images/project-4.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <h3>Números</h3>
                    <span>Ver Curso</span>
                </a>
            </div> --}}
            <div class="col-md-4 col-sm-4 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="/tema/animales"><img src="{{ asset('/images/project-9.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <h3>Animales</h3>
                    <span>Ver Curso</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="/tema/deportes"><img src="{{ asset('/images/project-5.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <h3>Deportes</h3>
                    <span>Ver Curso</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="/tema/alimentos"><img src="{{ asset('/images/project-6.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <h3>Alimentos/Comidas</h3>
                    <span>Ver Curso</span>
                </a>
            </div> 
            <div class="col-md-4 col-sm-4 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="/tema/verbos"><img src="{{ asset('/images/project-6.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <h3>Verbos/Gramática</h3>
                    <span>Ver Curso</span>
                </a>
            </div>
        </div>
    </div>
 
</div>

@endsection