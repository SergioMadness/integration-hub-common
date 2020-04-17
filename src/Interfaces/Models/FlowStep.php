<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models;

/**
 * Interface for step in flow
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models
 */
interface FlowStep
{

    /**
     * Step id
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Set next step id
     *
     * @param array $id
     *
     * @return $this
     */
    public function setNextId(array $id): self;

    /**
     * Next step id
     *
     * @return string
     */
    public function getNextId(): string;

    /**
     * Set previous step id
     *
     * @param array $id
     *
     * @return $this
     */
    public function setPrevId(array $id): self;

    /**
     * Get previous step id
     *
     * @return string
     */
    public function getPrevId(): string;

    /**
     * Get subsystem id
     *
     * @return string
     */
    public function getSubsystemId(): string;

    /**
     * Get conditions
     *
     * @return array
     */
    public function getConditions(): array;
}
