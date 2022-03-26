<?php

namespace App\Domains\Post\Jobs;

use Carbon\Carbon;
use Lucid\Units\Job;
use App\Data\Models\Post;

class UpdatePostJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(public Post $post, public $title, public $description)
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
        return $this->post->update($attributes);
    }
}
