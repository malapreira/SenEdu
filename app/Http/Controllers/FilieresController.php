<?php

namespace App\Http\Controllers;
use App\Filiere;
use Illuminate\Http\Request;

class FilieresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres = \App\Filiere::orderBy('created_at', 'DESC')->get();
        return view('filieres.index', compact('filieres'));

        $filiere->classroom_id = $request->input('classroom_id');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $classrooms = \App\Classroom::pluck('name','id');
        return view('filieres.create', compact('classrooms'));


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

        $filiere = new Filiere();
        $filiere->name = $request->input('name');
        $filiere->description = $request->input('description');
        $filiere->classroom_id = $request->input('classroom_id');
        $filiere->save();
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
        $filiere = \App\Filiere::find($id);//on recupere la filiere
        return view('filieres.edit', compact('filiere'));


        $filiere = \App\Filiere::find($id);
        $classrooms = \App\Classroom::pluck('name','id');
        return view('filieres.edit', compact('filiere','classrooms'));


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
        $filiere = \App\Filiere::find($id);
        if($filiere){
            $filiere->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'classroom_id' => $request->input('classroom_id'),

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
