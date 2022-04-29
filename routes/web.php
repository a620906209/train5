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
    return view('welcome');
});

Route::get('/index','indexController@index')->name("index");
Route::get('/create','indexController@create_page')->name('create');
Route::post('/create','indexController@create_data');


Route::delete('person/{user_id}','indexController@destory');
Route::get('/edit','indexController@edit_page');

Route::post('/edit/{user_id}/updata','indexController@update');

