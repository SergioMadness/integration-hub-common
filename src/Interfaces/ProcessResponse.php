<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces;

/**
 * Interface for process response
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces
 */
interface ProcessResponse
{
    /**
     * Get event data object
     */
    public function getEventData(): EventData;

    /**
     * Get process id
     */
    public function getProcessId(): string;

    /**
     * Process succeeded
     */
    public function isSucceed(): bool;

    /**
     * Get process response
     */
    public function getProcessResponse();
}