<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Models\ProcessResponse;
use professionalweb\IntegrationHub\IntegrationHubCommon\Events\EventToSupervisor as EventToSupervisorEvent;

/**
 * Job to return event to supervisor
 */
readonly class EventToSupervisor implements ShouldQueue
{
    use InteractsWithQueue, Queueable;

    public function __construct(
        public EventData $eventData,
        public string $processId,
        public bool $succeed = true,
        public mixed $processResponse = null
    )
    {

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