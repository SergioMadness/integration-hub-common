<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces;

/**
 * Interface for process response
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces
 */
interface ProcessResponse
{
    /**
     * Get event data object
     *
     * @return EventData
     */
    public function getEventData(): EventData;

    /**
     * Get process id
     *
     * @return string
     */
    public function getProcessId(): string;

    /**
     * Process succeeded
     *
     * @return bool
     */
    public function isSucceed(): bool;

    /**
     * Get process response
     *
     * @return mixed
     */
    public function getProcessResponse();
}