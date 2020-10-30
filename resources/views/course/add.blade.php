
@extends('layout.master')
@section('content')
    

<div class="container">
   
    <div class="row">
       
         
        
        <div class="col-12">
           <h1>Add Course</h1>
      
       
           <form action="/course/create" method="POST"> 
            {{ csrf_field() }}

            <div class="form-group">
                <label >Course Code</label>
                <input name="Course_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      
              </div>
            <div class="form-group">
              <label >Course Name</label>
              <input name="Course" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
            </div>
          
    
            
          

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
</div>
@endsection
    