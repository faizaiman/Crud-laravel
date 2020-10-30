
@extends('layout.master')
@section('content')
    

<div class="container">
   
    <div class="row">
       
         
        
        <div class="col-12">
           <h1>Add Mark</h1>
      
       
        <form action="/mark/create" method="POST"> 
            {{ csrf_field() }}
              <div class="form-group">
                    <label  for="exampleFormControlSelect1">Student</label>
                    <select  name ="student_id" class="form-control" id="exampleFormControlSelect1">
                      @foreach ($student as $students)
                    <option value="{{$students->id}}">{{$students->Name}}</option>
                          
                      @endforeach
                    </select>
                  </div>
            <div class="form-group">

                <label  for="exampleFormControlSelect1">Course</label>
                <select  name ="course_id" class="form-control" id="exampleFormControlSelect1">
                  @foreach ($course as $courses)
                <option value="{{$courses->id}}">{{$courses->Course}}</option>
                      
                  @endforeach
                </select>
            </div>

            <div class="form-group">
                <label >Mark</label>
                <input name="Mark" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      
              </div>

    
            
          

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
</div>
@endsection
    