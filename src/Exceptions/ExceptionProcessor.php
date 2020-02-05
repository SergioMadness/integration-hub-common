<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Exceptions;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Exceptions\ExceptionProcessor as IExceptionProcessor;

/**
 * Exception pool
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Exceptions
 */
class ExceptionProcessor implements IExceptionProcessor
{

    private $processors = [];

    /**
     * Register processor
     *
     * @param callable $callback
     *
     * @return IExceptionProcessor
     */
    public function register(callable $callback): IExceptionProcessor
    {
        $this->processors[] = $callback;

        return $this;
    }

    /**
     * Process exception
     *
     * @param Request    $request
     * @param \Exception $ex
     *
     * @return Response
     */
    public function process(Request $request, \Exception $ex): ?Response
    {
        foreach ($this->processors as $processor) {
            $response = $processor($request, $ex);
            if (!empty($response)) {
                return $response;
            }
        }

        return null;
    }
}