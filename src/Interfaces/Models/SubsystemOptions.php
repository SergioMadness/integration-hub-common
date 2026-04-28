<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models;

/**
 * Interface for subsystem settings
 */
interface SubsystemOptions
{
    /**
     * Get available fields for mapping
     */
    public function getAvailableFields(): array;

    /**
     * Get array fields, that subsystem generates
     */
    public function getAvailableOutFields(): array;

    /**
     * Get service settings
     */
    public function getOptions(): array;
}