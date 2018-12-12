<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models;

/**
 * Basic interface for system model
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models
 */
interface Model
{
    /**
     * Fill model
     *
     * @param array $attributes
     *
     * @return $this
     */
    public function fill(array $attributes);
}