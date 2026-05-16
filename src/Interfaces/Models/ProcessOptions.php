<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\Models;

/**
 * Subsystem settings
 */
interface ProcessOptions
{
    /**
     * Get process id
     */
    public function getId(): string;

    /**
     * Get subsystem/driver ID to identify processor
     */
    public function getSubsystemId(): string;

    /**
     * Get data mapping
     */
    public function getMapping(): array;

    /**
     * Get process options
     */
    public function getOptions(): array;

    /**
     * Processor is remote
     */
    public function isRemote(): bool;

    /**
     * Get queue name to send event to processor through queue
     */
    public function getQueue(): string;

    /**
     * Get host to send event to processor through REST API
     */
    public function getHost(): string;

    /**
     * Need to stop on fail
     */
    public function stopOnFail(): bool;
}