<?php

namespace App\Http\Controllers\Auth;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    //
    public function allposts(){
        $posts=Post::get();
        return response()->json($posts,200);
            }

    public function postsave(Request $request){

         $posts = Post::create($request ->all());

        // $posts = new \App\Models\Post;
        // $posts->user_id = \Auth::user()->id;
        // $posts->body = $request->body;
        // $posts->save();
            return response()->json( $posts,201);
//         $posts = new Post;
//     $posts->user_id = $request->user_id;
//     $posts->body = $request->body;
//     $posts->save();
//    // return response()->json($student, 201);
//     return response()->json(["message" => "Post record created"],201);
        }


        
}
