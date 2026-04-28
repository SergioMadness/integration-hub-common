<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Events;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\ProcessResponse;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events\EventToSupervisor as IEventToSupervisor;

class EventToSupervisor implements IEventToSupervisor
{
    private ProcessResponse $processResponse;

    public function __construct(ProcessResponse $response)
    {
        $this->setProcessResponse($response);
    }

    public function getProcessResponse(): ProcessResponse
    {
        return $this->processResponse;
    }

    /**
     * @return EventToSupervisor
     */
    public function setProcessResponse(ProcessResponse $processResponse): self
    {
        $this->processResponse = $processResponse;

        return $this;
    }
}