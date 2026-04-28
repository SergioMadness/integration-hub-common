<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Providers;

use Illuminate\Support\ServiceProvider;
use professionalweb\IntegrationHub\IntegrationHubCommon\Services\Filter;
use professionalweb\IntegrationHub\IntegrationHubCommon\Services\FieldMapper;
use professionalweb\IntegrationHub\IntegrationHubCommon\Services\SubsystemPool;
use professionalweb\IntegrationHub\IntegrationHubCommon\Repositories\RequestRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\Filter as IFilter;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\FieldMapper as IFieldMapper;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\SubsystemPool as ISubsystemPool;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\RequestRepository as IRequestRepository;

class IntegrationHubCommonProvider extends ServiceProvider
{
    public function boot(): void
    {

    }

    public function register(): void
    {
        $this->app->register(ValidationProvider::class);
        $this->app->register(EventServiceProvider::class);

        $this->app->singleton(IFilter::class, Filter::class);
        $this->app->singleton(IFieldMapper::class, FieldMapper::class);

        $this->app->singleton(IRequestRepository::class, RequestRepository::class);

        $this->app->singleton(ISubsystemPool::class, SubsystemPool::class);
    }
}