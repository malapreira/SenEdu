<?php

namespace App\Http\Controllers;

use App\Professor;
use App\Teacher_type;
use Illuminate\Http\Request;

class ProfessorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $professors=Professor::all();Professor::all();
        return view('professors.index', compact('professors') );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher_type = Teacher_type::pluck('name','id');

        return view('professors.create',compact('teacher_type'));
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
        $professor->year_birth = $request->input('year_birth');
        $professor->Birth_Place = $request->input('Birth_Place');
        $professor->Marital_status = $request->input('Marital_status');
        $professor->status = $request->input('status');
        $professor->address = $request->input('address');
        $professor->phone = $request->input('phone');
        $professor->email = $request->input('email');
        $professor->teacher_type_id = $request->input('teacher_type_id');

        $professor->save();
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
        $professors = \App\Professor::find($id);
        $teacher_types = \App\Teacher_type::pluck('name','id');
        return  view('professors.modifier', compact('professors','teacher_type'));

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
                'year_birth'=>$request->input('year_birth'),
                'Birth_Place'=>$request->input('Birth_Place'),
                'Marital_status'=>$request->input('Marital_status'),
                'status'=>$request->input('status'),
                'address'=>$request->input('address'),
                'phone'=>$request->input('phone'),
                'email'=>$request->input('email'),
                'teacher_type_id' => $request->input('teacher_type_id'),

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
