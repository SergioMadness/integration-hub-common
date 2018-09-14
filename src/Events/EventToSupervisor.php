<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Events;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events\EventToSupervisor as IEventToSupervisor;

class EventToSupervisor implements IEventToSupervisor
{
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
}