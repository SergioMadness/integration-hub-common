<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\ProcessOptions;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\SubsystemOptions;

/**
 * Subsystem interface
 */
interface Subsystem
{
    /**
     * Set options with values
     */
    public function setProcessOptions(ProcessOptions $options): self;

    /**
     * Get available options
     */
    public function getAvailableOptions(): SubsystemOptions;

    /**
     * Process event data
     */
    public function process(EventData $eventData): EventData;
}