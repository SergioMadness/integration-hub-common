<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Traits;

use Illuminate\Database\Eloquent\Model;

/**
 * Trait for models with array fields
 * @package professionalweb\IntegrationHub\IntegrationHubCommon\Traits
 *
 * @mixin Model
 */
trait HasArrayField
{
    /**
     * Set attribute
     *
     * @param string $field
     * @param string $key
     * @param        $val
     *
     * @return $this
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
     *
     * @param string $field
     * @param string $key
     * @param        $default
     *
     * @return array
     */
    public function getArrayItem(string $field, string $key, $default = null)
    {
        return ($this->getAttribute($field) ?? [])[$key] ?? $default;
    }
}
