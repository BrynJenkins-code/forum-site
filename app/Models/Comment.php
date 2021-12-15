<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function userID(){
        return $this->hasOne('App\User');
    }
    public function postID(){
        return $this->hasOne('App\Post');
    }


}
