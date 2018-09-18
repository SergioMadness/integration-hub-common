<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Jobs;

use Illuminate\Support\Arr;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\ProcessOptions;
use professionalweb\IntegrationHub\IntegrationHubCommon\Events\EventToProcess as ETPEvent;

/**
 * Job with event data for processing through queues
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Jobs
 */
class EventToProcess implements ShouldQueue
{
    use InteractsWithQueue, Queueable;

    /**
     * @var EventData
     */
    public $eventData;

    /**
     * @var ProcessOptions
     */
    public $processOptions;

    public function __construct(EventData $eventData, ProcessOptions $processOptions)
    {
        $this->eventData = $eventData;
        $this->processOptions = $processOptions;
    }

    public function handle(): void
    {
        $result = event(new ETPEvent($this->eventData, $this->processOptions));

        dispatch(
            (new EventToSupervisor(Arr::last($result), $this->processOptions->getSubsystemId()))
                ->onConnection(config('integration-hub.supervisor-connection', 'default'))
                ->onQueue(config('integration-hub.supervisor-queue', 'default'))
        );
    }
}