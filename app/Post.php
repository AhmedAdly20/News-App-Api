<?php

namespace App;

use App\User;
use App\Category;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title' , 'content' , 'date_written' ,
        'featured_image' , 'votes_up' , 'votes_down' ,
        'user_id' , 'category_id','voters_up','voters_down'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
