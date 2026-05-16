<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models;

/**
 * Interface for process flow model
 */
interface Flow
{
    /**
     * Get node by id
     */
    public function getNode(string $id): ?FlowStep;

    /**
     * Get first node
     */
    public function head(): ?FlowStep;

    /**
     * Get last node
     */
    public function tail(): ?FlowStep;

    /**
     * Get next step
     */
    public function getNext(string $id): ?FlowStep;

    /**
     * Get previous step
     */
    public function getPrev(string $id): ?FlowStep;

    /**
     * Add node
     */
    public function addNode(FlowStep $step): self;

    /**
     * Remove node
     */
    public function removeNode(string $id): self;

    /**
     * Check step has conditions
     */
    public function isConditional(string $id): bool;

    /**
     * Get conditions to move to next step
     */
    public function getCondition(string $id): array;
}