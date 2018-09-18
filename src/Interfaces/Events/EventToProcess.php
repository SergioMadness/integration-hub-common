<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\ProcessOptions;

/**
 * Interface for event "event-to-process"
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events
 */
interface EventToProcess
{
    /**
     * Get process options
     *
     * @return ProcessOptions
     */
    public function getProcessOptions(): ProcessOptions;

    /**
     * Get event data
     *
     * @return EventData
     */
    public function getEventData(): EventData;
}