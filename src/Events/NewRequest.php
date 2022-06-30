<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Events;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events\NewRequest as INewRequest;

/**
 * New request / event
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Events
 */
class NewRequest implements INewRequest
{
    /**
     * @var EventData
     */
    public EventData $request;

    public function __construct(EventData $request)
    {
        $this->request = $request;
    }
}