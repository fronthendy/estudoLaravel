<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function listarProdutos(){
        $produtos = Produto::all();

        return view('produtos')->with('produtos', $produtos);
    }

    public function detalheProduto($id){
        $produto = Produto::find($id);

        return view('produto', compact('produto'));
    }
}
