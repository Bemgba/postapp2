<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
public function delete(User $user, Post $post){
    //In the PROVIDERS, authServiceProviders
    //write
    //protected $policies = [
//Post::class => PostPolicy::class,
    //];
    return $user->id === $post->user_id;
}
   
}
