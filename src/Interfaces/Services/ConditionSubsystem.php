<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services;

/**
 * Interface for subsystem to resolve path
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services
 */
interface ConditionSubsystem
{
    /**
     * Resolve path by conditions
     *
     * @param array $conditions
     *
     * @return int
     */
    public function getPath(array $conditions): int;
}