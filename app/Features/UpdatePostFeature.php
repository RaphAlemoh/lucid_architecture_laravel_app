<?php

namespace App\Features;

use Lucid\Units\Feature;
use App\Data\Models\Post;
use App\Domains\Post\Jobs\UpdatePostJob;
use App\Domains\Post\Requests\StorePost;
use App\Domains\Http\Jobs\RedirectBackJob;

class UpdatePostFeature extends Feature
{
    public function __construct(
        public Post $post,
    ) {
    }

    public function handle(StorePost $request)
    {

        $this->run(UpdatePostJob::class, [
            'post' => $this->post,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return $this->run(RedirectBackJob::class, [
            'withMessage' => 'Post updated successfully.',
        ]);
    }

}
