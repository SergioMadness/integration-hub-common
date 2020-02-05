<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Providers;

use Illuminate\Support\ServiceProvider;
use professionalweb\IntegrationHub\IntegrationHubCommon\Services\Filter;
use professionalweb\IntegrationHub\IntegrationHubCommon\Services\FieldMapper;
use professionalweb\IntegrationHub\IntegrationHubCommon\Exceptions\ExceptionProcessor;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\Filter as IFilter;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\FieldMapper as IFieldMapper;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Exceptions\ExceptionProcessor as IExceptionProcessor;

class IntegrationHubCommonProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(ValidationProvider::class);
        $this->app->register(EventServiceProvider::class);

        $this->app->singleton(IFilter::class, Filter::class);
        $this->app->singleton(IFieldMapper::class, FieldMapper::class);
        $this->app->singleton(IExceptionProcessor::class, ExceptionProcessor::class);
    }
}