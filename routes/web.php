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
Route::resource('/events','EventController');
Route::get('/addeventurl','EventController@display');
Route::post('/addeventurl','EventController@guardar');
Route::delete('/addeventurl/{id}','EventController@destroy')->name('Borrar');