@extends('layouts.master')

@section('title', 'admin')

@section('content')
<section id="produtos" class="new-products mt-5">
    <div class="container">
        <div class="row">
<<<<<<< HEAD
            <div class="col-lg-12">
                <h2>categorias  <button class="btn btn-primary">Adicionar</button></h2>

=======
            <div class="col mb-5">
                <h1>Painel Administrativo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Categorias
                <button class="btn btn-primary mb-2">Nova categoria</button>
                </h2>
>>>>>>> admin
                <table class="table">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>nome</td>
                        </tr>
                    </thead>
<<<<<<< HEAD
                    @if(isset($categorias))
                    @foreach($categorias as $categoria)
                    <tr>
                        <td><a href="/produtos/categoria/{{ $categoria->id_categoria }}">{{ $categoria->id_categoria }}</a></td>
                        <td><a href="/produtos/categoria/{{ $categoria->id_categoria }}">{{ $categoria->nome }}</a></td>
                    </tr>
                    @endforeach
                    @endif
                </table>
            </div>
            <div class="col-lg-12 mt-5">
                <h1>produtos <button class="btn btn-primary">Adicionar</button></h1>

                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>id</td>
                                <td>nome</td>
                                <td>categoria</td>
                            </tr>
                        </thead>
                        <tbody>

                        
                    @if(isset($produtos) && count($produtos) > 0)

                    @foreach($produtos as $produto)
                   <tr>
                       <td>{{ $produto->id_categoria }}</td>
                       <td>{{ $produto->nome }}</td>
                       <td>{{ $produto->categoria->nome }}</td>

                   </tr>
                    @endforeach

                    @else

                    <div class="col text-center">
                        <span class="alert alert-info">Nenhum produto para exibir</span>
                    </div>

                    @endif
                    </tbody>
                    </table>
                </div>
            </div>
=======
                    <tbody>
                        @if($categorias)
                        @foreach($categorias as $categoria)
                        <tr>
                            <td>
                                <a href="/produtos/categoria/{{$categoria->id_categoria}}">{{$categoria->nome}}</a>
                            </td>
                            <td>
                                <a href="/produtos/categoria/{{$categoria->id_categoria}}">{{$categoria->nome}}</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>

            </div>
            <div class="col">
                <h2>Produtos
                <button class="btn btn-primary mb-2">Nova categoria</button>
                </h2>
                <table class="table">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>nome</td>
                            <td>categoria</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($produtos) && count($produtos) > 0)
                        @foreach($produtos as $produto)
                        <tr>
                            <td>
                                <a href="/produtos/{{$produto->id_produto}}">{{$produto->id_produto}}</a>
                            </td>
                            <td>
                                <a href="/produtos/{{$produto->id_produto}}">{{$produto->nome}}</a>
                            </td>
                            <td>
                                <a href="/produtos/{{$produto->id_produto}}">{{$produto->fk_categoria}}</a>
                            </td>
                        </tr>
                        @endforeach
                        @else
        
                        <tr class="alert alert-info">
                            <td>Nenhum produto para exibir</td>
                        </tr>
        
                        @endif
                    </tbody>
                </table>
            </div>

>>>>>>> admin
        </div>
    </div>
</section>
@stop