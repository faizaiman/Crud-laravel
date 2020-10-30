
@extends('layout.master')
@section('content')
    

<div class="container">
   
    <div class="row">
       
         
        
        <div class="col-12">
           <h1>Add Student</h1>
      
       
           <form action="/student/create" method="POST"> 
            {{ csrf_field() }}
            <div class="form-group">
              <label >Name</label>
              <input name="Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
            </div>
            <div class="form-group">
              <label >Noic</label>
              <input name="Noic" type="text" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="form-group">
                <label  for="exampleFormControlSelect1">Gender</label>
                <select  name ="Jantina" class="form-control" id="exampleFormControlSelect1">
                  <option value="L">Male</option>
                  <option value="P">Female</option>
                  
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Address</label>
                <textarea name="Alamat"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

    
            
          

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
</div>
@endsection
    