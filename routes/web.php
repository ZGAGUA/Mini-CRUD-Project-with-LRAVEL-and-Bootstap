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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return redirect('salle');
});



Route::get('salle', 'SalleController@index');
Route::get('salle/create', 'SalleController@create');
Route::post('salle', 'SalleController@store');
Route::get('salle/{id}/edit', 'SalleController@edit');
Route::put('salle/{id}', 'SalleController@update');
Route::delete('salle/{id}', 'SalleController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
