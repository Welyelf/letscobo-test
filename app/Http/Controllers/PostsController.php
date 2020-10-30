<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;


class PostsController extends Controller
{
    //
    public function show($slug)
    {
        //$posts = DB::table('posts')->where('slug',$slug)->first();

        $posts = Post::where('slug',$slug)->firstOrFail();
       // dd($posts);

//        $posts = [
//            'one' => 'I am number 1 in Controller',
//            'two' => 'I am number 2',
//        ];

        return view('test',[
            'post' => $posts
        ]);
    }
}
