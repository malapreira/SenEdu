<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = \App\Employee::orderBy('created_at', 'DESC')->get();
        return view('employees.index', compact('employees') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->first_name = $request->input('first_name');
        $employee->civility = $request->input('civility');
        $employee->year_birth = $request->input('year_birth');
        $employee->Birth_Place = $request->input('Birth_Place');
        $employee->Marital_status = $request->input('Marital_status');
        $employee->status = $request->input('status');
        $employee->address = $request->input('address');
        $employee->phone = $request->input('phone');
        $employee->email = $request->input('email');
        $employee->save();
        return redirect('/');

        /*
         return view('employees.index', ['employees' => Employee::all()]);
         */
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
        $employees = \App\Employee::find($id);
        return  view('employees.modifier', compact('employees'));

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
        $employee = \App\Employee::find($id);
        if($employee){
            $employee->update([
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
