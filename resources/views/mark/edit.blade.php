
@extends('layout.master')
@section('content')
    

<div class="container">
   
    <div class="row">
       
         
        
        <div class="col-12">
           <h1>Edit</h1>
      
       
        <form action="/mark/{{$mark->id}}/update" method="POST"> 
            {{ csrf_field() }}
          

            <div class="form-group">
                <label  for="exampleFormControlSelect1">Student</label>
                <select  name ="student_id" class="form-control" id="exampleFormControlSelect1">
                <option value="{{$mark->student->id}}">{{$mark->student->Name}}</option>
                <option>--Choose--</option>
                  @foreach ($student as $students)
                <option value="{{$students->id}}">{{$students->Name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">

                <label  for="exampleFormControlSelect1">Course</label>
                <select  name ="course_id" class="form-control">
                <option value="{{$mark->course->id}}">{{$mark->course->Course}}</option>
                <option>--Choose--</option>
                @foreach ($course as $courses)
                <option value="{{$courses->id}}">{{$courses->Course}}</option>
                      
                  @endforeach
                </select>
            </div>

            <div class="form-group">
                <label >Mark</label>
              <input name="Mark" type="text" class="form-control" value="{{$mark->Mark}}">
      
              </div>
  

            
            

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
</div>
@endsection
    