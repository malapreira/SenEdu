<?php

namespace App\Http\Controllers;


use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = \App\Student::orderBy('created_at', 'DESC')->get();
        return view('students.index', compact('students') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $parent_students = \App\parent_student::pluck('name','id');
        return view('students.create', compact('parent_students'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->input('name');
        $student->first_name = $request->input('first_name');
        $student->civility = $request->input('civility');
        $student->year_birth = $request->input('year_birth');
        $student->Birth_Place = $request->input('Birth_Place');
        $student->address = $request->input('address');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');
        $student->parent_student_id = $request->input('parent_student_id');
        $student->save();
        return redirect('/');
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
        $student = \App\Student::find($id);
        $parent_students = \App\parent_student::pluck('name','id');
        return view('students.edit', compact('student','parent_students'));


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
        $student= \App\Student::find($id);
        if($student) {
            $student->update([
                'name' => $request->input('name'),
                'first_name' => $request->input('first_name'),
                'civility' => $request->input('civility'),
                'year_birth' => $request->input('year_birth'),
                'Birth_Place' => $request->input('Birth_Place'),
                'Marital_status' => $request->input('level'),
                'status' => $request->input('filiere'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'parent_student_id' => $request->input('parent_student_id'),

            ]);
        }

        return redirect()->back();

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
