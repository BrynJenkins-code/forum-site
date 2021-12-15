<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    use HasFactory;

    public function category(){
        return $this->hasOne('App\Models\Categories');

    }
    public function comments(){
        return $this->hasMany('App\Models\Comments');
    }
    public function noOfComments(){

}
}
