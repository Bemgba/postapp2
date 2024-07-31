<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserPostController extends Controller
{
    //show user and her post,dtails
    public function index(User $user){
           // dd($user);
           $posts=$user->post()->with(['user','likes'])->paginate(2);
        return view('users.posts.indexcomp',[
            'user'=>$user,
            'posts'=>$posts,
        ]);
    }
}
