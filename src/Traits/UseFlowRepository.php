<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Traits;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\FlowRepository;

/**
 * Trait for classes that use flow repository
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Traits
 */
trait UseFlowRepository
{
    /**
     * @var FlowRepository
     */
    private $flowRepository;

    /**
     * @return FlowRepository
     */
    public function getFlowRepository(): FlowRepository
    {
        return $this->flowRepository;
    }

    /**
     * @param FlowRepository $flowRepository
     *
     * @return $this
     */
    public function setFlowRepository(FlowRepository $flowRepository): self
    {
        $this->flowRepository = $flowRepository;

        return $this;
    }
}