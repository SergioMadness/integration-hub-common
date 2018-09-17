<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Providers;

use Illuminate\Support\ServiceProvider;
use professionalweb\IntegrationHub\IntegrationHubCommon\Services\FieldMapper;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Services\FieldMapper as IFieldMapper;

class IntegrationHubCommonProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(ValidationProvider::class);

        $this->app->singleton(IFieldMapper::class, FieldMapper::class);
    }
}