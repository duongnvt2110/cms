<?php

namespace Demo\CustomField\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Demo\CustomField\Listeners\CreateContentListener;
use App\Events\CreateContentEvent;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        CreateContentEvent::class => [
            CreateContentListener::class,
        ]
    ];
}
