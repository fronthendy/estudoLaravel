<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// home/Hendy
// Route::get('/home/{n1}/{n2}', function ($n1, $n2){
//     return $n1 + $n2;
// });

Route::get('/', 'HomeController@index');

Route::get('/produtos', 'ProdutosController@listarProdutos');

Route::get('/produtos/{id}', 'ProdutosController@detalheProduto');

Route::get('/produtos/categoria/{id}', 'ProdutosController@filtroCategoria');

Route::get('/produtos/categoria/{id}', 'ProdutosController@filtrarCategoria');

Route::get('/admin', 'AdminController@index');

Route::get('/admin/produtos/novo', 'AdminController@criarProduto');
Route::post('/admin/produtos/novo', 'AdminController@insertProduto');

Route::get('/admin/produtos/{id}', 'AdminController@editarProduto');
Route::post('/admin/produtos/{id}', 'AdminController@updateProduto');

Route::get('/admin/produtos/excluir/{id}', 'AdminController@excluirProduto');
Route::post('/admin/produtos/exluir/{id}', 'AdminController@deleteProduto');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
