<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function listarProdutos(){
        $produtos = [
            [
                'nome' => 'Deserto dos Tartaros',
                'preco' => 30.5,
                'imagem' => 'Images/rounded.jpg'
            ],
            [
                'nome' => 'Admirável Mundo Novo',
                'preco' => 45.5,
                'imagem' => 'Images/rounded.jpg'
            ],
            [
                'nome' => 'Lugar Nenhum',
                'preco' => 35,
                'imagem' => 'Images/rounded.jpg'
            ]
        ];
        return view('produtos')->with('produtos', $produtos);
    }
}
