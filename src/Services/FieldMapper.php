<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Services;

use Illuminate\Support\Arr;
use professionalweb\lms\Common\Interfaces\Services\EventSubsystem\FieldMapper as IFieldMapper;

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
                    if (empty($toItem)) {
                        if (is_array($value)) {
                            $result = array_merge($result, $value);
                        } else {
                            $result = $value;
                        }
                    } else {
                        $this->setTo($result, $toItem, $value);
//                        Arr::set($result, $toItem, $value);
                    }
                }
            }
        }

        return $result;
    }

    /**
     * Prepare target field
     *
     * @param array $data
     * @param       $to
     * @param       $value
     */
    protected function setTo(array &$data, $to, $value): void
    {
        if (strpos($to, '=>') !== false) {
            $parts = explode('=>', $to);
            $to = $parts[1];
            $value = eval('return ' . $parts[0] . ';');
        }

        Arr::set($data, $to, $value);
    }
}