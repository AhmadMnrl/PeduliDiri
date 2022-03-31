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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/signin', 'AuthController@login')->name('login');
Route::post('/postsignin','AuthController@postlogin');

Route::get('/signup', 'AuthController@register')->name('register');
Route::post('/postregister','AuthController@postregister');

Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth','prevent-back-history']],function(){

        Route::get('/perjalanan', 'PerjalananController@index');
        Route::get('/perjalanan/create', 'PerjalananController@create');
        Route::post('/perjalanan/store', 'PerjalananController@store');
        Route::get('/perjalanan/edit/{id}', 'PerjalananController@edit');
        Route::put('/perjalanan/update/{id}', 'PerjalananController@update');
        Route::get('/hapusall', 'PerjalananController@hapusAll');
        Route::get('/perjalanan/delete/{id}', 'PerjalananController@destroy');


    Route::get('/propil/edit/{id}', 'ProfileController@edit');
    Route::put('/propil/update/{id}', 'ProfileController@update');

    Route::get('/dataUser', 'PerjalananController@dataUser')->name('user.data');
    Route::get('/dataUser/cetak_pdf', 'PerjalananController@cetak_pdf');
    Route::get('/hapus/user/{id}','PerjalananController@hapus');
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });

});



// Auth::routes(['verify'=>true]);

// Route::get('/home', 'HomeController@index')->name('home');
