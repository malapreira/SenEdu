<?php

namespace App\Http\Controllers;

use App\Classroom;
use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classroom = \App\Classroom::orderBy('created_at', 'DESC')->get();
        return view('classrooms.index', compact('classroom'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filiere = \App\Filiere::pluck('name','id');
        $level = \App\Level::pluck('name','id');
        return view('classrooms.create', compact('filiere','level'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $classroom = new Classroom();
        $classroom->name = $request->input('name');
        $classroom->description = $request->input('description');
        $classroom->filiere_id = $request->input('filiere_id');
        $classroom->level_id = $request->input('level_id');

        $classroom->save();
        return redirect('/classroom');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classroom = \App\Classroom::findOrfail($id);
        return view('classrooms.show',compact('classroom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classroom = \App\Classroom::find($id);//on recupere le produit);
        $filiere = \App\Filiere::pluck('name','id');
        $level = \App\Level::pluck('name','id');
        return view('classrooms.edit', compact('classroom','filiere','level'));

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
        $classroom = \App\Classroom::find($id);
        $input = $request->all(); 

        $update = $classroom->update($input);
    
        if($update){
            return redirect()->route('classrooms');
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
        $classroom = Classroom::findOrFail($id);
        //dd($matter);
        $delete = $classroom->delete();
        
        if($delete){
            return redirect()->route('classrooms');
        }
    }
}
