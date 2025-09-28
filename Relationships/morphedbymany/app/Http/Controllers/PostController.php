<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Video;
use App\Models\Tag;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('tags')->find(1);
        return $posts;
    }
}
