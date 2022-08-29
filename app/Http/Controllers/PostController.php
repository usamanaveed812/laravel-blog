<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\LikeDislike;


class PostController extends Controller
{
    public function index(){
        
        $post = Post::all();
        
        // Debugbar::warning('info!');
        
        return view('post.index',['post'=> $post]);
    }
    public function create(){
         return view('post.newpost');
    }
    
    
    public function store(Request $request){
    
    //validate datas
    
    $request->validate([
         'title'=>'required|unique:post|max:200',
         'description'=>'required',
         'name'=>'required|max:200',
         'image'=>'required',
    ]);
    //dd($request);
    

    $file = $request->file('image');
    
    $name = strtotime(date('Y-m-d')) . '.' . $request->file('image')->getClientOriginalExtension();
    $avatar = $request->file('image')->storeAs('images', $name, 'public');


    $post = new Post;
        $post->title=$request->title;
        $post->name=$request->name;
        $post->description=$request->description;
        $post->image=$name;
        $post->save();
       
        return redirect('/post')->withSuccess('New post Created');
    
    }

    
    

    public function storecomment(Request $request)
    {
        // dd($request->get('comment'));
        $comment = new Comment;
        $comment->name = $request->input('name');
        // $comment->email = $request->input('email');
        $comment->comment = $request->input('comment_body');
        $comment->post_id = $request->get('post_id');
     
       $comment->save();
        return back();
    }
    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->body = $request->get('comment');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $post = Post::find($request->get('post_id'));

        $post->comments()->save($reply);

        return back();

    }

    public function edit($id){
        $post = Post::where('id',$id)->first();
     

        return view('post.editpost',['post' => $post]);    
  
}
    public function update(Request $request,$id){

        $post = Post::where('id',$id)->first();
        $post->title=$request->title;
        $post->description=$request->description;
        $post->image=$request->image;
        $post->save();
        return redirect('/post');

    }
    public function show($id){
        
        $post = Post::where('id',$id)
        //->with('user:id,name','comments.replies','user:id,name','comments.user:id,name','comments.replies.user:id,name')
        ->first();
        $comments = Comment::where('post_id',$id)->get();
        //print_r($comments);



        return view('post.show',['post' => $post,'comments'=>$comments]); 
       

    }
    public function destroy($id){
        $post = Post::where('id',$id)
        ->first();
        
    
        $post->delete();
        return redirect('/post');
    }
    function save_likedislike(Request $request){
        $data = new LikeDislike;
        $data->post_id=$request->post;
        if($request->type=='like'){
            $data->like=1;
        }else{
            $data->dislike=1;
        }
        $data->save();
        return response()->json([
            'bool'=>true
        ]);
    }
    public function index1(){
       $post = Post::all(); 
        return view('admin.post.index',compact('post'));
    }
    public function admincreate(){
        return view('admin.post.create');
       
    }
    public function adminstore(Request $request){
    
        $request->validate([
            'title'=>'required|unique:post|max:200',
            'description'=>'required',
            'name'=>'required|max:200',
            'image'=>'required',
       ]);
       //dd($request);
       
   
       $file = $request->file('image');
       
       $name = strtotime(date('Y-m-d')) . '.' . $request->file('image')->getClientOriginalExtension();
       $avatar = $request->file('image')->storeAs('images', $name, 'public');
   
   
       $post = new Post;
           $post->title=$request->title;
        //    $post->name=$request->name;
           $post->description=$request->description;
           $post->image=$name;
           $post->save();
          
        
           
            return redirect('posts')->withSuccess('New Post Created');
           
        }
        public function adminedit($id){
            $post = Post::where('id',$id)->first();
         
    
            return view('admin.post.editpost',['post' => $post]);    
      
    }
    public function adminupdate(Request $request,$id){

        $post = Post::where('id',$id)->first();
        $post->title=$request->title;
        $post->description=$request->description;
        $post->image=$request->image;
        $post->status=$request->status == true ? '1':'0';
        $post->save();
        return redirect('posts')->withSuccess('Post updated Successfully');;

    }
    public function admindestroy($id){
        $post = Post::where('id',$id)
        ->first();
        
    
        $post->delete();
        return redirect('posts');
    }
    
}
  