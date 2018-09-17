<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models;

/**
 * Interface for subsystem settings
 * @package professionalweb\IntegrationHub\IntegrationHubDB\Interfaces\Models
 */
interface SubsystemOptions
{
    /**
     * Get available fields for mapping
     *
     * @return array
     */
    public function getAvailableFields(): array;

    /**
     * Get service settings
     *
     * @return array
     */
    public function getOptions(): array;
}