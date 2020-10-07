<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Exceptions\ExceptionProcessor;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param \Exception $e
     *
     * @return void
     * @throws Exception
     */
    public function report(\Exception $e)
    {
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception               $e
     *
     * @return Response
     * @throws \InvalidArgumentException
     * @throws \Exception
     */
    public function render($request, \Exception $e): Response
    {
        \Log::error($e);
        /** @var ExceptionProcessor $exceptionProcessor */
        $exceptionProcessor = app(ExceptionProcessor::class);

        return $exceptionProcessor->process($request, $e) ?? parent::render($request, $e);
    }
}