<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::all();
        return view('departments.index', ['deaprtments' => $departments]);
    }

    public function create(){
        return view('departments.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'department_name' => 'required|string',
            'department_head' => 'required|string',
        ]);

        if($data > 1){
            return redirect(route('departments.create'))->with('success', 'Person Already Exist!');

        }

        $storeData = Department::create($data);
        return redirect(route('departments.index'))->with('success', 'Successfully Added!');
    }

}
