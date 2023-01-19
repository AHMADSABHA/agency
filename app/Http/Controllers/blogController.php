<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\comment;
use App\Models\tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
   public function index(Request $request){
      $blog=blog::all();
      
      $blog_tag=DB::table('blogs')->join('blog_to_blog_tags','blogs.blog_id','=','blog_to_blog_tags.blog_id')
      ->join('tags','blog_to_blog_tags.tag_id','=','tags.tag_id')->get();
      $tags=tag::all();
      //$comment_count=DB::table('comments')->where('comments.blog_id','=','blogs.blog_id')->groupBy('comments.id')->all();
     // dd($comment_count);
    return view('website-bages.blog.index',compact('blog','blog_tag','tags'));

   }
   public function read(Request $request){
      $blog=blog::all()->where('blog_id','=',$request->blog_id)->first();
      //$comment=DB::table('comments')->join('blogs','comments.blog_id','=','blogs.blog_id')->all();
   
      $comment=blog::find($request->blog_id)->comment->all();

    return view('website-bages.blog-details.index',compact('blog','comment'));
   } 
   public function store( Request $request){
      
      $message =new comment();
      $message->id=$request->id;
      $message->blog_id = $request->post('blog_id');
      $message->name= $request->post('name');
      $message->date_comment = Carbon::now();
      $fn=time().$request->file('icon')->getClientOriginalName();
      $path=$request->file('icon')->storeAs('images',$fn,'public');
      $message['icon']='/storage/'.$path;
      $message->icon = $message['icon'];
      $message->content = $request->post('content');
      $message->save();
      return redirect()->route('blogs-details.view',['blog_id'=>$request->blog_id]);
         
      
  }
}
