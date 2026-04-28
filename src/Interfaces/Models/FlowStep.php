<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models;

/**
 * Interface for step in flow
 */
interface FlowStep
{

    /**
     * Step id
     */
    public function getId(): string;

    /**
     * Set next step id
     */
    public function setNextId(array $id): self;

    /**
     * Next step id
     */
    public function getNextId(): string;

    /**
     * Set previous step id
     */
    public function setPrevId(array $id): self;

    /**
     * Get previous step id
     */
    public function getPrevId(): string;

    /**
     * Get subsystem id
     */
    public function getSubsystemId(): string;

    /**
     * Get conditions
     */
    public function getConditions(): array;
}
