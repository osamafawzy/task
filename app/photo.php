<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    //

    protected $fillable = ['person_id', 'photo'];
    public function person(){
        return $this->belongsTo('App\person');
    }
}
