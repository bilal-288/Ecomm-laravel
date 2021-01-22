<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
//ProductController

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

Route::get('/index', function () 
{
    return view('login');
});

Route::POST('/login', 'UserController@login')->name('login.user');
Route::get('/home_page', 'ProductController@index');