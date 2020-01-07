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
        $student = \App\Student::orderBy('created_at', 'DESC')->get();
        return view('students.index', compact('student') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $parent_students = \App\parent_student::pluck('name','id');
        $classroom = \App\Classroom::pluck('name','id');
        return view('students.create', compact('parent_students','classroom'));

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
        $student->year_birth = date('Y-m-d H:i:s', strtotime($request->input('year_birth')));
        $student->Birth_Place = $request->input('birth_Place');
        $student->address = $request->input('address');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');
        $student->parent_student_id = $request->input('parent_student_id');
        $student->classroom_id = $request->input('classroom_id');
        $student->save();
        return redirect('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = \App\Student::findOrfail($id);
        return view('students.show',compact('student'));
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
        $classroom = \App\Classroom::pluck('name','id');
        return view('students.edit', compact('student','parent_students','classroom'));


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
        $input = $request->all(); 

        $update = $student->update($input);
    
        if($update){
            return redirect()->route('students');
        }
        
        /*if($student) {
            $student->update([
                'name' => $request->input('name'),
                'first_name' => $request->input('first_name'),
                'civility' => $request->input('civility'),
                'year_birth' => date('Y-m-d H:i:s', strtotime($request->input('year_birth'))),
                'Birth_Place' => $request->input('birth_Place'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'parent_student_id' => $request->input('parent_student_id'),
                'classroom_id' => $request->input('classroom_id'),

            ]);
        }

        return redirect()->back();
        */
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        //dd($matter);
        $delete = $student->delete();
        
        if($delete){
            return redirect()->route('students');
        }
    }
}