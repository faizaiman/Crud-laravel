<?php

namespace App\Http\Controllers;
use App\mark;
use App\course;
use App\student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MarkController extends Controller
{
    //
    public function index()
    {

        $mark = mark::all();
        return view( 'mark.index',['mark'=>$mark]);
     
    }

    public function add(){

        $student = student::all(['id','Name']);
        $course = course::all(['id','Course']);
        return view('mark.add',['student'=>$student],['course' =>$course]);

    }
    public function create(Request $request)
    {

        mark::create($request->all());

        return redirect('/mark')->with('Sukses','Mark added');

    }

    public function edit($id)
    {
       $mark=  mark::find($id);
       $student = student::all(['id','Name']);
       $course = course::all(['id','Course']);
    //   return view('mark/edit',['mark'=>$mark],['student'=>$student],['course'=>$course]);
    return view('mark/edit',compact('student','course','mark'));
    }
    public function update(Request $request,$id)
    {
        $mark = mark::find($id);
       
         $mark->update($request->all());
        return redirect('/mark')->with('Sukses','Mark Updated');
    }

    public function delete($id)
    {
        $mark = mark::find($id);
        $mark->delete($mark);


        return redirect('/mark')->with('Sukses','Data Deleted');
    }

    public function search(){

        $course = course::all();
        return view( 'mark.search',compact('course'));
    }

    public function findCourse(Request $request)
    {
        //dd($request->id);
     $data = mark::where('course_id',$request->id)->with('student')->get();
   
     return response()->json($data);


    }
    public function findmark(Request $request)
    {
        
    $data = mark::where('student_id',$request->id)->pluck('Mark');
  // dd($data);
     return response()->json($data);


    }

}



