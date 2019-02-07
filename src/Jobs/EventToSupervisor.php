<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Models\ProcessResponse;
use professionalweb\IntegrationHub\IntegrationHubCommon\Events\EventToSupervisor as EventToSupervisorEvent;

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

    /**
     * @var mixed
     */
    public $processResponse;

    /**
     * @var bool
     */
    public $succeed;

    public function __construct(EventData $eventData, string $processId, bool $succeed = true, $processResponse = null)
    {
        $this->eventData = $eventData;
        $this->processId = $processId;
        $this->processResponse = $processResponse;
        $this->succeed = $succeed;
    }

    public function handle(): void
    {
        event(
            new EventToSupervisorEvent(
                new ProcessResponse($this->eventData, $this->processId, $this->succeed, $this->processResponse)
            )
        );
    }
}