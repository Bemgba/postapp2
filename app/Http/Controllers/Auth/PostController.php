<?php

namespace App\Http\Controllers\auth;
use App\Models\Post;
use App\Http\Controllers\api\Controller;
use Illuminate\Http\Request;
class PostController extends Controller
{
    //

    public function index(){

     //  $posts=Post::get();//collections
     //$posts=Post::orderBy('created_at', 'desc')->paginate(2);////...get all data from POST table  ORDERED BY created_at in descending order
      //Eager Loading USING ....with ('user','likes')....
    $posts=Post::orderBy('created_at', 'desc')->with ('user','likes')->paginate(20);
    //dd($posts);
        return view('posts.index', ['posts'=> $posts]);
    }


    public function show(Post $post){

      return view('posts.show', ['post'=>$post,]);
      //compact('post'));
      //->with('post',$post);
    }


    public function store(Request $request){
       //dd($request->only('body'));
        $this->validate($request, [
            'body'=> 'required'

           ]);

  /* */
          Post::create([
            'user_id'=>auth()->id(),
            'body'=> $request->body,

            ]);
            /* THE ERROR ENCOUNTERED WITH THE CODE BELOW
            BadMethodCallException
Method Illuminate\Database\Eloquent\Collection::create does not exist.
*/
          // $request->user()->posts->create($request->only('body'));
         return back();
    }
    public function destroy(Post $post, Request $request){
      //dd($post);
      // if(!$post->ownedBy(auth()->user())){
      //   dd('Need a policy to delete');
      // }

      //DELETE  POLICY IN USE with authorize key word
      //$this->authorize('delete',$post);
      $post = Post::find($request->post_id);
      $post->likes()->delete();
      $post->delete();
     return back();
    }


}
