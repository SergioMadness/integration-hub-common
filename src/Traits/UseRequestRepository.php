<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Traits;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\RequestRepository;

/**
 * Trait for classes that use request repository
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Traits
 */
trait UseRequestRepository
{
    /**
     * @var RequestRepository
     */
    private RequestRepository $repository;

    /**
     * Set request repository
     *
     * @param RequestRepository $repository
     *
     * @return self
     */
    public function setRequestRepository(RequestRepository $repository): self
    {
        $this->repository = $repository;

        return $this;
    }

    /**
     * Get request repository
     *
     * @return RequestRepository
     */
    public function getRequestRepository(): RequestRepository
    {
        return $this->repository;
    }
}