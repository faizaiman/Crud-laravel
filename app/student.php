<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $table= 'student';



    protected $fillable = [
        'Name', 'Noic', 'Jantina','Alamat',
    ];

    
    public function mark(){

        return $this->belongsToMany(mark::class);

    }

}
