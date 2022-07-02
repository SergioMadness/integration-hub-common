<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Actions\Flow;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Actions\Flow\StoreFlow as IStoreFlow;

/**
 * Action to create/update flow
 */
class StoreFlow implements IStoreFlow
{
    /** @var string */
    private string $id;

    /**
     * @return Model|Collection|mixed
     */
    public function run()
    {
        // TODO: Implement run() method.
    }

    /**
     * @param string $id
     *
     * @return IStoreFlow
     */
    public function setId(string $id): IStoreFlow
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }
}