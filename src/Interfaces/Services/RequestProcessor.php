<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;

/**
 * Interface for request processor
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services
 */
interface RequestProcessor
{
    /**
     * Process event
     *
     * @param EventData $event
     *
     * @return RequestProcessor
     */
    public function event(EventData $event): self;
}