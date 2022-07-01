<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories;

use Illuminate\Database\Eloquent\Model;
use professionalweb\lms\Common\Interfaces\Repositories\Repository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models\Flow;

/**
 * Flow repository interface
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories
 *
 * @method create(array $attributes = []): Flow
 * @method fill(Model $model, array $attributes = []): Flow
 * @method model($id): ?Flow
 */
interface FlowRepository extends Repository
{
    /**
     * Get default processing flow
     *
     * @return Flow|null
     */
    public function getDefault(): ?Flow;
}