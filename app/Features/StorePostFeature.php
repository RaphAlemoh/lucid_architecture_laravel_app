<?php

namespace App\Features;

use Lucid\Units\Feature;
use App\Domains\Post\Jobs\SavePostJob;
use App\Domains\Post\Requests\StorePost;
use App\Domains\Http\Jobs\RedirectBackJob;

class StorePostFeature extends Feature
{
    public function handle(StorePost $request)
    {
        $this->run(SavePostJob::class, [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return $this->run(RedirectBackJob::class, [
            'withMessage' => 'Post created successfully.',
        ]);

    }
}
