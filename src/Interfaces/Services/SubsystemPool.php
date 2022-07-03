<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\SubsystemOptions;

/**
 * Interface for modules pool
 */
interface SubsystemPool
{
    /**
     * Register module
     *
     * @param string         $name
     * @param string         $subsystemId
     * @param SubsystemOptions $options
     *
     * @return static
     */
    public function register(string $name, string $subsystemId, SubsystemOptions $options): self;

    /**
     * Get all subsystems
     *
     * @return array
     */
    public function getAll(): array;

    /**
     * Get process options by subsystem id
     *
     * @param string $id
     *
     * @return SubsystemOptions|null
     */
    public function getBySubsystemId(string $id): ?SubsystemOptions;
}