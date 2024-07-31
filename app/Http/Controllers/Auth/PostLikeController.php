<?php

namespace App\Http\Controllers\auth;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class PostLikeController extends Controller
{
public function _construct (){
  $this->middleware(['auth']);//making sure only authiticated users can like and unlike
}
public function store(Post $post, Request $request)
{ //dd($post->likedBy($request->user()));//=false
  
  //dd($request->user()->id);//=1
  //dd($request->post_id);//=1
 //dd($request->all());
  //dd('store3');
   $this->validate($request, [
   'user_id'=>'required',
    'post_id'=>'required',
    
   ]);

  // dd($request);
//checking whether a user has liked the post before and more than once
  //  if($post->likes()->user()->id->count()>1){
    
  //    return response('multiples likes not allowed',409);
  //  }


  //  //add like to a post 
  //sql_MEANING::insert into `likes` (`user_id`, `post_id`, `updated_at`, `created_at`) values (user_id_value, post_id_value, 2022-05-29 14:19:39, 2022-05-29 14:19:39))  
    $like = new Like;
    $like->user_id = \Auth::user()->id;
    $like->post_id = $request->post_id;
    $like->save();
    return back();  

  //ANOTHER METHOD OF STORING THE LIKES
  //  $post->likes()->create([
  //  'user_id'=>$request->user()->id,
  //  'post_id'=>$request->Post_id, ]);
  // return back();
}

public function destroy(Request $request){
// dd($post);
//delete the LIKES by this AUTH user WHERE 'post_id' column of the likes table = reguested post_id(i.e post to be unliked)
 $request->user()->likes()->WHERE('post_id',$request->post_id)->delete();
 

  return bacK();
}

}