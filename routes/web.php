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

Route::get('/', "HomeController@index");

/*
Route::get("/Eleves", "ElevesController@index");

Route::get("/produit/{id}", function($id){
    return "Je suis le produit $id";
});

Route::get("/Eleves/{id}", "ElevesController@show");

*/