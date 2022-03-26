<?php

namespace App\Domains\Post\Jobs;

use Lucid\Units\Job;
use App\Data\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SavePostJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public $title, public $description)
    {}

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $attributes = [
            'title' => $this->title,
            'description' => $this->description,
            'created_at' => Carbon::now(),
            'deleted_at' => Carbon::now(),
        ];

        $post = new Post($attributes);
        $user = Auth::user();

        return $user->posts()->save($post);
    }
}
