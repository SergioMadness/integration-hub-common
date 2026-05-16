<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Traits;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\Subsystem;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\ProcessOptions;

/**
 * Trait for subsystems
 * @mixin Subsystem
 */
trait HasProcessOptions
{
    private ProcessOptions $processOptions;

    public function getProcessOptions(): ProcessOptions
    {
        return $this->processOptions;
    }

    /**
     * Set options with values
     */
    public function setProcessOptions(ProcessOptions $options): Subsystem
    {
        $this->processOptions = $options;

        return $this;
    }
}