<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;

/**
 * Interface for request processor
 */
interface RequestProcessor
{
    /**
     * Process event
     */
    public function event(EventData $event): self;
}