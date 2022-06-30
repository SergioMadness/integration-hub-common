<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories;

use professionalweb\lms\Common\Interfaces\Repositories\Repository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\Model;

/**
 * Interface for repository with process options
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories
 *
 * @method create(array $attributes = []): ProcessOptions
 * @method fill(Model $model, array $attributes = []): ProcessOptions
 * @method model($id): ?ProcessOptions
 */
interface ProcessOptionsRepository extends Repository
{

}