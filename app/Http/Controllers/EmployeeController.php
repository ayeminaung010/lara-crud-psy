<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // list
    public function list(){
        $data = Employee::get();
        return view('employee.list')->with(['employees' => $data]);
    }

    // create
    public function createPage(){
        return view('employee.createList');
    }

    public function create(EmployeeRequest $request ) {
        Employee::create([
            'name' =>  $request->name,
            'job' =>  $request->job,
            'phone' =>  $request->phone,
            'address' =>  $request->address,
            'age' =>  $request->age,
        ]);
        return redirect('employee/list');
    }

    public function update(EmployeeRequest $request,$id ) {
        $employee = [
            'name' =>  $request->name,
            'job' =>  $request->job,
            'phone' =>  $request->phone,
            'address' =>  $request->address,
            'age' =>  $request->age,
        ];
        Employee::where('id',$id)->update($employee);
        return redirect('employee/list');
    }

    public function editPage($id){
        $data = Employee::find($id);
        return view('employee.editList')->with(['employee' => $data]);
    }

    public function delete($id){
        Employee::where('id',$id)->delete();
        return redirect('employee/list');
    }
}
