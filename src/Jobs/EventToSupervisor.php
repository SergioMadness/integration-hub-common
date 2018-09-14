<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;

/**
 * Job to return event to supervisor
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Jobs
 */
class EventToSupervisor implements ShouldQueue
{
    use InteractsWithQueue, Queueable;

    /**
     * @var EventData
     */
    public $eventData;

    /**
     * @var string
     */
    public $processId;

    public function __construct(EventData $eventData, string $processId)
    {
        $this->eventData = $eventData;
        $this->processId = $processId;
    }

    public function handle(): void
    {

    }
}