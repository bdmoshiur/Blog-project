<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('website.home');
})->name('website');

Route::get('/about', function () {
    return view('website.about');
});
Route::get('/post', function () {
    return view('website.post');
});
Route::get('/category', function () {
    return view('website.category');
});
Route::get('/contact', function () {
    return view('website.contact');
});


/*.......................................Backend.................................*/

Route::group(['prefix' => 'admin','middleware'=>['auth']], function () {
    
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    });

    Route::resource('category', 'CategoryController');
    Route::resource('tag', 'TagController');
});


