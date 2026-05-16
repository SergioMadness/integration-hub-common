<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\SubsystemOptions;

/**
 * Interface for modules pool
 */
interface SubsystemPool
{
    /**
     * Register module
     */
    public function register(string $name, string $subsystemId, SubsystemOptions $options): self;

    /**
     * Get all subsystems
     */
    public function getAll(): array;

    /**
     * Get process options by subsystem id
     */
    public function getBySubsystemId(string $id): ?SubsystemOptions;
}