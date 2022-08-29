<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $post = Post::count();
        $users = User::where('role_as','0')->count();
        $admins = User::where('role_as','1')->count();
        $comments = Comment::count();
        
        return view('admin.dashboard',compact('post','users','admins','comments'));
    
        }
}
