<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Services;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\FieldMapper as IFieldMapper;

/**
 * Params/fields mapper
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Services
 */
class FieldMapper implements IFieldMapper
{

    /**
     * Map
     *
     * @param array $map
     * @param array $data
     *
     * @return array
     */
    public function map(array $map, array $data): array
    {
        foreach ($map as $from => $to) {
            $data[$to] = $data[$from] ?? null;
            unset($data[$from]);
        }

        return $data;
    }
}