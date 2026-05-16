<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Events;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events\NewRequest as INewRequest;

/**
 * New request / event
 */
class NewRequest implements INewRequest
{
    public function __construct(
        public readonly EventData $request
    )
    {

    }
}