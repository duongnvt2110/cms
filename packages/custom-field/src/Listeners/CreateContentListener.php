<?php

namespace Demo\CustomField\Listeners;

use App\Events\CreateContentEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateContentListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CreateContentEvent  $event
     * @return void
     */
    public function handle(CreateContentEvent $event)
    {
        //
        dump($event);
        exit;
    }
}
