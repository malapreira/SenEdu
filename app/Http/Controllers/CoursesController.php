<?php

namespace App\Http\Controllers;

use App\course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = \App\course::orderBy('created_at', 'DESC')->get();
        return view('courses.index', compact('course'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matter = \App\Matter::pluck('name','id');
        $classroom = \App\Classroom::pluck('name','id');
        $professor = \App\Professor::pluck('name','id');
        return view('courses.create', compact('classroom','matter','professor'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new course();
        $course->name = $request->input('name');
        $course->date = date('Y-m-d H:i:s', strtotime($request->input('date')));
        $course->early_hour = $request->input('early_hour');
        $course->end_hour = $request->input('end_hour');
        $course->description = $request->input('description');
        $course->classroom_id = $request->input('classroom_id');
        $course->matter_id = $request->input('matter_id');
        $course->professor_id = $request->input('professor_id');
        $course->save();
        return redirect('/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = \App\course::findOrfail($id);
        return view('courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = \App\course::find($id);//on recupere le produit
        $matter = \App\Matter::pluck('name','id');
        $classroom = \App\Classroom::pluck('name','id');
        $professor = \App\Professor::pluck('name','id');
        return view('courses.edit', compact('course','classroom','matter','professor'));

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
        $course = \App\course::find($id);
        $input = $request->all(); 

        $update = $course->update($input);
    
        if($update){
            return redirect()->route('courses');
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
        $course = course::findOrFail($id);
        //dd($matter);
        $delete = $course->delete();
        
        if($delete){
            return redirect()->route('courses');
        }
    }
}

