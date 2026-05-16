<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Traits;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\ProcessOptionsRepository;

/**
 * Trait for classes that use process options repository
 */
trait UseProcessOptionsRepository
{
    private ProcessOptionsRepository $processOptionsRepository;

    public function getProcessOptionsRepository(): ProcessOptionsRepository
    {
        return $this->processOptionsRepository;
    }

    public function setProcessOptionsRepository(ProcessOptionsRepository $processOptionsRepository): self
    {
        $this->processOptionsRepository = $processOptionsRepository;

        return $this;
    }
}