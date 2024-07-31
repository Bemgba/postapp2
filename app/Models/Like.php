<?php

namespace App\Models;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
       
    ];

/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'post_id',
        'user_id',
    ];



 //a like belongs to only a posts
    public function posts(){

        return $this->belongsTo(Post::class);
                    } 

  //like belongs to a user
 public function user()
                    {
                        return $this->belongsTo(User::class);
                    }
}
