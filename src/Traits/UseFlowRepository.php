<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Traits;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\FlowRepository;

/**
 * Trait for classes that use flow repository
 */
trait UseFlowRepository
{
    private FlowRepository $flowRepository;

    public function getFlowRepository(): FlowRepository
    {
        return $this->flowRepository;
    }

    public function setFlowRepository(FlowRepository $flowRepository): self
    {
        $this->flowRepository = $flowRepository;

        return $this;
    }
}