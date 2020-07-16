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

Route::get('/', 'IdeiasController@index');
Route::get('ideias', 'IdeiasController@ideias')->name('ideias');
Route::get('all-ideias', 'IdeiasController@all_ideias')->name('all-ideias');
Route::post('create', 'IdeiasController@create')->name('create');