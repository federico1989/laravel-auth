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

// No admin

Route::get('/', 'PageController@index')->name('homepage');
Route::get('/about', 'PageController@index')->name('about');
Route::get('/contact', 'PageController@index')->name('contact');


//Group middleware for admin

Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('posts', 'PostController');

});
