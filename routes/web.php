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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/1', function () {
    return view('accueil');
});
Route::get('/detail', function () {
    return view('produits.detail');
});

Route::resource('clients', 'clientController');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('categories', 'categorieController');

Route::resource('produits', 'produitController');

Route::resource('ventes', 'venteController');

Route::get('categorie/{nom}/produits', 'produitController@index')->name('produits.categorie');

Route::get('categorie/{nom}/produits', 'produitController@article')->name('produits.categori');

Route::post('/panier/ajouter', 'cartController@store')->name('cart.store');

Route::get('/panier','cartController@index')->name('cart.index');

Route::delete('/panier/{rowId}','cartController@destroy')->name('cart.destroy');

Route:: get('/viderpanier', function(){Cart::destroy();
});

 