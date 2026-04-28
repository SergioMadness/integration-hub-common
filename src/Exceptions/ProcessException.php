<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Exceptions;

use Exception;

class ProcessException extends Exception
{
    private array $messages;

    public function __construct(string $message = '', int $code = 0, array $messages = [])
    {
        if (empty($message)) {
            $message = json_encode($messages);
        }
        parent::__construct($message, $code, null);

        $this->messages = $messages;
    }

    /**
     * Get exception messages
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
}