<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Events;

use professionalweb\IntegrationHub\IntegrationHubDB\Models\Request;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Events\NewRequest as INewRequest;

/**
 * New request / event
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Events
 */
class NewRequest implements INewRequest
{
    /**
     * @var Request
     */
    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}