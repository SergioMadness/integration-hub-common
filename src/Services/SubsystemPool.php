<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Services;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\SubsystemOptions;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\SubsystemPool as ISubsystemPool;

/**
 * Subsystem pool
 */
class SubsystemPool implements ISubsystemPool
{
    private array $subsystems = [];

    /**
     * Register module
     */
    public function register(string $name, string $subsystemId, SubsystemOptions $options): ISubsystemPool
    {
        $this->subsystems[$subsystemId] = [
            'name' => $name,
            'subsystemId' => $subsystemId,
            'options' => $options,
        ];

        return $this;
    }

    /**
     * Get all subsystems
     */
    public function getAll(): array
    {
        return array_values($this->subsystems);
    }

    /**
     * Get process options by subsystem id
     */
    public function getBySubsystemId(string $id): ?SubsystemOptions
    {
        return $this->subsystems[$id] ?? null;
    }
}