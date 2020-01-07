<?php

namespace App\Http\Controllers;

use App\Control_Inscription;
use Illuminate\Http\Request;

class Control_InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $control_inscription = \App\Control_Inscription::orderBy('created_at', 'DESC')->get();
        return view('control_inscriptions.index', compact('control_inscription'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $control = \App\Control::pluck('name','id');
        $inscription = \App\Inscription::pluck('name','id');
        return view('control_inscriptions.create', compact('control','inscription'));

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
            'note'=>'required|min 2',
            'description' => 'max:100'
        ]);

        $classroom = new Classroom();
        $classroom->name = $request->input('name');
        $classroom->description = $request->input('description');
        $classroom->filiere_id = $request->input('filiere_id');
        $classroom->level_id = $request->input('level_id');

        $classroom->save();
        return redirect('/classroom');

        control_inscription::create($request->all());
        return redirect('/control_inscription');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $control_inscription = \App\Control_Inscription::findOrfail($id);
        return view('control_inscriptions.show',compact('control_inscription')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $control_inscription = \App\Control_Inscription::findOrfail($id);
        return view('control_inscriptions.edit',compact('control_inscription'));
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
        $control_inscription = \App\Control_Inscription::find($id);
        $input = $request->all(); 

        $update = $control_inscription->update($input);
    
        if($update){
            return redirect()->route('control_inscriptions');
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
        $control_inscription = Control_Inscription::findOrFail($id);
        //dd($matter);
        $delete = $control_inscription->delete();
        
        if($delete){
            return redirect()->route('control_inscriptions');
        }
    }
}
