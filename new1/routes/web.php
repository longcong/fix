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



Route::group(['middlaware' => ['web']], function() {

    Route::get('blog/{slug}',['as' => 'blog.single', 'uses' =>'BlogController@getSingle' ]) 
    -> where('slug','[\w\d\-\_]+');
    Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
    Route::get('/', 'PagesController@getIndex');
    Route::get('about', 'pagesController@getAbout');
    Route::get('contact', 'PagesController@getContact');
    Route::resource('posts', 'PostController');

    Route::resource('categories', 'CategoryController', ['except' => ['create']]);
    Route::resource('tags','TagController', ['except' => ['create']]);
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
