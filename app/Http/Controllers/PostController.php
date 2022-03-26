<?php

namespace App\Http\Controllers;

use App\Data\Models\Post;
use Lucid\Units\Controller;
use App\Features\AllPostsFeature;
use App\Features\EditPostFeature;
use App\Features\ShowPostFeature;
use App\Features\StorePostFeature;
use App\Features\CreatePostFeature;
use App\Features\DeletePostFeature;
use App\Features\PostsIndexFeature;
use App\Features\UpdatePostFeature;

class PostController extends Controller
{

    public function all_posts(){
        return $this->serve(AllPostsFeature::class);
    }

    public function index(){
        return $this->serve(PostsIndexFeature::class);
    }

    public function create()
    {
        return $this->serve(CreatePostFeature::class);
    }

    public function store()
    {
        return $this->serve(StorePostFeature::class);
    }

    public function show(Post $post)
    {
        return $this->serve(ShowPostFeature::class, [
            'post' => $post,
        ]);
    }


    public function edit(Post $post)
    {
        return $this->serve(EditPostFeature::class, [
            'post' => $post,
        ]);
    }

    public function update(Post $post)
    {
        return $this->serve(UpdatePostFeature::class, [
            'post' => $post,
        ]);
    }


    public function destroy(Post $post)
    {
        return $this->serve(DeletePostFeature::class, [
            'post' => $post,
        ]);
    }



}
