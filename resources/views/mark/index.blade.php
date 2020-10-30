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
           <h1>Mark</h1>
        </div>
        <div class="col-6">
          <a href="/mark/search" class="btn btn-secondary float-right">Search</a>
          <span>
          <a href="/mark/add" class="btn btn-info float-right">Add Data</a>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                  <th>Student Name</th>
                  <th>Course Code</th>
                  <th>Course Name</th>
                  <th>Mark</th>

                {{-- <th>Noic</th>
                <th>Gender</th>
                <th>Address</th>
                 --}}
                 <th>Action</th>
              </tr>
            </thead>
            <tbody>
               
                @foreach ($mark as $mark)
        
                <tr>
                <td>{{$mark->student->Name}}</td>
                <td>{{$mark->course->Course_code}}</td> 
                <td>{{$mark->course->Course}}</td>
                 <td>{{$mark->Mark}}</td>
           
                  <td>
                    <a href="/mark/{{$mark->id}}/edit" class="btn btn-warning">Edit</a>
                     <a href="/mark/{{$mark->id}}/delete" class="btn btn-danger" onclick=" return confirm('Sure?')">Delete</a>
                    </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
</div>

    
@endsection
