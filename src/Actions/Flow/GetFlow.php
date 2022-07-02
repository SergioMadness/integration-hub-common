<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Actions\Flow;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use professionalweb\lms\Common\Traits\UseRequest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use professionalweb\IntegrationHub\IntegrationHubCommon\Traits\UseFlowRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\FlowRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Actions\Flow\GetFlow as IGetFlow;

/**
 * Action to get flow by id
 */
class GetFlow implements IGetFlow
{
    use UseRequest, UseFlowRepository;

    /** @var string Flow ID */
    private string $flowId;

    public function __construct(FlowRepository $flowRepository, Request $request)
    {
        $this->setFlowRepository($flowRepository)->setRequest($request);
    }

    /**
     * @return Model|Collection|mixed
     */
    public function run()
    {
        $model = $this->getFlowRepository()->model($this->getId());
        if ($model === null) {
            throw new NotFoundHttpException(trans('CommonHUB::flow.flow-not-found'));
        }

        return $model;
    }

    /**
     * Set flow id
     *
     * @param string $id
     *
     * @return IGetFlow
     */
    public function setId(string $id): IGetFlow
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