<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Models\ProcessOptions;

use professionalweb\IntegrationHub\IntegrationHubCommon\Models\ProcessOptions;

class TransitProcessOptions extends ProcessOptions
{
    public function __construct($systemId)
    {
        parent::__construct([
            'subsystem_id' => $systemId,
            'mapping'      => [],
            'options'      => [],
        ]);
        $this->setAttribute('id', $systemId);
    }
}