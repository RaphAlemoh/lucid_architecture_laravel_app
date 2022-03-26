<?php

namespace App\Features;

use Lucid\Units\Feature;
use App\Data\Models\Post;

class DeletePostFeature extends Feature
{
    public function __construct(
        public Post $post,
    ) {
    }


    public function handle()
    {

        $this->post->delete();

        return redirect()->route('posts.create')
        ->with('success', 'Post deleted!!!');
    }
}
