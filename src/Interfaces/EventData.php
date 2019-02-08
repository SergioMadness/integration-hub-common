<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\Model;

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
     * Get event id
     *
     * @return mixed
     */
    public function getId();

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
     * @return mixed
     */
    public function getCurrentFlow();

    /**
     * Get current step id
     *
     * @return mixed
     */
    public function getCurrentStep();

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
     * @param $flowId
     * @param $stepId
     *
     * @return EventData
     */
    public function setCurrentStep(string $flowId, string $stepId): self;

    /**
     * Set process response
     *
     * @param      $processId
     * @param      $response
     * @param bool $succeed
     *
     * @return EventData
     */
    public function setProcessResponse(string $processId, $response, bool $succeed = true): self;
}