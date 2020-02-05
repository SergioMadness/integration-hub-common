<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Exceptions;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Interface for exception processors pool
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Exceptions
 */
interface ExceptionProcessor
{
    /**
     * Register processor
     *
     * @param callable $callback
     *
     * @return ExceptionProcessor
     */
    public function register(callable $callback): self;

    /**
     * Process exception
     *
     * @param Request    $request
     * @param \Exception $ex
     *
     * @return Response
     */
    public function process(Request $request, \Exception $ex): ?Response;
}