<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mark extends Model
{
    //
    protected $table='mark';

    protected $fillable =[
        'student_id','course_id','Mark',
    ];

    public function course(){

        return $this->belongsTo(course::class);

    }


    public function student(){

        return $this->belongsTo(student::class);
    }
}
