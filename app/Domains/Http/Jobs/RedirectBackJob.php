<?php

namespace App\Domains\Http\Jobs;

use Lucid\Units\Job;

class RedirectBackJob extends Job
{

    //PHP 8 constructor
    public function __construct(private $withMessage){}

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $back = back();

        if ($this->withMessage) {
            $back->with('success', $this->withMessage);
        }

        return $back;

    }
}
