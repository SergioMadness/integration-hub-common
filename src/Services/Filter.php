<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Services;

use Illuminate\Support\Arr;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\Filter as IFilter;

/**
 * Service to filter data by conditions
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Services
 */
class Filter implements IFilter
{

    /**
     * Filter data
     *
     * @param array $filter
     * @param array $data
     *
     * @return array
     */
    public function filter(array $filter, array $data): array
    {
        if (!empty($filter)) {
            foreach ($filter as $condition) {
                $field = $condition['field'] ?? null;
                $operation = $condition['operation'] ?? null;
                $value1 = $condition['value1'] ?? null;
                $value2 = $condition['value2'] ?? null;
                $success = $condition['success'] ?? null;
                $filterResult = $condition['result'] ?? null;

                $value = Arr::get($data, $field, '');
                if ($field !== null && $this->checkCondition($value, $operation, $value1, $value2)) {
                    return $success !== null ? $this->filter($success, $data) : $filterResult;
                }
            }
        }

        return [];
    }

    /**
     * Check condition
     *
     * @param $value
     * @param $condition
     * @param $value1
     * @param $value2
     *
     * @return bool
     */
    protected function checkCondition($value, $condition, $value1, $value2): bool
    {
        $result = false;
        $value = \is_string($value) ? mb_strtolower($value) : $value;
        $value1 = \is_string($value1) ? mb_strtolower($value1) : $value1;
        if ($value2 !== null) {
            $value2 = \is_string($value2) ? mb_strtolower($value2) : $value2;
        }
        $conditions = explode('|', $condition);
        $invert = \in_array(self::CONDITION_NOT, $conditions);
        $conditions = array_filter($conditions, function ($item) {
            return $item !== self::CONDITION_NOT;
        });
        $condition = implode('|', $conditions);
        switch ($condition) {
            case self::CONDITION_EQUAL:
                $result = ($value == $value1);
                break;
            case self::CONDITION_IN:
                $result = \in_array($value, (array)$value1);
                break;
            case self::CONDITION_LESS:
                $result = ($value < $value1);
                break;
            case self::CONDITION_MORE:
                $result = ($value > $value1);
                break;
            case self::CONDITION_MORE . '|' . self::CONDITION_EQUAL:
            case self::CONDITION_EQUAL . '|' . self::CONDITION_MORE:
                $result = ($value >= $value1);
                break;
            case self::CONDITION_LESS . '|' . self::CONDITION_EQUAL:
            case self::CONDITION_EQUAL . '|' . self::CONDITION_LESS:
                $result = ($value <= $value1);
                break;
            case self::CONDITION_BETWEEN:
                $result = (($value >= $value1) && ($value <= $value2));
                break;
            case self::CONDITION_EMPTY:
                $result = empty($value);
                break;
        }

        return $invert ? !$result : $result;
    }
}