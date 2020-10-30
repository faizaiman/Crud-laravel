
@extends('layout.master')
@section('content')
    

<div class="container">
   
    <div class="row">
       
         
        
        <div class="col-12">
           <h1>Edit</h1>
      
       
        <form action="/student/{{$student->id}}/update" method="POST"> 
            {{ csrf_field() }}
            <div class="form-group">
              <label >Name</label>
            <input name="Name" type="text" class="form-control" value="{{$student->Name}}">
    
            </div>
            <div class="form-group">
              <label >Noic</label>
            <input name="Noic" type="text" class="form-control" value="{{$student->Noic}}">
            </div>

            <div class="form-group">
                <label  for="exampleFormControlSelect1">Gender</label>
                <select  name ="Jantina" class="form-control" id="exampleFormControlSelect1">
                  <option value="L" @if($student->Jantina == 'L') selected @endif>Male</option>
                  <option value="P" @if($student->Jantina == 'P') selected @endif>Female</option>
                  
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Address</label>
              <textarea name="Alamat"class="form-control" id="exampleFormControlTextarea1" rows="3">{{$student->Alamat}}</textarea>
              </div>
            
          

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
</div>
@endsection
    