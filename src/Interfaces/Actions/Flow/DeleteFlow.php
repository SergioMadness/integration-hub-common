<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Actions\Flow;

use professionalweb\lms\Common\Interfaces\Action;

/**
 * Interface for action to delete flow by id
 */
interface DeleteFlow extends Action
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