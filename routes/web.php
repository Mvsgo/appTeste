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
    return view('welcome');
});

// Route::get('home', function () {
// 	$usuarios = array(['nome'=>'Marcio'],
// 					  ['nome'=>'Maria'],
// 					  ['nome'=>'Juana'],
// 					  ['nome'=>'Creusa']);
// 	$livros = [];
//     return view('home',compact('usuarios','livros'));
// });

Route::get('home','HomeController@index');

Route::get('produto','ProdutoController@getIndex');

Route::get('usuario',['uses'=>'UsuarioController@index','as'=>'usuario']);
Auth::routes();

Route::get('/home', 'HomeController@index');
