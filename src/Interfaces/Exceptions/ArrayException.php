<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Exceptions;

interface ArrayException
{
    public function getMessages(): array;
}