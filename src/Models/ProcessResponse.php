<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Models;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\ProcessResponse as IProcessResponse;

class ProcessResponse implements IProcessResponse
{
    private EventData $eventData;

    private string $processId;

    private bool $isSucceeded;

    private mixed $processResponse;

    public function __construct(EventData $eventData, string $processId, bool $succeed = true, $processResponse = null)
    {
        $this->setEventData($eventData)
            ->setProcessId($processId)
            ->setIsSucceeded($succeed)
            ->setProcessResponse($processResponse);
    }

    /**
     * @return $this
     */
    public function setIsSucceeded(bool $isSucceeded): self
    {
        $this->isSucceeded = $isSucceeded;

        return $this;
    }

    /**
     * Get event data object
     */
    public function getEventData(): EventData
    {
        return $this->eventData;
    }

    public function setEventData(EventData $eventData): self
    {
        $this->eventData = $eventData;

        return $this;
    }

    /**
     * Get process id
     */
    public function getProcessId(): string
    {
        return $this->processId;
    }

    public function setProcessId($processId): self
    {
        $this->processId = $processId;

        return $this;
    }

    /**
     * Process succeeded
     */
    public function isSucceed(): bool
    {
        return $this->isSucceeded;
    }

    /**
     * Get process response
     */
    public function getProcessResponse()
    {
        return $this->processResponse;
    }

    public function setProcessResponse($processResponse): self
    {
        $this->processResponse = $processResponse;

        return $this;
    }
}