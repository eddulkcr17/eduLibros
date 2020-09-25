<?php

use Illuminate\Support\Facades\Route;

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
      return view('auth.login');
});

Auth::routes([
	'register' => false,
	
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('rol','RolController');
Route::resource('autor','AutorController');
Route::resource('editorial','EditorialController');
Route::resource('libro','LibroController');
Route::resource('/usuario','UsuarioController');
Route::post('/porcentajea','PorcentajeController@aumentar')->name('porcentaje.aumentar');
Route::post('/porcentajed','PorcentajeController@disminuir')->name('porcentaje.disminuir');
Route::resource('aumentaindividual','AumentaController')->except(['create','store','destroy','show']);
Route::resource('restaindividual','RestaController')->except(['create','store','destroy','show']);
