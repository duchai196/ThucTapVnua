<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Type_post extends Model
{
    public function post()
    {
        return $this->hasMany('App\Model\Post');
    }

}
