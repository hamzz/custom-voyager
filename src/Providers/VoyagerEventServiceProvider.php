<?php

namespace JMI\Voyager\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class VoyagerEventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'JMI\Voyager\Events\BreadAdded' => [
            'JMI\Voyager\Listeners\AddBreadMenuItem',
            'JMI\Voyager\Listeners\AddBreadPermission',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
