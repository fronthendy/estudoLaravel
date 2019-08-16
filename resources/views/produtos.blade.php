@extends('layouts.master')

@section('title', 'Produtos')

@section('content')
<section id="produtos" class="new-products mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2>categorias</h2>

                <ul class="categorias">
                    <li><a href="/produtos/categoria/0">categoria 1</a></li>
                    <li>categoria 2</li>
                    <li>categoria 3</li>
                </ul>
            </div>
            <div class="col-sm-8">
                <h1>Todos os produtos</h1>

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
                                <a href="/produtos/{{ $produto->id_produto }}" class="d-flex btn btn-primary my-3 justify-content-center comprar">Comprar</a>
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
        </div>
    </div>
</section>
@stop