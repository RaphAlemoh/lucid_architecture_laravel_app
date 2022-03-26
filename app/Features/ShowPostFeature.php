<?php

namespace App\Features;

use Lucid\Units\Feature;
use App\Data\Models\Post;

class ShowPostFeature extends Feature
{
    public function __construct(
        public Post $post,
    ) {
    }


    public function handle()
    {
        return view('posts.show')->with('post', $this->post);
    }
}
