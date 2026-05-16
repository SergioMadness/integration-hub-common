<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\ProcessOptions;

/**
 * Interface for event "event-to-process"
 */
interface EventToProcess
{
    /**
     * Get process options
     */
    public function getProcessOptions(): ProcessOptions;

    /**
     * Get event data
     */
    public function getEventData(): EventData;
}