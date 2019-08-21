<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;
use App\Editora;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();

        return view('admin', compact('produtos', 'categorias'));
    }

    public function criarProduto(){
        $categorias = Categoria::all();
        $editoras = Editora::all();

        return view('criarProduto', compact('categorias', 'editoras'));
    }

    public function insertProduto(Request $request){ // $_POST
        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->fk_categoria = $request->categoria;
        $produto->fk_editora = $request->editora;
        $produto->preco = $request->preco;


        $produto->save();

        return redirect('/admin');

    }

    public function editarProduto($id){

        $produto = Produto::find($id);
        $categorias = Categoria::all();
        $editoras = Editora::all();

        return view('editarProduto', compact('produto', 'categorias', 'editoras'));
    }
}
