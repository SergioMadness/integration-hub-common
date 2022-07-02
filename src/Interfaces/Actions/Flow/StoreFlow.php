<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Actions\Flow;

use professionalweb\lms\Common\Interfaces\Action;

/**
 * Interface for action to create/update flow
 */
interface StoreFlow extends Action
{
    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId(string $id): self;
}