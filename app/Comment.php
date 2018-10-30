<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Comment;

class Comment extends Model
{
    protected $guarded=['id'];
    protected $table='comment';

    public function post()
    {
        return $this->belongsTo('App\post');
    }

}
