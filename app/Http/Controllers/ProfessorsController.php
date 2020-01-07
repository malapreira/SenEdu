<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;

class ProfessorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $professors = Professor::All();
        $professor = \App\Professor::orderBy('created_at', 'DESC')->get();
        return view('professors.index', compact('professor') );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher_types = \App\Teacher_type::pluck('name','id');
        $matter = \App\Matter::pluck('name','id');

        return view('professors.create',compact('professor','teacher_types','matter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professor = new Professor();
        $professor->name = $request->input('name');
        $professor->first_name = $request->input('first_name');
        $professor->civility = $request->input('civility');
        $professor->year_birth = date('Y-m-d H:i:s', strtotime($request->input('year_birth')));
        $professor->Birth_Place = $request->input('Birth_Place');
        $professor->Marital_status = $request->input('Marital_status');
        $professor->status = $request->input('status');
        $professor->address = $request->input('address');
        $professor->phone = $request->input('phone');
        $professor->email = $request->input('email');
        $professor->teacher_type_id = $request->input('teacher_type_id');
        $professor->matter_id = $request->input('matter_id');

        $professor->save();
        return redirect('/professor');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = \App\professor::findOrfail($id);
        return view('professors.show',compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = \App\Professor::findOrfail($id);
        $teacher_types = \App\Teacher_type::pluck('name','id');
        $matters = \App\Matter::pluck('name','id');
        return  view('professors.edit', compact('professor','teacher_type','matter'));

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
        $professor = \App\Professor::find($id);
        $input = $request->all(); 

        $update = $professor->update($input);
    
        if($update){
            return redirect()->route('professors');
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
        $professor = Matter::findOrFail($id);
        //dd($matter);
        $delete = $professor->delete();
        
        if($delete){
            return redirect()->route('professors');
        }
    }
}
