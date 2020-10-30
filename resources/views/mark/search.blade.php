
@extends('layout.master')
@section('content')
    

<div class="container">
   
    <div class="row">
       
         
        
        <div class="col-12">
           <h1>Nested</h1>
      
       
     
             
           {!! Form::hidden('_method', 'PUT') !!}
            <div class="col-md-6">
               {!!Form::label('course_id','Course:')!!}
               <select name="course_id" id="course_id" class="form-control">
                   <option>--- Please Select ---</option>
                   @foreach ($course as $courses)
                    <option value="{{$courses->id}}">{{$courses->Course}}</option>  
                   @endforeach
               </select>
           </div>

           <div class="col-md-6">
               {!!Form::label('student_id','Student:')!!}
               <select name="student_id" id="student_id" class="form-control">

               </select>
           </div>

           <div class="col-md-6">
            {!!Form::label('mark_id','Subject Mark:')!!}
            {!!Form::text('mark_id',null,['class'=>'form-control','readonly'])!!}
            <input type="text" name="mark" id="mark" value="" hidden>
            </select>
        </div>

           
        </div>
    </div>
            
          

     
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>



    $('#course_id').on('keyup change',function()
    {
        var course_id=$(this).val();
        console.log("course_id:"+course_id)

        var op="";

        $('#student_id').empty();

        $.ajax({
            type:'GET',
            url:'{!!URL::to('findCourse')!!}',
              data:{'id':course_id},
            success:function(data){
                console.log(data)
                op+='<option value=0 selected disable>Please choose..</option>';
                for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].student_id+'">'+data[i].student.Name+'</option>';
                    
                }

                $('#student_id').append(op);

            },
            error:function(){

                
            }
        });
    });

    $('#student_id').on('keyup change',function(){

        var student_id=$(this).val();
        console.log("student_id:"+student_id)
        var mark = "";
        $.ajax({
            type:'GET',
            url:'{!!URL::to('findmark')!!}',
            data:{'id':student_id},
            success:function(data){
                console.log(data[0])
            mark+=data.Mark;
                $('#mark_id').val(data);
               
            }

        });

    });
       
    
</script>

@endsection
    