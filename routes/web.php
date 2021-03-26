<?php

use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\blogController;

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

Route::get('home', function () {
    return view('home');
});


Route::prefix('admin')->group(function(){
    Route::prefix('dashboard')->group(function(){
        Route::get('/','Admin\dashboardController@index')->name('dashboard.index');
    });

    Route::prefix('blog')->group(function(){
        Route::get('/','Admin\blogController@index')->name('blog.index');
        Route::get('/create','Admin\blogController@create')->name('blog.create');
        Route::get('/show/{id}','Admin\blogController@show')->name('blog.show');
        Route::post('/','Admin\blogController@store')->name('blog.store');
        Route::get('/edit/{id}','Admin\blogController@edit')->name('blog.edit');
        Route::put('/{id}','Admin\blogController@update')->name('blog.update');
        Route::delete('/{id}','Admin\blogController@destroy')->name('blog.delete');
    });

});





Route::get('edulevels', 'EdulevelController@data');
Route::get('edulevels/add', 'EdulevelController@add');
Route::post('edulevels', 'EdulevelController@addProcess');
Route::get('edulevels/edit/{id}', 'EdulevelController@edit');
Route::patch('edulevels/{id}', 'EdulevelController@editProcess');
Route::delete('edulevels/{id}', 'EdulevelController@delete');

// Users
Route::get('users', 'UserController@data');
Route::get('users/add', 'UserController@add');
Route::post('users', 'UserController@addProcess');
Route::get('users/edit/{id}', 'UserController@edit');
Route::patch('users/{id}', 'UserController@editProcess');
Route::delete('users/{id}', 'UserController@delete');

Route::resource('program','ProgramController');








Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
