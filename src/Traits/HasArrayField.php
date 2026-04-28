<?php

declare(strict_types=1);

namespace professionalweb\IntegrationHub\IntegrationHubCommon\Traits;

use Illuminate\Database\Eloquent\Model;

/**
 * Trait for models with array fields
 *
 * @mixin Model
 */
trait HasArrayField
{
    /**
     * Set attribute
     */
    public function setArrayItem(string $field, string $key, $val): self
    {
        $arr = $this->getAttribute($field) ?? [];
        $arr[$key] = $val;
        $this->setAttribute($field, $arr);

        return $this;
    }

    /**
     * Get array field
     */
    public function getArrayItem(string $field, string $key, $default = null)
    {
        return ($this->getAttribute($field) ?? [])[$key] ?? $default;
    }
}
