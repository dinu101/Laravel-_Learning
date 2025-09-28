<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Image;

class UserController extends Controller
{
    //for user 
    public function index(){
      $user = User::find(1);
      $user->Image()->create([
        'url'=>'https://xxx.com'
      ]);
      return $user;
    }

    ///for post
    public function posta(){
    $post = Post::find(1);
    $post->image()->create([
     'url'=>'https:://teremeraehra.com'
    ]);
    return $post;
    }
}
