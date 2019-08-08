@extends('layouts.master')

@section('title', 'Produtos')

@section('content')
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

            @else

            <div class="col text-center">
                <h2>Nenhum produto para exibir</h2>
            </div>

            @endif

        </div>
    </div>
</section>
@stop