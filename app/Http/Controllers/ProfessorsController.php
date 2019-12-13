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

        return view('professors.create',compact('teacher_types','matter'));
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
        $professor = \App\Professor::find($id);
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
        if($professor){
            $professor->update([
                'name'=>$request->input('name'),
                'first_name'=>$request->input('first_name'),
                'civility'=>$request->input('civility'),
                'year_birth'=>date('Y-m-d H:i:s', strtotime($request->input('year_birth'))),
                'Birth_Place'=>$request->input('Birth_Place'),
                'Marital_status'=>$request->input('Marital_status'),
                'status'=>$request->input('status'),
                'address'=>$request->input('address'),
                'phone'=>$request->input('phone'),
                'email'=>$request->input('email'),
                'teacher_type_id' => $request->input('teacher_type_id'),
                'matter_id' => $request->input('matter_id'),

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
