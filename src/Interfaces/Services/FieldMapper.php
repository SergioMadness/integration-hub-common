<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services;

/**
 * Interface for service to map params
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services
 */
interface FieldMapper
{
    /**
     * Map
     *
     * @param array $map
     * @param array $data
     *
     * @return array
     */
    public function map(array $map, array $data): array;
}