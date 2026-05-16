<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Listeners;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events\EventToProcess;

class TransitListener
{
    public function handle(EventToProcess $eventToProcess): EventData
    {
        return $eventToProcess->getEventData();
    }
}