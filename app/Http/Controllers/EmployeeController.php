<?php

namespace App\Http\Controllers;

use App\Models\Employee;



use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create()
    {
       
     return view('Employee.create');
    }


    public function index()
    {
       $std = Employee::all();
       $data = compact('std');
      
        return view('Employee.index')->with($data);
    }

    public function store(Request $req)
    {
        // echo '<pre>';
        // print_r($req->all());

        $std = new Employee();
        $std->name=$req['name'];
        $std->email=$req['email'];
        $std->address=$req['address'];
        $std->save();


        return redirect('index');

    }

    public function edit(int $id)
    {
        $emp = Employee::Where('std_id',$id)->first();
        return view('Employee.edit',compact('emp'));
    }
    
    public function update(int $id,Request $req)
    {
        $std = Employee::Where('std_id',$id);
        $std->Update([
            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address
        ]);

        return redirect('index');
    }


    public function delete(int $id){
        $emp = Employee::where('std_id',$id);
        $emp->delete();


        return redirect('index');

    }
}
