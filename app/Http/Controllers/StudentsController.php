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
        return view('students.create');
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
        $student->Marital_status = $request->input('Marital_status');
        $student->status = $request->input('status');
        $student->address = $request->input('address');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');
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
        $students = \App\Parent::find($id);
        return  view('students.modifier', compact('students'));

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
        if($student){
            $student->update([
                'name'=>$request->input('name'),
                'first_name'=>$request->input('first_name'),
                'civility'=>$request->input('civility'),
                'year_birth'=>$request->input('year_birth'),
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
