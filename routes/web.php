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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('course', 'CoursesController');
Route::get("/course/edit/{id}", "CoursesController@edit")->name('editer_course');
Route::patch("/course/edit/{id}", "CoursesController@update")->name('update_course');
Route::get('/course/save', 'CoursesController@create')->name('create_course');

Route::resource('teacher_type', 'Teacher_typesController');
Route::get("/teacher_type/edit/{id}", "Teacher_typesController@edit")->name('editer_teacher_type');
Route::patch("/teacher_type/edit/{id}", "Teacher_typesController@update")->name('update_teacher_type');
Route::get('/teacher_type/save', 'teacher_TypesController@create')->name('create_teacher_type');


Route::resource('classroom', 'ClassroomsController');
Route::get("/classroom/edit/{id}", "ClassroomsController@edit")->name('editer_classroom');
Route::patch("/classroom/edit/{id}", "ClassroomsController@update")->name('update_classroom');
Route::get('/classroom/save', 'ClassroomsController@create')->name('create_classroom');


Route::get('/parent_students', 'ParentsController@index');
Route::post('/parent_students/save', 'Parent_studentsController@create_parent_student')->name('create_parent_student');
Route::patch('/parent_student/modifier/{id}', 'Parent_studentsController@update_parent_student')->name('update_parent_student');
Route::resource('parent_students', 'Parent_studentsController');

Route::post('/students/save', 'StudentsController@create_student')->name('create_student');
Route::resource('students', 'StudentsController');
Route::patch('/students/modifier/{id}', 'StudentsController@update')->name('update_student');

Route::post('/employees/save', 'EmployeesController@create_employees')->name('create_employee');
Route::patch("/employee/modifier/{id}", "EmployeesController@update")->name('update_employee');
Route::resource('/employees', 'EmployeesController');
Route::post("/employee/edit/{id}", "EmployeesController@edit")->name('editer_employee');


Route::patch("/professor/modifier/{id}", "ProfessorsController@update")->name('update_professor');
Route::resource('/professors', 'ProfessorsController');
Route::post('/professors/save', 'ProfessorsController@create_professors')->name('create_professor');
Route::post("/professor/edit/{id}", "professorsController@edit")->name('editer_professor');


Route::resource('filieres', 'FilieresController');
Route::get("/filieres/edit/{id}", "FilieresController@edit")->name('editer_filiere');
Route::patch("/filieres/edit/{id}", "FilieresController@update")->name('update_filiere');

Route::resource('services/', 'ServicesController');
Route::get("/services/edit/{id}", "ServicesController@create_service")->name('create_service');
Route::patch("/services/save", "ServicesController@update")->name('update_service');

Route::get('/level/edit/{id}', 'LevelsController@edit')->name('editer_level');
Route::resource('levels/', 'LevelsController');
Route::get("/levels/edit/{id}", "LevelsController@create_level")->name('create_level');
Route::patch("/levels/save", "LevelsController@update")->name('update_level');

Route::resource('matter', 'MattersController');
Route::get("/matters/edit/{id}", "MattersController@create_matter")->name('create_matter');
Route::patch("/matter/edit/{id}", "MattersController@update")->name('update_matter');
Route::get("/matter/edit/{id}", "MattersController@edit")->name('editer_matter');
