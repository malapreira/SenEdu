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
        return view('classrooms.create', compact('filiere'));
     
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
        $classroom = \App\Classroom::find($id);//on recupere le produit);
        $filiere = \App\Filiere::pluck('name','id');
        return view('classrooms.edit', compact('classroom','filiere'));

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
        $classroom = \App\Course::find($id);
        if($classroom){
            $classroom->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'filiere_id' => $request->input('filiere_id'),

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
