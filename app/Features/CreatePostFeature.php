<?php

namespace App\Features;

use Lucid\Units\Feature;

class CreatePostFeature extends Feature
{
    public function handle()
    {
        return view('posts.create');
    }
}
