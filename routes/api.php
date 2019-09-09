<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('example', array('middleware' => 'cors', 'uses' => 'ExampleController@dummy'));


Route::get('produtos',  array('middleware' => 'cors', 'uses' => 'api\ProdutosController@exibirTodos'));
Route::get('produtos/{id}',  array('middleware' => 'cors', 'uses' => 'api\ProdutosController@detalhesProduto'));
Route::post('produtos',  array('middleware' => 'cors', 'uses' => 'api\ProdutosController@criarProduto'));
Route::put('produtos/{id}',  array('middleware' => 'cors', 'uses' => 'api\ProdutosController@editarProduto'));
Route::delete('produtos/{id}',  array('middleware' => 'cors', 'uses' => 'api\ProdutosController@deletarProduto'));
Route::post('produtos/review/{id}',  array('middleware' => 'cors', 'uses' => 'api\ProdutosController@criarReview'));


// GET  - trazer informações
// POST - inserir novo registro
// PUT - editar registro existente
// DELETE - apagar registro
