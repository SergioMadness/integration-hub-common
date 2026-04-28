<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories;

use Illuminate\Database\Eloquent\Model;
use professionalweb\lms\Common\Interfaces\Repositories\Repository;

/**
 * Interface for repository of requests
 *
 * @method create(array $attributes = []): Request
 * @method fill(Model $model, array $attributes = []): Request
 * @method model($id): ?Request
 */
interface RequestRepository extends Repository
{

}