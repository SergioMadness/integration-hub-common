<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Exceptions;

class ProcessException extends \Exception
{
    /**
     * @var array
     */
    private $messages = [];

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
     *
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
}