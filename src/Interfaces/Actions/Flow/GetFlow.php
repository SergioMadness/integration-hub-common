<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Actions\Flow;

use professionalweb\lms\Common\Interfaces\Action;

/**
 * Interface for action to get flow by id
 */
interface GetFlow extends Action
{
    /**
     * Set flow id
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId(string $id): self;
}