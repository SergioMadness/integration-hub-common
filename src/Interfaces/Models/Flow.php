<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models;

/**
 * Interface for process flow model
 * @package professionalweb\IntegrationHub\IntegrationHubDB\Interfaces\Models
 */
interface Flow
{
    /**
     * Get first node
     *
     * @return null|FlowStep
     */
    public function head(): ?FlowStep;

    /**
     * Get last node
     *
     * @return null|FlowStep
     */
    public function tail(): ?FlowStep;

    /**
     * Get next step
     *
     * @param string $id
     *
     * @return FlowStep
     */
    public function getNext(string $id): ?FlowStep;

    /**
     * Get previous step
     *
     * @param string $id
     *
     * @return FlowStep
     */
    public function getPrev(string $id): ?FlowStep;

    /**
     * Add node
     *
     * @param FlowStep $step
     *
     * @return Flow
     */
    public function addNode(FlowStep $step): self;

    /**
     * Remove node
     *
     * @param string $id
     *
     * @return Flow
     */
    public function removeNode(string $id): self;

    /**
     * Check step has conditions
     *
     * @param string $id
     *
     * @return bool
     */
    public function isConditional(string $id): bool;

    /**
     * Get conditions to move to next step
     *
     * @param string $id
     *
     * @return array
     */
    public function getCondition(string $id): array;
}