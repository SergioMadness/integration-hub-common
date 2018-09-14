<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces;

/**
 * Interface for object has data
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces
 */
interface EventData
{
    /**
     * Get event id
     *
     * @return mixed
     */
    public function getId();

    /**
     * Get data
     *
     * @return mixed
     */
    public function getData();

    /**
     * Set data
     *
     * @param $data
     *
     * @return mixed
     */
    public function setData($data);
}