<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function IndexPost(){


        $posts = Post::with('user')->get();

       // return $posts ;
        return view('post.index',compact('posts'));
    }


    function show(Post $id){

        return view('post.show')->with('post',$id);
    }
}
