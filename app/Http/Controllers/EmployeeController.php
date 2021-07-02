<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $employees = Employee::orderBy('id','desc')->get();
          return view('employee.index', compact('employees'));
    }
    public function add_employee(Request $req)
    {
        if( $req->isMethod('post')){

            $validator = Validator::make($req->all(), [
                'employee_id' => 'required',
                'name' => 'required',

            ]);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }

            $employee=new Employee();
            $employee->employee_id=$req->employee_id;
            $employee->name=$req->name;
            $employee->designation=$req->designation;
            $employee->save();

        }
        return view('employee.add_employee');
    }

    public function edit_employee(Request $request, $id)
    {
        //Update User
        $employee = Employee::find($id);
        // $roleUser = UserRole::where('id',$id)->get()->first();
        if( $request->isMethod('post')){

            //Start Validation
            $messages = [

                'employee_id' => 'Employee Id field is required',
                'name' => 'Name Id field is required',

            ];
            $validator = Validator::make($request->all(), [
                'employee_id' => 'required',
                'name' => 'required',
            ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //end Validation

            $employee->employee_id=$request->employee_id;
            $employee->name=$request->name;
            $employee->designation=$request->designation;
            $employee->save();

            return redirect()->back()->with('success','Employee has been updated.');

        }

        return view('employee.edit', compact('employee'));
    }

    public function delete_employee($id)
    {
        Employee::where(['id' => $id])->delete();
        return redirect()->back();
    }

    public function view_employee($id)
    {
        $viewEmployee=Employee::find($id);
        return view('employee.viewEmployee', compact('viewEmployee'));

    }
}
