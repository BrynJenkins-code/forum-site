<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    use HasFactory;

    public function category(){
        return $this->hasOne('App\Categories');

    }
    public function comments(){
        return $this->hasMany('app\Comments');
    }
    public function noOfComments(){

}
}
