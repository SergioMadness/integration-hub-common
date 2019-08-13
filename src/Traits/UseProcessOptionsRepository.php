<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Traits;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\ProcessOptionsRepository;

/**
 * Trait for classes that use process options repository
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Traits
 */
trait UseProcessOptionsRepository
{
    /**
     * @var ProcessOptionsRepository
     */
    private $processOptionsRepository;

    /**
     * @return ProcessOptionsRepository
     */
    public function getProcessOptionsRepository(): ProcessOptionsRepository
    {
        return $this->processOptionsRepository;
    }

    /**
     * @param ProcessOptionsRepository $processOptionsRepository
     *
     * @return $this
     */
    public function setProcessOptionsRepository(ProcessOptionsRepository $processOptionsRepository): self
    {
        $this->processOptionsRepository = $processOptionsRepository;

        return $this;
    }
}