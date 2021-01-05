<?php

namespace App\Providers;

use App\Events\SendMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Listeners\SendEmailNotification;
use App\Listeners\CreateContentListener;
use App\Listeners\CreateCustomFieldListener;
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
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        SendMail::class => [
            SendEmailNotification::class
        ],
        CreateContentEvent::class => [
            CreateContentListener::class,
            CreateCustomFieldListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
