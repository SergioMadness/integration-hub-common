<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services;

/**
 * Interface for subsystem to resolve path
 */
interface ConditionSubsystem
{
    /**
     * Resolve path by conditions
     */
    public function getPath(array $conditions): int;
}