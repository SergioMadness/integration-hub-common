<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Providers;

use Illuminate\Support\ServiceProvider;
use professionalweb\IntegrationHub\IntegrationHubCommon\Services\Filter;
use professionalweb\IntegrationHub\IntegrationHubCommon\Services\FieldMapper;
use professionalweb\IntegrationHub\IntegrationHubCommon\Repositories\FlowRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Repositories\RequestRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Repositories\ProcessOptionsRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\Filter as IFilter;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\FieldMapper as IFieldMapper;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\FlowRepository as IFlowRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\RequestRepository as IRequestRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\ProcessOptionsRepository as IProcessOptionsRepository;

class IntegrationHubCommonProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register(): void
    {
        $this->app->register(ValidationProvider::class);
        $this->app->register(EventServiceProvider::class);

        $this->app->singleton(IFilter::class, Filter::class);
        $this->app->singleton(IFieldMapper::class, FieldMapper::class);

        $this->app->singleton(IRequestRepository::class, RequestRepository::class);
        $this->app->singleton(IFlowRepository::class, function () {
            return new FlowRepository();
        });
        $this->app->singleton(IProcessOptionsRepository::class, function () {
            return new ProcessOptionsRepository();
        });
    }
}