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


//Route::get('/',['uses'=>'HomeController@index','as'=>'Main Page']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainController@index')->name('main');
Route::get('/register', 'MainController@register')->name('main');

Route::post('/register', 'MainController@save');
/*Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'MainController@index')->name('welcome');
});*/
