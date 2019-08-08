@extends('layouts.master')

@section('title', 'Inicio')

@section('content')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('Images/alfons-morales-YLSwjSy7stw-unsplash.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="black-tape display-4">Foto 1</h2>
                    <p class="lead black-tape">Descrição da foto.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('Images/andrew-neel--FVaZbu6ZAE-unsplash.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4 black-tape">Foto 2</h2>
                    <p class="lead black-tape">Descrição da foto.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('Images/taylor-D9_QOTmbFAg-unsplash.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4 black-tape">Foto 3</h2>
                    <p class="lead black-tape">Descrição da foto.</p>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="story" class="second mt-5">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm">
                <img src="Images/rounded.jpg" class="rounded-circle" width="200px" height="200px" alt="">
            </div>
            <div class="col-sm">
                <img src="Images/rounded2.jpg" class="rounded-circle" width="200px" height="200px" alt="">
            </div>
            <div class="col-sm">
                <img src="Images/rounded3.jpg" class="rounded-circle" width="200px" height="200px" alt="">
            </div>
        </div>
        <h1 class="display-4 text-center title-story">Our story</h1>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada enim in dolor sagittis,
            et pulvinar velit lobortis. Phasellus sed ante vel elit convallis sodales at sit amet leo. Sed a
            efficitur lorem, vel cursus turpis. Vivamus imperdiet nibh sed orci rhoncus rutrum. Integer tempor
            accumsan lectus. Integer vel odio consequat tortor tempus rutrum quis quis dui. Etiam sit amet leo
            non odio condimentum convallis vel nec felis. Nulla semper, mi quis vestibulum blandit, arcu massa
            auctor metus, at faucibus elit risus sit amet augue. Nulla luctus dolor id nunc faucibus aliquam.
            Quisque eu mauris ac enim viverra rhoncus eget in est. Etiam consectetur erat ac ipsum vehicula
            tempus. Curabitur non urna erat. In sit amet urna pulvinar lorem semper laoreet. Praesent felis sem,
            pharetra in lacinia at, fringilla in felis. Nullam eleifend et augue nec interdum.<a href="https://unsplash.com">Lorem ipsum</a>, taken by <a href="https://unsplash.com/@joannakosinska">Ipsum lorem nidrazis paendrer</a>!</p>
    </div>
</section>
<section id="produtos" class="new-products mt-5">
    <div class="container text-center">
        <h1>New Products</h1>
        <div class="row">

            @if(isset($produtos))

            @foreach($produtos as $produto)
            <div class="livro col-sm-12 col-lg-4 my-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $produto['imagem'] }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $produto['nome'] }}</h5>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><strong>R$ {{ $produto['preco'] }}</strong></li>
                        </ul>
                        <a href="#" class="d-flex btn btn-primary my-3 justify-content-center comprar">Comprar</a>
                    </div>
                </div>
            </div>
            @endforeach

            @endif

        </div>
    </div>
</section>
@stop