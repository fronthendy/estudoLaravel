<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto; //add model Produto

class HomeController extends Controller
{
    public function index(){
        $produtos = Produto::all()->take(3); //listar 3 produtos

        return view('home')->with('produtos', $produtos);
    }
}
