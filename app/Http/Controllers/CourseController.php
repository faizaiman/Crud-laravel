<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(){
        
        $course = \App\course::all();

        return view('course.index',['course'=>$course]);


    }
    public function add()
    {

      
        return view( 'course.add');
     
    }
    public function create(Request $request)
    {

        \App\course::create($request ->all());

        return redirect('/course')->with('Sukses','Course added');

    }

    public function edit($id)
    {
        $course = \App\course::find($id);
      // dd($student);
      return view('course/edit',['course'=>$course]);
    }

    
    public function update(Request $request,$id)
    {
        $course = \App\course::find($id);
       
         $course->update($request->all());
       // dd($course);
        return redirect('/course')->with('Sukses','Course Updated');
    }

    public function delete($id)
    {
        $course = \App\course::find($id);
        $course->delete($course);


        return redirect('/course')->with('Sukses','Course Deleted');
    }

}
