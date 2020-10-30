<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    protected $table='course';

    protected $fillable = [
        'Course','Course_code', 
    ];


    public function mark()
    {

    return $this->belongsToMany(mark::class);

    }

   
}
