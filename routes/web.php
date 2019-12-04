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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get("/employees", "EmployeesController@index");

Route::get('/parents', 'ParentsController@index');

Route::get('/students', 'StudentsController@index');

Route::get('/employees/save', 'EmployeesController@create_employees')->name('create_employee');

Route::resource('/employees', 'EmployeesController');

Route::patch("/employee/modifier/{id}", "EmployeesController@update")->name('update_employee');

Route::resource('parents', 'ParentsController');

Route::resource('students', 'StudentsController');


Route::get('/home', 'HomeController@index')->name('home');
