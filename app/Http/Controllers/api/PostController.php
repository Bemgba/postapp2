<?php

namespace App\Http\Controllers\api;
use App\Models\Post;
use App\Http\Controllers\api\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function self(){
        //$posts=auth()->user()->posts;
        try{
        $user=auth()->userOrFail();
        //get all POSTS with their USERS and LIKES
//$posts=Post::orderBy('created_at', 'desc')->with ('user','likes')->paginate(20);
        }catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){

            return response()->json(['error'=> $e->getMessage()]);

        }
        return $user->post;

    }

public function store(Request $request){
        $details = $request->only(['user_id', 'body']);
try{
    $user=auth()->userOrFail();

    }catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){

        return response()->json(['error'=> $e->getMessage()]);

    }
   $post=$user->post()->create($details);
   return $post;

}

}
