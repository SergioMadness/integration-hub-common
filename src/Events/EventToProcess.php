<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Events;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\ProcessOptions;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events\EventToProcess as IEventToProcess;

class EventToProcess implements IEventToProcess
{
    public function __construct(
        public EventData      $eventData,
        public ProcessOptions $processOptions
    )
    {

    }

    /**
     * Get process options
     */
    public function getProcessOptions(): ProcessOptions
    {
        return $this->processOptions;
    }

    /**
     * Get event data
     */
    public function getEventData(): EventData
    {
        return $this->eventData;
    }
}