<?php namespace professionalweb\IntegrationHub\IntegrationHubDB\Interfaces\Models;

/**
 * Subsystem settings
 * @package professionalweb\IntegrationHub\IntegrationHubDB\Interfaces\Models
 */
interface ProcessOptions
{
    /**
     * Get subsystem/driver ID to identify processor
     *
     * @return string
     */
    public function getSubsystemId(): string;

    /**
     * Get data mapping
     *
     * @return array
     */
    public function getMapping(): array;

    /**
     * Get process options
     *
     * @return array
     */
    public function getOptions(): array;

    /**
     * Processor is remote
     *
     * @return bool
     */
    public function isRemote(): bool;

    /**
     * Get queue name to send event to processor through queue
     *
     * @return string
     */
    public function getQueue(): string;

    /**
     * Get host to send event to processor through REST API
     *
     * @return string
     */
    public function getHost(): string;
}