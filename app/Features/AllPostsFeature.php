<?php

namespace App\Features;

use Lucid\Units\Feature;
use App\Data\Models\Post;

class AllPostsFeature extends Feature
{
    public function handle()
    {
            $posts = Post::latest()->get();

            return view('home', compact('posts'));

    }
}
