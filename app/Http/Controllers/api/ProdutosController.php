<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;
use App\Review;

class ProdutosController extends Controller
{
    public function exibirTodos()
    {
        $produtos = Produto::all();

        return response()->json($produtos);
    }

    public function detalhesProduto($id)
    { 
        $produto = Produto::find($id);

        return response()->json($produto);
    }

    public function criarProduto(Request $request)
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

    public function editarProduto(Request $request, $id)
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

    public function deletarProduto($id)
    { 
        $produto = Produto::find($id);
        $produto->delete();
        return response()->json(['mensagem' => 'produto deletado com sucesso']);

    }

    public function criarReview(Request $request, $id)
    {
        $review = new Review();
        $review->leitor = $request->leitor;
        $review->nota = $request->nota;
        $review->comentario = $request->comentario;
        $review->fk_produto = $id;
        $review->save();

        return response()->json(['mensagem' => 'review enviada com sucesso']);
    }
}
