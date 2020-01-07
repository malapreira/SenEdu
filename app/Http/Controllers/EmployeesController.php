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
        $employee = \App\Employee::orderBy('created_at', 'DESC')->get();
        return view('employees.index', compact('employee') );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = \App\Service::pluck('name','id');
        return view('employees.create', compact('employee','service'));
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
        $employee->year_birth = date('Y-m-d H:i:s', strtotime($request->input('year_birth')));
        $employee->Birth_Place = $request->input('Birth_Place');
        $employee->Marital_status = $request->input('Marital_status');
        $employee->status = $request->input('status');
        $employee->address = $request->input('address');
        $employee->phone = $request->input('phone');
        $employee->email = $request->input('email');
        $employee->service_id = $request->input('service_id');
        $employee->save();
        return redirect('/employee');

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
        $employee = \App\Employee::findOrfail($id);
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = \App\Employee::findOrfail($id);
        $service = \App\Service::pluck('name','id');
        return view('employees.edit', compact('employee','service'));
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
        $input = $request->all(); 

        $update = $employee->update($input);
    
        if($update){
            return redirect()->route('employees');
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
        $employee = Employee::findOrFail($id);
        //dd($matter);
        $delete = $employee->delete();
        
        if($delete){
            return redirect()->route('employees');
        }
    }
}
