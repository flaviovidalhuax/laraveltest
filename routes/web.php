<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PropertyController;

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
Route::get('/user2/{id?}/{name?}', [PropertyController::class, 'filter']);  //csrf
//'PropertyController@filter'
Route::get('/user/{name}', 'App\Http\Controllers\PropertyController@FindName');  //csrf
Route::get('/blade/{name}', 'App\Http\Controllers\PropertyController@viewPage');  //csrf