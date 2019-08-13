<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Events;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\ProcessResponse;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events\EventToSupervisor as IEventToSupervisor;

class EventToSupervisor implements IEventToSupervisor
{
    /**
     * @var ProcessResponse
     */
    protected $processResponse;

    public function __construct(ProcessResponse $response)
    {
        $this->setProcessResponse($response);
    }

    /**
     * @return ProcessResponse
     */
    public function getProcessResponse(): ProcessResponse
    {
        return $this->processResponse;
    }

    /**
     * @param ProcessResponse $processResponse
     *
     * @return EventToSupervisor
     */
    public function setProcessResponse(ProcessResponse $processResponse): self
    {
        $this->processResponse = $processResponse;

        return $this;
    }
}