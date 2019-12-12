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
        return view('parent_students.create');
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
        $parent_student->Birth_Place = $request->input('birth_Place');
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
        $parent_student = \App\Parent_student::find($id);
        return  view('$parent_student.edit', compact('$parent_student'));

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
        $parent_student = \App\Parent_student::find($id);
        if($parent_student){
            $parent_student->update([
                'name'=>$request->input('name'),
                'first_name'=>$request->input('first_name'),
                'civility'=>$request->input('civility'),
                'year_birth'=>date('Y-m-d H:i:s', strtotime($request->input('year_birth'))),
                'Birth_Place'=>$request->input('Birth_Place'),
                'Marital_status'=>$request->input('Marital_status'),
                'status'=>$request->input('status'),
                'address'=>$request->input('address'),
                'phone'=>$request->input('phone'),
                'email'=>$request->input('email'),
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
