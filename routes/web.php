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

Route::resource('/course',          'CoursesController');
Route::get("/course/edit/{id}",     "CoursesController@edit")->name('edit_course');
Route::get("/course/edit/{id}",     "CoursesController@update")->name('update_course');
Route::get('/course/save',          'CoursesController@create')->name('create_course');

Route::resource('/control',         'ControlsController');
Route::get("/control/edit/{id}",    "ControlsController@edit")->name('edit_control');
Route::patch("/control/edit/{id}",  "ControlsController@update")->name('update_control');
Route::get('/control/save',         'ControlsController@create')->name('create_control');


Route::resource('/teacher_type',        'Teacher_typesController');
Route::get("/teacher_type/edit/{id}",    "Teacher_typesController@edit")->name('edit_teacher_type');
Route::patch("/teacher_type/edit/{id}", "Teacher_typesController@update")->name('update_teacher_type');
Route::get('/teacher_type/save',        'teacher_TypesController@create')->name('create_teacher_type');


Route::resource('/classroom',           'ClassroomsController');
Route::get("/classroom/edit/{id}",     "ClassroomsController@edit")->name('edit_classroom');
Route::patch("/classroom/edit/{id}",    "ClassroomsController@update")->name('update_classroom');
Route::get('/classroom/save',          'ClassroomsController@create')->name('create_classroom');

Route::resource('/inscription',       'InscriptionsController');
Route::get("/inscription/edit/{id}",   "InscriptionsController@edit")->name('edit_inscription');
Route::patch("/inscription/edit/{id}", "InscriptionsController@update")->name('update_inscription');
Route::get('/inscription/save',         'InscriptionsController@create')->name('create_inscription');


Route::get('/parent_student',              'Parent_studentsController@index')->name('index');
Route::get('/parent_student/save',         'Parent_studentsController@create_parent_student')->name('create_parent_student');
Route::patch('/parent_student/edit/{id}',   'Parent_studentsController@update_parent_student')->name('update_parent_student');
Route::resource('parent_student',           'Parent_studentsController');

//Route::get('/student', 'StudentsController');
Route::get("/student/edit/{id}",    "StudentsController@edit")->name('edit_student');
Route::post('/student/save',        'StudentsController@create_student')->name('create_student');
Route::resource('/student',         'StudentsController');
Route::patch('/student/edit/{id}', 'StudentsController@update')->name('update_student');

Route::get('/employee/save',        'EmployeesController@create_employees')->name('create_employee');
Route::patch("/employee/edit/{id}", "EmployeesController@update")->name('update_employee');
Route::resource('/employee',        'EmployeesController');
Route::get("/employee/edit/{id}",   "EmployeesController@edit")->name('edit_employee');


Route::patch("/professor/edit/{id}",    "ProfessorsController@update")->name('update_professor');
Route::resource('/professor',           'ProfessorsController');
Route::get('/professor/save',           'ProfessorsController@create_professors')->name('create_professor');
Route::get("/professor/edit/{id}",      "professorsController@edit")->name('edit_professor');


Route::resource('/filiere',         'FilieresController');
Route::patch("/filiere/edit/{id}", "FilieresController@update")->name('update_filiere');
Route::get("/filiere/edit/{id}",    "FilieresController@edit")->name('edit_filiere');
Route::get("/filiere/save",         "FilieresController@create")->name('create_filiere');

Route::resource('/service',        'ServicesController');
Route::get("/service/edit/{id}",   "ServicesController@create_service")->name('create_service');
Route::get("/service/edit/{id}",    "ServicesController@edit")->name('edit_service');
Route::patch("/service/save",       "ServicesController@update")->name('update_service');

Route::resource('/level',       'LevelsController');
Route::get('/level/edit/{id}', 'LevelsController@edit')->name('edit_level');
Route::get("/level/save",       "LevelsController@create_level")->name('create_level');
Route::patch("/level/edit/{id}", "LevelsController@update")->name('update_level');

Route::resource('/academic_year',       'Academic_YearsController');
Route::get("/academic_year/save",       "Academic_YearsController@create_academic_year")->name('create_academic_year');
Route::patch("/academic_year/edit/{id}","Academic_YearsController@update")->name('update_academic_year');
Route::get("/academic_year/edit/{id}",  "Academic_YearsController@edit")->name('edit_academic_year');

Route::resource('/matter',          'MattersController');
Route::get("/matter/save",          "MattersController@create_matter")->name('create_matter');
Route::patch("/matter/edit/{id}",   "MattersController@update")->name('update_matter');
Route::get("/matter/edit/{id}",     "MattersController@edit")->name('edit_matter');
