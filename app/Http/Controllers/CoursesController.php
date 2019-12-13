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
        $course = \App\Course::find($id);
        if($course){
            $course->update([
                'name' => $request->input('name'),
                'date' => date('Y-m-d H:i:s', strtotime($request->input('date'))),
                'description' => $request->input('description'),
                'classroom_id' => $request->input('classroom_id'),
                'matter_id' => $request->input('matter_id'),
                'professor_id' => $request->input('professor_id'),

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
