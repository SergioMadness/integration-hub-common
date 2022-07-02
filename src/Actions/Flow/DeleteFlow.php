<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Actions\Flow;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use professionalweb\IntegrationHub\IntegrationHubCommon\Traits\UseFlowRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\FlowRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Actions\Flow\DeleteFlow as IDeleteFlow;

/**
 * Action to delete flow by id
 */
class DeleteFlow implements IDeleteFlow
{
    use UseFlowRepository;

    /** @var string Flow ID */
    private string $flowId;

    public function __construct(FlowRepository $flowRepository)
    {
        $this->setFlowRepository($flowRepository);
    }

    /**
     * @return Model|Collection|mixed
     */
    public function run()
    {
        $repository = $this->getFlowRepository();
        $model = $repository->model($this->getId());
        if ($model === null) {
            throw new NotFoundHttpException(trans('SAAS::companies.company-not-found'));
        }
        $repository->remove($model);

        return $model;
    }

    /**
     * Set flow id
     *
     * @param string $id
     *
     * @return IDeleteFlow
     */
    public function setId(string $id): IDeleteFlow
    {
        $this->flowId = $id;

        return $this;
    }

    /**
     * Get flow id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->flowId;
    }
}