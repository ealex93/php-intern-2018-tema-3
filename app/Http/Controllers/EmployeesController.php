<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // Return all employees
    public function showAllEmployees(){
        $employees = Employee::all();

        return json_encode($employees);
    }

    //Return employee by id
    public function showEmployeeById($id){
        $employee = Employee::find($id);

        return json_encode($employee);
    }

    public function create(Request $request)
    {
        $employee = Employee::create($request->all());
        return response()->json($employee);
    }

    public function update($id, Request $request)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return response()->json($employee);
    }

    public function delete($id)
    {
        $employee=Employee::find($id)->delete();
        return response('Deleted Successfully');
    }




    // //Return employees by type
    // public function showEmployeeByJob(Request $request){
    //     $employees = Employee::where('job', $job)->get();

    //     return json_encode($employees);
    // }
}
