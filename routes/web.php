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
$prefix = App\Http\Middleware\LocaleMiddleware::getLocale();

Route::group(['prefix' => "$prefix"], function(){
    Route::get('/', 'App\Http\Controllers\IndexController@index')->name('index');
    Route::get('/contact', 'App\Http\Controllers\IndexController@contact')->name('contact');
    Route::post('/contact', 'App\Http\Controllers\IndexController@contactPost')->name('contact-post');
    Route::get('/about', 'App\Http\Controllers\IndexController@about')->name('about');
    Route::get('/advice', 'App\Http\Controllers\IndexController@advice')->name('advice');
    Route::post('/advice', 'App\Http\Controllers\IndexController@advicePost')->name('advice-post');
    Route::get('/services', 'App\Http\Controllers\IndexController@services')->name('services');
    Route::get('/{slug_url}', 'App\Http\Controllers\IndexController@service')->name('service');

    Route::post('/newsletter', 'App\Http\Controllers\IndexController@newsletter')->name('newsletter');
//    require __DIR__.'/auth.php';
});

