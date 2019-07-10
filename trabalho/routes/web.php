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

Route::get('/', function () {
    return view('principal');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pesquisar', 'ProdutoController@pesquisar');
Route::get('/ps4', 'TelaController@ps4');
Route::get('/xbox', 'TelaController@xbox');
Route::get('/switch', 'TelaController@switch');

Route::resource('produtos', 'ProdutoController');
Route::resource('users', 'UserController');
Route::resource('carrinhos', 'CarrinhoController');
Route::resource('items', 'ItemCarrinhoController');
Route::resource('avaliar', 'AvaliaController');
Route::resource('compras', 'CompraController');
