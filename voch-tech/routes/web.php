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
    Route::get('/pessoa', function(){
        return view('dashboard');
    });


Route::get('/pessoa/cadastrar','App\Http\Controllers\PersonController@create');
Route::post('/pessoa/cadastrar','App\Http\Controllers\PersonController@store')->name('cadastra_pessoa');
Route::get('/login','App\Http\Controllers\PersonController@login');
Route::get('/pessoa/{id}','App\Http\Controllers\PersonController@show');
Route::post('/auth','App\Http\Controllers\PersonController@auth')->name('auth.pessoa');

