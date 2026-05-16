<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Events\NewRequest as NewRequestEvent;

readonly class NewRequest implements ShouldQueue
{
    use InteractsWithQueue, Queueable;

    public function __construct(
        public EventData $request
    )
    {

    }

    public function handle(): void
    {
        event(new NewRequestEvent($this->request));
    }
}