<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', "HomeController@index");

Route::group(['namespace' => 'Post'], function(){
    Route::get('/posts/create','CreateController')->name('post.create');
    Route::get('/posts','IndexController')->name('post.index');
    Route::get('/posts/{id}','ShowController')->name('post.show');
    Route::get('/posts/{id}/edit','EditController')->name('post.edit');
    Route::patch('/posts/{id}/','UpdateController')->name('post.update');
    Route::post('/posts','StoreController')->name('post.store');
    Route::delete('/posts/{id}','DestroyController')->name('post.destroy');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){ //  admin/..
    Route::group(['namespace' => 'Post'], function(){
        Route::get('/post','IndexController')->name('admin.post.index'); 
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
