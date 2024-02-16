<?php

namespace App\Listeners;

use App\Events\UpdateUserPostsCount;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncrementUserPostsCountListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UpdateUserPostsCount $event): void
    {
        $user = $event->post->user;
        $user->increment('posts_count');
    }
}
