<?php

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

// Route::get('/', function () {
//     return view('index');
// });
Route::view('/', 'front.welcome')->name('home');
Route::view('/detail', 'front.produits.detail')->name('front.produits.detail');

Route::group(['prefix' => 'admin'], function () {
	//Dashboard
    Route::view('/', 'back.index')->name('back.home');

    //Produits
    Route::group(['prefix' => 'produits/'], function () {
        Route::view('/', 'back.produits.index')->name('back.produits');
        Route::view('/5/detail', 'back.produits.details')->name('back.produits.details');
        Route::view('/create', 'back.produits.create')->name('back.produits.create');
        Route::view('/update', 'back.produits.update')->name('back.produits.update');
    });

    //Utilisateurs
    Route::group(['prefix' => 'utilisateurs/'], function () {
        Route::view('/', 'back.utilisateurs.index')->name('back.utilisateurs');
        Route::view('/5/detail', 'back.utilisateurs.details')->name('back.utilisateurs.details');
        Route::view('/create', 'back.utilisateurs.create')->name('back.utilisateurs.create');
        Route::view('/update', 'back.utilisateurs.update')->name('back.utilisateurs.update');
    });
});
