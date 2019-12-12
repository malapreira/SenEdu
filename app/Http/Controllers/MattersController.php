<?php

namespace App\Http\Controllers;

use App\Matter;
use App\course;
use Illuminate\Http\Request;

class MattersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matters = Matter::All();
        $matters = \App\Matter::orderBy('created_at', 'DESC')->get();
        return view('matters.index', compact('matters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = \App\course::pluck('name','id');
        return view('matters.create', compact('courses'));

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
            'description' => 'max:1000000'
        ]);

        $matter = new Matter();
        $matter->name = $request->input('name');
        $matter->description = $request->input('description');
        $matter->course_id = $request->input('course_id');
        $matter->save();
        return redirect('/matter');
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
        $matter = \App\Matter::find($id);
        $courses = \App\course::pluck('name','id');
        return view('matters.edit', compact('matter','course'));

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
        $matter = \App\Matter::find($id);
        if($matter){
            $matter->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'course_id' => $request->input('course_id')->integer(),

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
