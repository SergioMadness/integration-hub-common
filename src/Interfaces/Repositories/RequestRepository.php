<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories;

use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\Model;

/**
 * Interface for repository of requests
 * @package professionalweb\IntegrationHub\IntegrationHubDB\Interfaces\Repositories
 *
 * @method create(array $attributes = []): Request
 * @method fill(Model $model, array $attributes = []): Request
 * @method model($id): ?Request
 */
interface RequestRepository extends Repository
{

}