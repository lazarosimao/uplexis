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

// Auth::routes();

Route::get('/login', 'AutenticacaoController@index')->name('login');
Route::post('/login', 'AutenticacaoController@logar')->name('logar');

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home_barra');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/logout', 'AutenticacaoController@logout')->name('logout');

    Route::get('/artigos', 'ArtigoController@index')->name('artigos');
    Route::get('/buscar', 'ArtigoController@telaBusca')->name('buscar');
    Route::get('/buscarartigos', 'ArtigoController@buscar')->name('buscarartigos');
});
