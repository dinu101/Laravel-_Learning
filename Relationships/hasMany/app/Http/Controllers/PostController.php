<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function index(){
    $posts = Post::with('comment')->get();
    return response()->json($posts->toArray());
    }
}
