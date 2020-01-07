<?php

namespace App\Http\Controllers;

use App\parent_student;
use Illuminate\Http\Request;

class Parent_studentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent_student = \App\parent_student::orderBy('created_at', 'DESC')->get();
        return view('parent_students.index', compact('parent_student') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parent_students.create',compact('parent_student'));;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parent_student = new parent_student();
        $parent_student->name = $request->input('name');
        $parent_student->first_name = $request->input('first_name');
        $parent_student->civility = $request->input('civility');
        $parent_student->year_birth = date('Y-m-d H:i:s', strtotime($request->input('year_birth')));
        $parent_student->Birth_Place = $request->input('Birth_Place');
        $parent_student->Marital_status = $request->input('Marital_status');
        $parent_student->status = $request->input('status');
        $parent_student->address = $request->input('address');
        $parent_student->phone = $request->input('phone');
        $parent_student->email = $request->input('email');
        $parent_student->save();
        return redirect('/parent_student');

        /*
         return view('employees.index', ['employees' => Employee::all()]);
         */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parent_student = \App\parent_student::findOrfail($id);
        return view('parent_students.show',compact('parent_student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parent_student = \App\parent_student::findOrfail($id);
        return view('parent_students.edit',compact('parent_student'));

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
        $parent_student = \App\parent_student::find($id);
        $input = $request->all(); 

        $update = $parent_student->update($input);
    
        if($update){
            return redirect()->route('parent_students');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parent_student = parent_student::findOrFail($id);
        //dd($matter);
        $delete = $parent_student->delete();
        
        if($delete){
            return redirect()->route('parent_students');
        }
    }
}
