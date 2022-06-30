<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Events;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\ProcessOptions;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events\EventToProcess as IEventToProcess;

class EventToProcess implements IEventToProcess
{
    /**
     * @var EventData
     */
    public EventData $eventData;

    /**
     * @var ProcessOptions
     */
    public ProcessOptions $processOptions;

    public function __construct(EventData $eventData, ProcessOptions $processOptions)
    {
        $this->eventData = $eventData;
        $this->processOptions = $processOptions;
    }

    /**
     * Get process options
     *
     * @return ProcessOptions
     */
    public function getProcessOptions(): ProcessOptions
    {
        return $this->processOptions;
    }

    /**
     * Get event data
     *
     * @return EventData
     */
    public function getEventData(): EventData
    {
        return $this->eventData;
    }
}