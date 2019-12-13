<?php

namespace App\Http\Controllers;

use App\Academic_Year;
use Illuminate\Http\Request;

class Academic_YearsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academic_year = \App\Academic_Year::All();
        $academic_year = \App\Academic_Year::orderBy('created_at', 'DESC')->get();
        return view('academic__year.index', compact('academic_year'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academic__year.create');
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

        $academic_year = new Academic_Year();
        $academic_year->academic = $request->input('academic');
        $academic_year->description = $request->input('description');
        $academic_year->save();
        return redirect('/academic_year');

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
        $academic_year = \App\Academic_Year::find($id);
        return view('academic_years.edit', compact('academic_year'));
        
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
        $academic_year = \App\Academic_Year::find($id);
        if($academic_year){
            $academic_year->update([
                'academic' => $request->input('academic'),
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
