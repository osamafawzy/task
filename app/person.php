<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    //
    public function photos(){
        return $this->hasMany('\App\photo');
    }
}
