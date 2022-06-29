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

Route::get('/', 'App\Http\Controllers\LandingController@welcome')->name('welcome');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	
	Route::resource('banners', 'App\Http\Controllers\BannersController');
	Route::resource('about', 'App\Http\Controllers\AboutController');
	Route::resource('servicios', 'App\Http\Controllers\ServicesController');
	Route::resource('asesoria', 'App\Http\Controllers\AdvisoryController');
	Route::resource('clientes', 'App\Http\Controllers\ClientsController');
	Route::resource('contacto', 'App\Http\Controllers\ContactController');
	Route::resource('imagenes', 'App\Http\Controllers\ImagesController');
});

