<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {

        $student = \App\student::all();
        return view( 'student.index',['student'=>$student]);
     
    }
    public function add()
    {

        return view( 'student.add');
     
    }

    public function create(Request $request)
    {

        \App\student::create($request ->all());

        return redirect('/student')->with('Sukses','Data added');

    }

    public function edit($id)
    {
        $student = \App\student::find($id);
      // dd($student);
      return view('student/edit',['student'=>$student]);
    }

    public function update(Request $request,$id)
    {
        $student = \App\student::find($id);
       
         $student->update($request->all());
        //dd($student);
        return redirect('/student')->with('Sukses','Data Updated');
    }

    public function delete($id)
    {
        $student = \App\student::find($id);
        $student->delete($student);


        return redirect('/student')->with('Sukses','Data Deleted');
    }
}
