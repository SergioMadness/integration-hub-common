<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Events;

use professionalweb\IntegrationHub\IntegrationHubDB\Models\Request;

/**
 * New request / event
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Events
 */
class NewRequest
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