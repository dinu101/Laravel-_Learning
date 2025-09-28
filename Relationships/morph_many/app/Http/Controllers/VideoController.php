<?php

namespace App\Http\Controllers;
use App\Models\Video;
use App\Models\Post;
use App\Models\Comment;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
    $videos = Video::with('comments')->find(1);
    return $videos;
    // $videos->comments()->create([
    //   'body'=>'very good video'
    // ]);
    }

    public function papa(){
    $posts = Post::with('comments')->find(1);
    return $posts;
    // $posts->comments()->create([
    //  'body'=>'nice post'
    // ]);
    }
}
