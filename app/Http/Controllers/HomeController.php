<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
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
        return view('home')->with('produtos', $produtos);
    }
}
