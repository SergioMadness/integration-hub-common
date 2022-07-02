<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Actions\Flow;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use professionalweb\lms\Common\Traits\UseRequest;
use professionalweb\lms\Common\Traits\HasPagination;
use professionalweb\IntegrationHub\IntegrationHubCommon\Traits\UseFlowRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Repositories\FlowRepository;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Actions\Flow\GetFlowList as IGetFlowList;

/**
 * Action to get flows
 */
class GetFlowList implements IGetFlowList
{
    use UseFlowRepository, HasPagination, UseRequest;

    public function __construct(FlowRepository $repository, Request $request)
    {
        $this->setFlowRepository($repository)->setRequest($request);
    }

    /**
     * @return Model|Collection|mixed
     */
    public function run()
    {
        $request = $this->getRequest();

        return $this->getFlowRepository()->pagination([], ['name' => 'asc'], $this->getLimit($request), $this->getOffset($request));
    }
}