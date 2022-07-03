<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Services;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\SubsystemOptions;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\SubsystemPool as ISubsystemPool;

/**
 * Subsystem pool
 */
class SubsystemPool implements ISubsystemPool
{

    /** @var array */
    private array $subsystems = [];

    /**
     * Register module
     *
     * @param string         $name
     * @param string         $subsystemId
     * @param SubsystemOptions $options
     *
     * @return static
     */
    public function register(string $name, string $subsystemId, SubsystemOptions $options): ISubsystemPool
    {
        $this->subsystems[$subsystemId] = [
            'name'        => $name,
            'subsystemId' => $subsystemId,
            'options'     => $options,
        ];

        return $this;
    }

    /**
     * Get all subsystems
     *
     * @return array
     */
    public function getAll(): array
    {
        return array_values($this->subsystems);
    }

    /**
     * Get process options by subsystem id
     *
     * @param string $id
     *
     * @return SubsystemOptions|null
     */
    public function getBySubsystemId(string $id): ?SubsystemOptions
    {
        return $this->subsystems[$id] ?? null;
    }
}