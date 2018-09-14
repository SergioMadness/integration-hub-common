<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services;

use professionalweb\IntegrationHub\IntegrationHubDB\Models\Request;

/**
 * Interface for request processor
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services
 */
interface RequestProcessor
{
    /**
     * Process event
     *
     * @param Request $event
     *
     * @return RequestProcessor
     */
    public function event(Request $event): self;
}