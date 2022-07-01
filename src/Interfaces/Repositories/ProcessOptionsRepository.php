<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories;

use Illuminate\Database\Eloquent\Model;
use professionalweb\lms\Common\Interfaces\Repositories\Repository;

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