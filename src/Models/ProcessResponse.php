<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Models;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\ProcessResponse as IProcessResponse;

class ProcessResponse implements IProcessResponse
{
    /**
     * @var EventData
     */
    private $eventData;

    /**
     * @var mixed
     */
    private $processId;

    /**
     * @var bool
     */
    private $isSucceeded;

    /**
     * @var mixed
     */
    private $processResponse;

    public function __construct(EventData $eventData, string $processId, bool $succeed = true, $processResponse = null)
    {
        $this->setEventData($eventData)
            ->setProcessId($processId)
            ->setIsSucceeded($succeed)
            ->setProcessResponse($processResponse);
    }

    /**
     * @param EventData $eventData
     *
     * @return $this
     */
    public function setEventData(EventData $eventData): self
    {
        $this->eventData = $eventData;

        return $this;
    }

    /**
     * @param mixed $processId
     *
     * @return $this
     */
    public function setProcessId($processId): self
    {
        $this->processId = $processId;

        return $this;
    }

    /**
     * @param bool $isSucceeded
     *
     * @return $this
     */
    public function setIsSucceeded(bool $isSucceeded): self
    {
        $this->isSucceeded = $isSucceeded;

        return $this;
    }

    /**
     * @param mixed $processResponse
     *
     * @return $this
     */
    public function setProcessResponse($processResponse): self
    {
        $this->processResponse = $processResponse;

        return $this;
    }

    /**
     * Get event data object
     *
     * @return EventData
     */
    public function getEventData(): EventData
    {
        return $this->eventData;
    }

    /**
     * Get process id
     *
     * @return mixed
     */
    public function getProcessId()
    {
        return $this->processId;
    }

    /**
     * Process succeeded
     *
     * @return bool
     */
    public function isSucceed(): bool
    {
        return $this->isSucceeded;
    }

    /**
     * Get process response
     *
     * @return mixed
     */
    public function getProcessResponse()
    {
        return $this->processResponse;
    }
}