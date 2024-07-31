<?php

namespace App\Models;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
/*this is a fuction to handle  a column that has been reserved for system usage only <created_at>*/
    protected $casts = [
        'created_at' => 'datetime:Y-m-d h:m:s',
    ];


    protected $fillable = [
    'body',
    'user_id',
    ];
    
/* function to make sure a user likes a post only once*/
    public function LikedBy(User $user){

return $this->likes->contains('user_id', $user->id);

    }
public function ownedBy (User $user){
    return $user->id === $this->user_id;
}

    /*this is a fuction to handle  a post belongs to only one user relationship*/
    public function user(){

        return $this->belongsTo(User::class);
            }


 /*this is a fuction to handle a post has many likes relationship*/

public function likes()
{
    return $this->hasMany(Like::class,'post_id');
}

}