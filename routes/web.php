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

Route::get('/parent_students', 'ParentsController@index');

Route::get('/students/save', 'StudentsController@create_student')->name('create_student');

Route::get('/employees/save', 'EmployeesController@create_employees')->name('create_employee');

Route::get('/professors/save', 'ProfessorsController@create_professors')->name('create_professor');

Route::get('/parent_students/save', 'Parent_studentsController@create_parent_student')->name('create_parent_student');

Route::patch('/students/modifier/{id}', 'StudentsController@update')->name('update_student');

Route::patch("/employee/modifier/{id}", "EmployeesController@update")->name('update_employee');

Route::patch("/professor/modifier/{id}", "ProfessorsController@update")->name('update_professor');

Route::get('/parent_student/modifier/{id}', 'Parent_studentsController@update_parent_student')->name('update_parent_student');

Route::resource('/professors', 'ProfessorsController');

Route::resource('/employees', 'EmployeesController');

Route::resource('parent_students', 'Parent_studentsController');

Route::resource('students', 'StudentsController');


Route::get('/home', 'HomeController@index')->name('home');
