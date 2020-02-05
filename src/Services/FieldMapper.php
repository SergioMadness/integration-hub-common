<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Services;

use Illuminate\Support\Arr;
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
        $result = [];
        foreach ($map as $from => $to) {
            if (($value = Arr::get($data, $from)) !== null) {
                $to = (array)$to;
                foreach ($to as $toItem) {
                    Arr::set($result, $toItem, $value);
                }
            }
        }

        return $result;
    }
}