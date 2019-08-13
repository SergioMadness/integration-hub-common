<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services;

/**
 * Interface for service to filter data
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services
 */
interface Filter
{
    public const CONDITION_EQUAL = '=';

    public const CONDITION_MORE = '>';

    public const CONDITION_LESS = '<';

    public const CONDITION_NOT = '!';

    public const CONDITION_BETWEEN = 'between';

    public const CONDITION_IN = 'in';

    public const CONDITION_EMPTY = 'empty';

    /**
     * Filter data
     *
     * @param array $filter
     * @param array $data
     *
     * @return array
     */
    public function filter(array $filter, array $data): array;
}