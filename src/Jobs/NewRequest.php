<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Events\NewRequest as NewRequestEvent;

class NewRequest implements ShouldQueue
{
    use InteractsWithQueue, Queueable;

    /**
     * @var EventData
     */
    public EventData $request;

    public function __construct(EventData $request)
    {
        $this->request = $request;
    }

    public function handle(): void
    {
        event(new NewRequestEvent($this->request));
    }
}