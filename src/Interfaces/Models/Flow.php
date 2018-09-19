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
     * @return null|string
     */
    public function head(): ?string;

    /**
     * Get last node
     *
     * @return null|string
     */
    public function tail(): ?string;

    /**
     * Get next step
     *
     * @param string $id
     *
     * @return string
     */
    public function getNext(string $id): ?string;

    /**
     * Get previous step
     *
     * @param string $id
     *
     * @return string
     */
    public function getPrev(string $id): ?string;

    /**
     * Add node
     *
     * @param string      $id
     * @param null|string $next
     * @param null|string $prev
     *
     * @return Flow
     */
    public function addNode(string $id, ?string $next, ?string $prev): self;

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