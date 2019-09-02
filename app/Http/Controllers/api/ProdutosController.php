<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;

class ProdutosController extends Controller
{
    function exibirTodos()
    { 
        $produtos = Produto::all();

        return response()->json($produtos);
    }

    function detalhesProduto($id)
    { 
        $produto = Produto::find($id);

        return response()->json($produto);

        
    }

    function criarProduto(Request $request)
    { 
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->fk_categoria = $request->fk_categoria;
        $produto->fk_editora = $request->fk_editora;
        $produto->fk_autor = $request->fk_autor;
        $produto->preco = $request->preco;
        $produto->imagem = $request->imagem;
        $produto->save();  

        return response()->json(['mensagem' => 'produto criado com sucesso']);
    }

    function editarProduto(Request $request, $id)
    { 
        $produto = Produto::find($id);

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->fk_categoria = $request->fk_categoria;
        $produto->fk_editora = $request->fk_editora;
        $produto->preco = $request->preco;
        $produto->imagem = $request->imagem;
        $produto->save(); 
        return response()->json(['mensagem' => 'produto atualizado com sucesso']);

    }

    function deletarProduto($id)
    { 
        $produto = Produto::find($id);
        $produto->delete();
        return response()->json(['mensagem' => 'produto deletado com sucesso']);

    }
}
