<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces;

use professionalweb\lms\Common\Interfaces\Models\Model;

/**
 * Interface for object has data
 */
interface EventData extends Model
{
    public const string STATUS_NEW = 'new';

    public const string STATUS_QUEUE = 'queue';

    public const string STATUS_SUCCESS = 'success';

    public const string STATUS_FAILED = 'failed';

    public const string STATUS_RETRY = 'need_another_attempt';

    /**
     * Get data
     */
    public function getData();

    /**
     * Get status
     */
    public function getStatus(): string;

    /**
     * Set data
     */
    public function setData($data);

    /**
     * Get value by key
     */
    public function get(string $key, $default = null);

    /**
     * Get current flow id
     */
    public function getCurrentFlow(): ?string;

    /**
     * Get current step id
     */
    public function getCurrentStep(): ?string;

    /**
     * Set status
     */
    public function setStatus(string $status): self;

    /**
     * Set current step
     */
    public function setCurrentStep(string $flowId, string $stepId): self;

    /**
     * Set next step id
     */
    public function setNextStep(string $flowId, string $stepId): self;

    /**
     * Get next step
     */
    public function getNextStep(): string;

    /**
     * Move to next step
     */
    public function move(): self;

    /**
     * Set process response
     */
    public function setProcessResponse(string $processId, $response, bool $succeed = true): self;

    /**
     * Stop request processing
     */
    public function stopPropagation(): self;

    /**
     * Get attempts quantity
     */
    public function getAttemptQty(): int;

    /**
     * Set attempts to 0
     */
    public function dropAttempts(): self;
}