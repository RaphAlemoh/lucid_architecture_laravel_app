<?php

namespace App\Features;

use Lucid\Units\Feature;
use App\Data\Models\Post;

class EditPostFeature extends Feature
{
    public function __construct(
        public Post $post,
    ) {
    }

    public function handle()
    {
        return view('posts.edit')->with('post', $this->post);;
    }
}
