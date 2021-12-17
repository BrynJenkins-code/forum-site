<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $post_title;
    /**
     * @var mixed
     */
    private $user_id;
    /**
     * @var mixed
     */
    private $category_id;
    /**
     * @var mixed
     */
    private $post_content;

    public function category(){
        return $this->hasOne('App\Models\Categories');

    }
    public function comments(){
        return $this->hasMany('App\Models\Comments');
    }
    public function noOfComments(){

}
}
