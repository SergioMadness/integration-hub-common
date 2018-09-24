<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Listeners;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events\EventToProcess;

class TransitListener
{
    /**
     * @param EventToProcess $eventToProcess
     *
     * @return EventData
     */
    public function handle(EventToProcess $eventToProcess): EventData
    {
        return $eventToProcess->getEventData();
    }
}