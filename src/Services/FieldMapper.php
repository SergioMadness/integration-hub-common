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
        $keysForMapping = array_keys($map);
        foreach ($data as $key => $value) {
            if (\in_array($key, $keysForMapping)) {
                $data[$map[$key]] = $value;
                unset($data[$key]);
            }
        }

        return $data;
    }
}