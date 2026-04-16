<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Exceptions;

interface ArrayException
{
    /**
     * @return array
     */
    public function getMessages(): array;
}