<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;

class LevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levels = \App\Level::orderBy('created_at', 'DESC')->get();
        return view('levels.index', compact('levels') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = \App\Student::pluck('name','id');
        return view('levels.create', compact('students'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|min:5',
            'price' => 'required|max:7|numeric',
            'description' => 'max:1000000'
        ]);

        $levels = new Level();
        $levels->name = $request->input('name');
        $levels->description = $request->input('description');
        $levels->student_id = $request->input('student_id');
        $levels->save();
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
        $levels = \App\Level::find($id);
        $students = \App\Student::pluck('name','id');
        return view('levels.edit', compact('level','students'));


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
        $levels = \App\Level::find($id);
        if($levels){
            $levels->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'student_id' => $request->input('student_id'),
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
