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

Route::get('/acces', 'AccesController@index')->name('acces');

Route::resource('/control_inscription',          'Control_InscriptionController');
Route::get("/control_inscription/edit/{id}",     "Control_InscriptionController@edit")->name('edit_control_inscription');
Route::patch("/control_inscription/edit/{id}",     "Control_InscriptionController@update")->name('update_control_inscription');
Route::get('/control_inscription/save',          'Control_InscriptionController@create')->name('create_control_inscription');

Route::resource('/course',          'CoursesController');
Route::get("/courses",              "CoursesController@index")->name('courses');
Route::get("/course/delete/{id}",   "CoursesController@destroy")->name('delete_course');
Route::get("/course/show/{id}",     "CoursesController@show")->name('show_course');
Route::get("/course/edit/{id}",     "CoursesController@edit")->name('edit_course');
Route::patch("/course/edit/{id}",     "CoursesController@update")->name('update_course');
Route::get('/course/save',          'CoursesController@create')->name('create_course');


Route::resource('/teacher_type',        'Teacher_typesController');
Route::get("/teacher_types",             "Teacher_typesController@index")->name('teacher_types');
Route::get("/teacher_type/delete/{id}",  "Teacher_typesController@destroy")->name('delete_teacher_type');
Route::get("/teacher_type/show/{id}",    "Teacher_typesController@show")->name('show_teacher_type');
Route::get("/teacher_type/edit/{id}",    "Teacher_typesController@edit")->name('edit_teacher_type');
Route::patch("/teacher_type/edit/{id}", "Teacher_typesController@update")->name('update_teacher_type');
Route::get('/teacher_type/save',        'teacher_TypesController@create')->name('create_teacher_type');


Route::resource('/classroom',           'ClassroomsController');
Route::get("/classrooms",              "ClassroomsController@index")->name('classrooms');
Route::get("/classroom/delete/{id}",   "ClassroomsController@destroy")->name('delete_classroom');
Route::get("/classroom/show/{id}",     "ClassroomsController@show")->name('show_classroom');
Route::get("/classroom/edit/{id}",     "ClassroomsController@edit")->name('edit_classroom');
Route::patch("/classroom/edit/{id}",    "ClassroomsController@update")->name('update_classroom');
Route::get('/classroom/save',          'ClassroomsController@create')->name('create_classroom');

Route::resource('/inscription',       'InscriptionsController');
Route::get("/inscription/edit/{id}",   "InscriptionsController@edit")->name('edit_inscription');
Route::patch("/inscription/edit/{id}", "InscriptionsController@update")->name('update_inscription');
Route::get('/inscription/save',         'InscriptionsController@create')->name('create_inscription');



Route::get('/parent_students',              'Parent_studentsController@index')->name('parent_students');
Route::get("/parent_student/delete/{id}",   "Parent_studentsController@destroy")->name('delete_parent_student');
Route::get("/parent_student/show/{id}",     "Parent_studentsController@show")->name('show_parent_student');
Route::get("/parent_student/edit/{id}",     "Parent_studentsController@edit")->name('edit_parent_student');
Route::get('/parent_student/save',          'Parent_studentsController@create_parent_student')->name('create_parent_student');
Route::patch('/parent_student/edit/{id}',   'Parent_studentsController@update')->name('update_parent_student');
Route::resource('parent_student',           'Parent_studentsController');

Route::resource('/student',         'StudentsController');
Route::get('/students',             'StudentsController@index')->name('students');
Route::get("/student/delete/{id}",  "StudentsController@destroy")->name('delete_student');
Route::get("/student/show/{id}",    "StudentsController@show")->name('show_student');
Route::get("/student/edit/{id}",    "StudentsController@edit")->name('edit_student');
Route::post('/student/save',        'StudentsController@create_student')->name('create_student');
Route::patch('/student/edit/{id}',  'StudentsController@update')->name('update_student');

Route::resource('/employee',        'EmployeesController');
Route::get('/employees',             'EmployeesController@index')->name('employees');
Route::get('/employee/show/{id}',    'EmployeesController@show')->name('show_employee');
Route::get('/employee/delete/{id}',  'EmployeesController@destroy')->name('delete_employee');
Route::get("/employee/edit/{id}",   "EmployeesController@edit")->name('edit_employee');
Route::get('/employee/save',        'EmployeesController@create_employees')->name('create_employee');
Route::patch("/employee/edit/{id}", "EmployeesController@update")->name('update_employee');

Route::resource('/professor',           'ProfessorsController');
Route::get("/professors",               "ProfessorsController@index")->name('professors');
Route::get("/professor/delete/{id}",    "ProfessorsController@destroy")->name('delete_professor');
Route::get("/professor/show/{id}",      "ProfessorsController@show")->name('show_professor');
Route::patch("/professor/edit/{id}",    "ProfessorsController@update")->name('update_professor');
Route::get('/professor/save',           'ProfessorsController@create_professors')->name('create_professor');
Route::get("/professor/edit/{id}",      "professorsController@edit")->name('edit_professor');

Route::resource('/filiere',         'FilieresController');
Route::get("/filieres",              "FiliereController@index")->name('filieres');
Route::get("/filiere/delete/{id}",   "FiliereController@destroy")->name('delete_filiere');
Route::get("/filiere/show/{id}",     "FiliereController@show")->name('show_filiere');
Route::patch("/filiere/edit/{id}",  "FilieresController@update")->name('update_filiere');
Route::get("/filiere/edit/{id}",    "FilieresController@edit")->name('edit_filiere');
Route::get("/filiere/save",         "FilieresController@create")->name('create_filiere');

Route::resource('/service',         'ServicesController');
Route::get("/services",             "ServicesController@index")->name('services');
Route::get("/service/delete/{id}",  "ServicesController@destroy")->name('delete_service');
Route::get("/service/show/{id}",    "ServicesController@show")->name('show_service');
Route::get("/service/save",         "ServicesController@create_service")->name('create_service');
Route::get("/service/edit/{id}",    "ServicesController@edit")->name('edit_service');
Route::patch("/service/edit/{id}",  "ServicesController@update")->name('update_service');

Route::resource('/level',          'LevelsController');
Route::get("/levels",              "LevelsController@index")->name('levels');
Route::get("/level/save",          "LevelsController@create_level")->name('create_level');
Route::get("/level/delete/{id}",   "LevelsController@destroy")->name('delete_level');
Route::patch("/level/edit/{id}",   "LevelsController@update")->name('update_level');
Route::get("/level/edit/{id}",     "LevelsController@edit")->name('edit_level');
Route::get("/level/show/{id}",     "LevelsController@show")->name('show_level');

Route::resource('/academic_year',               'Academic_YearsController');
Route::get('/academic_years',               'Academic_YearsController@index')->name('academic_years');
Route::get('/academic_year/delete/{id}',    'Academic_YearsController@destroy')->name('delete_academic_year');
Route::get('/academic_year/show/{id}',     'Academic_YearsController@show')->name('show_academic_year');
Route::get("/academic_year/save",               "Academic_YearsController@create_academic_year")->name('create_academic_year');
Route::patch("/academic_year/edit/{id}",        "Academic_YearsController@update")->name('update_academic_year');
Route::get("/academic_year/edit/{id}",          "Academic_YearsController@edit")->name('edit_academic_year');

Route::resource('/matter',          'MattersController');
Route::post('/ajout_matter',        'AjaxController@ajout_matter');
Route::get("/matters",              "MattersController@index")->name('matters');
Route::get("/matter/save",          "MattersController@create_matter")->name('create_matter');
Route::get("/matter/delete/{id}",   "MattersController@destroy")->name('delete_matter');
Route::patch("/matter/edit/{id}",   "MattersController@update")->name('update_matter');
Route::get("/matter/edit/{id}",     "MattersController@edit")->name('edit_matter');
Route::get("/matter/show/{id}",     "MattersController@show")->name('show_matter');

Route::resource('/control',         'ControlsController');
Route::get("/control/edit/{id}",    "ControlsController@edit")->name('edit_control');
Route::get("/controls",             "ControlsController@index")->name('controls');
Route::get("/control/delete/{id}",  "ControlsController@destroy")->name('delete_control');
Route::get("/control/show/{id}",    "ControlsController@show")->name('show_control');
Route::patch("/control/edit/{id}",  "ControlsController@update")->name('update_control');
Route::get('/control/save',         'ControlsController@create')->name('create_control');
