
@extends('layout.master')
@section('content')
    

<div class="container">
   
    <div class="row">
       
         
        
        <div class="col-12">
           <h1>Edit</h1>
      
       
        <form action="/course/{{$course->id}}/update" method="POST"> 
            {{ csrf_field() }}
            <div class="form-group">
                <label >Course Code</label>
              <input name="Course_code" type="text" class="form-control" value="{{$course->Course_code}}">
      
              </div>
  
            <div class="form-group">
              <label >Name</label>
            <input name="Course" type="text" class="form-control" value="{{$course->Course}}">
    
            </div>

    
            
          

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
</div>
@endsection
    