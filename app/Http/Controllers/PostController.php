<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   function index(){
     $data = Post::all();

     return view('post.index',['posts'=>$data]);
   }

   function show($id){
    $post = Post::findOrFail($id);
    return view('post.show',['show'=>$post]);
   }

   function create(){
    $post = Post::create([
    'title'=> 'My sthird post',
    'body'=> 'this is my content',
    'auther'=> 'salah',
    'published'=> true,
   ]);

   return redirect('/blog');
   }
}
