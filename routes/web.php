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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard', 'UserController@dashboard')->middleware('auth');




   
Route::get('Categories','UserController@Categories')->middleware('auth');
Route::get('newCategory','UserController@newCategory')->middleware('auth');
Route::get('Products','UserController@Products')->middleware('auth');
Route::get('newProduct','UserController@newProduct')->middleware('auth');
Route::get('Orders','UserController@Orders')->middleware('auth');
   

    
