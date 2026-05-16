<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidationProvider extends ServiceProvider
{
    public function boot(): void
    {
        Validator::extend('equal', static function (string $attribute, mixed $value, array $parameters): bool {
            return $value === $parameters;
        });
    }
}
