<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(["verified"]);

Route::group(['prefix' => 'frota', 'where' => ['id' => '[0-9]+']], function () {

    Route::get('/criar', ['as' => 'criar', 'uses' => 'App\Http\Controllers\FrotaController@criar']);
    Route::post('/inserir', ['as' => 'inserir', 'uses' => 'App\Http\Controllers\FrotaController@inserir']);

    Route::get('{id}/editar', ['as' => 'editar', 'uses' => 'App\Http\Controllers\FrotaController@editar']);
    Route::put('{id}/atualizar', ['as' => 'atualizar', 'uses' => 'App\Http\Controllers\FrotaController@atualizar']);

    Route::delete('{id}/excluir', ['as' => 'excluir', 'uses' => 'App\Http\Controllers\FrotaController@excluir']);

});
