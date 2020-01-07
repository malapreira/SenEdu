<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_count = Student::all()->count();
        $employees_count = Employee::all()->count();
        $matters_count = Matter::all()->count();
        $filiere_count = Filiere::all()->count();
        $classrooms_count = Classroom::all()->count();
        $controls_count = Control::all()->count();
        $course_count = Course::all()->count();
        $inscriptions_count = Inscription::all()->count();
        $levels_count = Level::all()->count();
        $parent_student_count = Parent_student::all()->count();
        $professors_count = Professor::all()->count();
        $services_count = Service::all()->count();
        $teacher_type_count = Teacher_type::all()->count();
        $categories_count = Category::all()->count();
        $control_inscriptions_count = Control_Inscription::all()->count();
        $academic_year_count = Academic_Year::all()->count();
        return view('admin.index',compact('parent_students_count', 'teacher_types_count', 'control_inscriptions_count', 'academic_years_count', 'students_count', 'employees_count', 'matters_count', 'filieres_count', 'classrooms_count', 'controls_count', 'courses_count', 'inscriptions_count', 'levels_count', 'professors_count', 'services_count', 'categories_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
