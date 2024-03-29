<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Repositories;

use professionalweb\lms\Common\Abstractions\EntityRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Models\ProcessOptions;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\ProcessOptionsRepository as IProcessOptionsRepository;

/**
 * Process options repository
 * @package professionalweb\IntegrationHub\IntegrationHubDB\Repositories
 *
 * @method save(ProcessOptions $model): bool
 * @method create(array $attributes = []): ProcessOptions
 * @method remove(ProcessOptions $model): bool
 * @method fill(ProcessOptions $model, array $attributes = []): ProcessOptions
 */
class ProcessOptionsRepository extends EntityRepository implements IProcessOptionsRepository
{
    public bool $noNeedWebsite = true;

    public function __construct()
    {
        $this->setModelClass(ProcessOptions::class);
    }
}