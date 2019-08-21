@extends('layouts.master')

@section('title', 'admin')

@section('content')
<section id="produtos" class="new-products mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                @if(session('mensagem'))
                <div class="alert alert-info">
                    {{session('mensagem')}}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col mb-5">
                <h1>Painel Administrativo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Categorias
                <a href="/admin/categorias/novo" class="btn btn-primary mb-2">Nova categoria</a>
                </h2>
                <table class="table">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>nome</td>
                        </tr>
                    </thead>
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
                <a href="/admin/produtos/novo" class="btn btn-primary mb-2">Novo produto</a>
                </h2>
                <table class="table">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>nome</td>
                            <td>categoria</td>
                            <td>ações</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($produtos) && count($produtos) > 0)
                        @foreach($produtos as $produto)
                        <tr>
                            <td>
                                <a href="/admin/produtos/{{$produto->id_produto}}">{{$produto->id_produto}}</a>
                            </td>
                            <td>
                                <a href="/admin/produtos/{{$produto->id_produto}}">{{$produto->nome}}</a>
                            </td>
                            <td>
                                <a href="/admin/produtos/{{$produto->id_produto}}">{{$produto->fk_categoria}}</a>
                            </td>
                            <td>
                                <a href="/admin/produtos/{{ $produto->id_produto }}" class="btn btn-secondary">editar</a>
                                <a href="/admin/produtos/excluir/{{ $produto->id_produto }}" class="btn btn-danger">excluir</a>
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

        </div>
    </div>
</section>
@stop