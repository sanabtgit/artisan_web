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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('admin/user', 'UsersController@index');

Route::resource('admin/produit', 'Admin\\produitController');
Route::resource('admin/client', 'Admin\\clientController');
Route::get('admin/users', 'Admin\usersController@index');


Route::resource('admin/artisan', 'Admin\\artisanController');
Route::resource('admin/categorie_produit', 'Admin\\categorieController');
Route::resource('admin/avis', 'Admin\\avisController');
Route::resource('admin/delegation', 'Admin\\delegationController');
//Route::get('categorie/{nom}/produits', 'produitController@index')->name('produit.categorie');