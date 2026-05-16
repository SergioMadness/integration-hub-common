<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Services;

use Illuminate\Support\Arr;
use professionalweb\lms\Common\Interfaces\Services\EventSubsystem\FieldMapper as IFieldMapper;

/**
 * Params/fields mapper
 */
class FieldMapper implements IFieldMapper
{

    /**
     * Map
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
     */
    protected function setTo(array &$data, $to, $value): void
    {
        if (str_contains($to, '=>')) {
            $parts = explode('=>', $to);
            $to = $parts[1];
            $value = eval('return ' . $parts[0] . ';');
        }

        Arr::set($data, $to, $value);
    }
}