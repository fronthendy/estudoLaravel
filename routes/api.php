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


Route::get('produtos', 'api\ProdutosController@exibirTodos');
Route::get('produtos/{id}', 'api\ProdutosController@detalhesProduto');
Route::post('produtos', 'api\ProdutosController@criarProduto');
Route::put('produtos/{id}', 'api\ProdutosController@editarProduto');
Route::delete('produtos/{id}', 'api\ProdutosController@deletarProduto');
Route::post('produtos/review/{id}', 'api\ProdutosController@criarReview');