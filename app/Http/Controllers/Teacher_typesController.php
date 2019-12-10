<?php

namespace App\Http\Controllers;

use App\Teacher_type;
use Illuminate\Http\Request;

class Teacher_typesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher_types = \App\Teacher_type::orderBy('created_at', 'DESC')->get();
        return view('teacher_types.index', compact('teacher_types'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher_type = new Teacher_type();
        $teacher_type->name = $request->input('name');
        $teacher_type->description = $request->input('description');
        $teacher_type->save();
        return redirect('/teacher_type');
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
        $teacher_type = \App\Teacher_type::find($id);//on recupere le produit
        return view('teacher_types.edit', compact('teacher_type'));
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
        $teacher_type = \App\Teacher_type::find($id);
        if($teacher_type){
            $teacher_type->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
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
