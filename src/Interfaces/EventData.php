<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces;

use professionalweb\lms\Common\Interfaces\Models\Model;

/**
 * Interface for object has data
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces
 */
interface EventData extends Model
{
    public const STATUS_NEW = 'new';

    public const STATUS_QUEUE = 'queue';

    public const STATUS_SUCCESS = 'success';

    public const STATUS_FAILED = 'failed';

    public const STATUS_RETRY = 'need_another_attempt';

    /**
     * Get data
     *
     * @return mixed
     */
    public function getData();

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus(): string;

    /**
     * Set data
     *
     * @param $data
     *
     * @return mixed
     */
    public function setData($data);

    /**
     * Get value by key
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * Get current flow id
     *
     * @return string|null
     */
    public function getCurrentFlow(): ?string;

    /**
     * Get current step id
     *
     * @return string|null
     */
    public function getCurrentStep(): ?string;

    /**
     * Set status
     *
     * @param string $status
     *
     * @return EventData
     */
    public function setStatus(string $status): self;

    /**
     * Set current step
     *
     * @param string $flowId
     * @param string $stepId
     *
     * @return EventData
     */
    public function setCurrentStep(string $flowId, string $stepId): self;

    /**
     * Set next step id
     *
     * @param string $flowId
     * @param string $stepId
     *
     * @return $this
     */
    public function setNextStep(string $flowId, string $stepId): self;

    /**
     * Get next step
     *
     * @return string
     */
    public function getNextStep(): string;

    /**
     * Move to next step
     *
     * @return $this
     */
    public function move(): self;

    /**
     * Set process response
     *
     * @param string $processId
     * @param        $response
     * @param bool   $succeed
     *
     * @return EventData
     */
    public function setProcessResponse(string $processId, $response, bool $succeed = true): self;

    /**
     * Stop request processing
     *
     * @return self
     */
    public function stopPropagation(): self;

    /**
     * Get attempts quantity
     *
     * @return int
     */
    public function getAttemptQty(): int;

    /**
     * Set attempts to 0
     *
     * @return $this
     */
    public function dropAttempts(): self;
}