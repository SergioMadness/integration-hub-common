<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Providers;

use Illuminate\Support\ServiceProvider;
use professionalweb\IntegrationHub\IntegrationHubCommon\Services\Filter;
use professionalweb\IntegrationHub\IntegrationHubCommon\Services\FieldMapper;
use professionalweb\IntegrationHub\IntegrationHubCommon\Actions\Flow\GetFlow;
use professionalweb\IntegrationHub\IntegrationHubCommon\Actions\Flow\StoreFlow;
use professionalweb\IntegrationHub\IntegrationHubCommon\Services\SubsystemPool;
use professionalweb\IntegrationHub\IntegrationHubCommon\Actions\Flow\DeleteFlow;
use professionalweb\IntegrationHub\IntegrationHubCommon\Actions\Flow\GetFlowList;
use professionalweb\IntegrationHub\IntegrationHubCommon\Repositories\FlowRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Repositories\RequestRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Repositories\ProcessOptionsRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\Filter as IFilter;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Actions\Flow\GetFlow as IGetFlow;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\FieldMapper as IFieldMapper;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Actions\Flow\StoreFlow as IStoreFlow;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Actions\Flow\DeleteFlow as IDeleteFlow;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Actions\Flow\GetFlowList as IGetFlowList;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\SubsystemPool as ISubsystemPool;
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

        $this->app->bind(IGetFlow::class, GetFlow::class);
        $this->app->bind(IStoreFlow::class, StoreFlow::class);
        $this->app->bind(IDeleteFlow::class,DeleteFlow::class);
        $this->app->bind(IGetFlowList::class, GetFlowList::class);

        $this->app->singleton(ISubsystemPool::class,SubsystemPool::class);
    }
}