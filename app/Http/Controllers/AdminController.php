<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

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
}
