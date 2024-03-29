<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Models;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\FlowStep as IFlowStep;

/**
 * Flow step
 * @package professionalweb\IntegrationHub\IntegrationHubDB\Models
 */
class FlowStep implements IFlowStep
{
    /** @var string */
    private string $id = '';
    /** @var array */
    private array $nextId = [];
    /** @var array */
    private array $prevId = [];
    /** @var string */
    private string $subsystemId = '';
    /** @var array */
    private array $conditions = [];

    /**
     * Step id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Next step id
     *
     * @return string
     */
    public function getNextId(): string
    {
        return $this->nextId[0] ?? '';
    }

    /**
     * Get previous step id
     *
     * @return string
     */
    public function getPrevId(): string
    {
        return $this->prevId[0] ?? '';
    }

    /**
     * Get subsystem id
     *
     * @return string
     */
    public function getSubsystemId(): string
    {
        return $this->subsystemId;
    }

    /**
     * Get conditions
     *
     * @return array
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }

    /**
     * Set step id
     *
     * @param string $id
     *
     * @return FlowStep
     */
    public function setId(string $id): FlowStep
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set next step id
     *
     * @param array $nextId
     *
     * @return FlowStep
     */
    public function setNextId(array $nextId): IFlowStep
    {
        $this->nextId = $nextId;

        return $this;
    }

    /**
     * Set prev step id
     *
     * @param array $prevId
     *
     * @return FlowStep
     */
    public function setPrevId(array $prevId): IFlowStep
    {
        $this->prevId = $prevId;

        return $this;
    }

    /**
     * Set subsystem id
     *
     * @param string $subsystemId
     *
     * @return FlowStep
     */
    public function setSubsystemId(string $subsystemId): FlowStep
    {
        $this->subsystemId = $subsystemId;

        return $this;
    }

    /**
     * Set conditions
     *
     * @param array $conditions
     *
     * @return FlowStep
     */
    public function setConditions(array $conditions): FlowStep
    {
        $this->conditions = $conditions;

        return $this;
    }
}
