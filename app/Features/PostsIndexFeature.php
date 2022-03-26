<?php

namespace App\Features;

use Lucid\Units\Feature;
use App\Data\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsIndexFeature extends Feature
{
    public function handle()
    {

        $posts = Post::where('user_id', Auth::user()->id)->latest()->get();

        return view('posts.index', compact('posts'));
    }
}
