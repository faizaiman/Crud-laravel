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
           <h1>Student</h1>
        </div>
        <div class="col-6">
          <a href="/student/add" class="btn btn-info float-right">Add Data</a>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Noic</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               
                @foreach ($student as $student)
        
                <tr>
                <td>{{$student->Name}}</td>
                <td>{{$student->Noic}}</td>
                {{-- <td>{{$student->Jantina}}</td> --}}
                <td>
                    @if ($student->Jantina == 'L')
                    Lelaki
                        
                    @else
                         Perempuan
                    @endif
                </td>
                <td>{{$student->Alamat}}</td>
                <td>
                <a href="/student/{{$student->id}}/edit" class="btn btn-warning">Edit</a>
                <a href="/student/{{$student->id}}/delete" class="btn btn-danger" onclick=" return confirm('Sure?')">Delete</a>
                </td>
                </tr> 
                @endforeach
              
            </tbody>
          </table>
    </div>
</div>

    
@endsection
