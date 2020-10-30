@extends('layout.master')
@extends('layout.navbar')
@section('content')

<div class="container">
    @if (session('Sukses'))
    <div class="alert alert-success" role="alert">
        {{session('Sukses')}}
 </div>
    @endif
    <div class="row">
       
         
        
        <div class="col-6">
           <h1>Course</h1>
        </div>
        
        <div class="col-6">
     
          <a href="/course/add" class="btn btn-info float-right">Add Data</a>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                  <th>Course Code</th>
                <th>Course Name</th>
                {{-- <th>Noic</th>
                <th>Gender</th>
                <th>Address</th>
                 --}}
                 <th>Action</th>
              </tr>
            </thead>
            <tbody>
               
                @foreach ($course as $course)
        
                <tr>
                <td>{{$course->Course_code}}</td>
                <td>{{$course->Course}}</td>
              
                  <td>
                    <a href="/course/{{$course->id}}/edit" class="btn btn-warning">Edit</a>
                     <a href="/course/{{$course->id}}/delete" class="btn btn-danger" onclick=" return confirm('Sure?')">Delete</a>
                    </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
</div>

    
@endsection
