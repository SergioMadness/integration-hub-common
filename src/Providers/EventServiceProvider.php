<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Providers;

use professionalweb\IntegrationHub\IntegrationHubCommon\Listeners\TransitListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events\EventToProcess;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        EventToProcess::class => [
            TransitListener::class,
        ],
    ];
}
