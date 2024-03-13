<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    public function student(){
        $data = Students::paginate(3);
        return view('students.student', ['students' => $data]);
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $studentData = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'date_of_birth' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phonenumber' => 'numeric|digits:11',
            'address' => 'required',
        ]);

        $newStudent = Students::create($studentData);
        return redirect(route('students.student'))->with('success', 'Data Added Successfully');
    }

    public function edit(Students $students){
        return view('students.edit', ['students' => $students]);
    }

    public function update(Students $students, Request $request){
        $data = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'date_of_birth' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phonenumber' => 'numeric|digits:11|unique:students,phonenumber',
            'address' => 'required',
        ]);

        $students->update($data);
        return redirect(route('students.student'))->with('success', 'Student Updated Successfully!');
    }

    public function destroy(Students $students){
        $students->delete();  
        return redirect(route('students.student'))->with('success', 'Data Successfully Deleted!');
    }

}
