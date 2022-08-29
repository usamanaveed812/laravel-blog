<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'post';
    protected $primaryKey='id';
    public function likes(){
      return $this->hasMany('App\Models\LikeDislike','post_id')->sum('like');
    }
    public function dislikes(){
        return $this->hasMany('App\Models\LikeDislike','post_id')->sum('dislike');
      }
     
}
