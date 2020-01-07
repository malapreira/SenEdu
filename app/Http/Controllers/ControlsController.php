<?php

namespace App\Http\Controllers;

use App\Control;
use Illuminate\Http\Request;

class ControlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $control = \App\Control::orderBy('created_at', 'DESC')->get();
        return view('controls.index', compact('control'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('controls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $control = new Control();
        $control->name = $request->input('name');
        $control->date = $request->input('date');
        $control->early_hour = $request->input('early_hour');
        $control->end_hour = $request->input('end_hour');
        $control->save();
        return redirect('/control');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $control = \App\Control::findOrfail($id);
        return view('controls.show',compact('control'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $control = \App\Control::find($id);//on recupere le produit
        return view('controls.edit', compact('control'));

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
        $control = \App\Control::find($id);
        $input = $request->all(); 

        $update = $control->update($input);
    
        if($update){
            return redirect()->route('controls');
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
       $control = Control::findOrFail($id);
        //dd($matter);
        $delete = $control->delete();
        
        if($delete){
            return redirect()->route('controls');
        }
    }
}
