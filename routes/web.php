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
})->name('app.welcome');

Route::get('finish', 'FinishController@finish')->name('app.finish');

Route::get('show', 'RecipeController@show')->name('app.recipe.show');
Route::get('show-all', 'RecipeController@showAll')->name('app.recipe.show-all');

Auth::routes();
Route::get('show-own', 'RecipeController@showOwn')->name('app.recipe.show-own');
Route::get('edit/{id?}', 'RecipeController@edit')->name('app.recipe.edit');
Route::post('store', 'RecipeController@store')->name('app.recipe.store');

Route::get('dashboard', 'HomeController@index')->name('app.auth.dashboard');

