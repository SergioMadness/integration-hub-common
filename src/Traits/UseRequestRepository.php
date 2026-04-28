<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Traits;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\RequestRepository;

/**
 * Trait for classes that use request repository
 */
trait UseRequestRepository
{
    private RequestRepository $repository;

    /**
     * Set request repository
     */
    public function setRequestRepository(RequestRepository $repository): self
    {
        $this->repository = $repository;

        return $this;
    }

    /**
     * Get request repository
     */
    public function getRequestRepository(): RequestRepository
    {
        return $this->repository;
    }
}