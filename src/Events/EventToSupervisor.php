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
}