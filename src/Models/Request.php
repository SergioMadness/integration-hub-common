<?php namespace professionalweb\IntegrationHub\IntegrationHubCommon\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use professionalweb\lms\Common\Abstractions\UUIDModel;
use professionalweb\lms\Common\Interfaces\Models\Model as IModel;
use professionalweb\IntegrationHub\IntegrationHub\Models\Application;
use professionalweb\IntegrationHub\IntegrationHubCommon\Interfaces\EventData;
use professionalweb\IntegrationHub\IntegrationHubCommon\Traits\HasArrayField;

/**
 * Request
 * @package App\Models
 *
 * @property string      $id
 * @property string      $application_id
 * @property array       $body
 * @property array       $processing_info
 * @property string      $status
 * @property string      $response
 * @property string      $request_type
 * @property string      $created_at
 * @property string      $updated_at
 *
 * @property Application $application
 */
class Request extends UUIDModel implements IModel, EventData
{
    use HasArrayField;

    public const DEFAULT_TYPE = 'request';

    protected $table = 'requests';

    protected $fillable = [
        'application_id',
        'body',
        'request_type',
    ];

    protected $casts = [
        'body'            => 'array',
        'processing_info' => 'array',
        'response'        => 'array',
    ];

    protected $visible = [
        'id',
        'body',
        'status',
        'request_type',
        'processing_info',
        'response',
        'created_at',
    ];

    public static function boot(): void
    {
        parent::boot();

        static::creating(static function (Request $model) {
            if (empty($model->status)) {
                $model->status = self::STATUS_NEW;
            }
        });
    }

    /**
     * Application relation
     *
     * @return BelongsTo
     */
    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }

    /**
     * increment attempts
     *
     * @return Request
     */
    public function incAttempts(): self
    {
        return $this->setArrayItem('processing_info', 'attempts', $this->getArrayItem('processing_info', 'attempts', 0) + 1);
    }

    /**
     * Get attempts quantity
     *
     * @return int
     */
    public function getAttemptQty(): int
    {
        return (int)$this->getArrayItem('processing_info', 'attempts', 0);
    }

    /**
     * Stop request processing
     *
     * @return $this
     */
    public function stopPropagation(): EventData
    {
        return $this->setNextStep('', '');
    }

    public function toArray(): array
    {
        $result = parent::toArray();

        $result['application'] = $this->application;

        return $result;
    }

    /**
     * Get current step
     *
     * @return string
     */
    public function getCurrentFlow(): string
    {
        return $this->processing_info['current_flow'] ?? '';
    }

    /**
     * Get current flow id
     *
     * @return string
     */
    public function getCurrentStep(): string
    {
        return $this->processing_info['current_step'] ?? '';
    }

    /**
     * Set current step id in flow
     *
     * @param string $flowId
     * @param string $stepId
     *
     * @return EventData
     */
    public function setCurrentStep(string $flowId, string $stepId): EventData
    {
        return $this
            ->setArrayItem('processing_info', 'current_flow', $flowId)
            ->setArrayItem('processing_info', 'current_step', $stepId);
    }

    /**
     * Set next step id
     *
     * @param string $flowId
     * @param string $stepId
     *
     * @return $this
     */
    public function setNextStep(string $flowId, string $stepId): EventData
    {
        return $this
            ->setArrayItem('processing_info', 'next_flow', $flowId)
            ->setArrayItem('processing_info', 'next_step', $stepId);
    }

    /**
     * Get next step
     *
     * @return string
     */
    public function getNextStep(): string
    {
        return (string)$this->getArrayItem('processing_info', 'next_step', '');
    }

    /**
     * Move to next step
     *
     * @return $this
     */
    public function move(): EventData
    {
        $nextFlowId = $this->getArrayItem('processing_info', 'next_flow');
        if (!empty($nextFlowId)) {
            $this->setCurrentStep((string)$nextFlowId, (string)$this->getArrayItem('processing_info', 'next_step', ''));
        }

        return $this->setNextStep('', '');
    }

    /**
     * Set process response
     *
     * @param string $processId
     * @param bool   $succeed
     * @param mixed  $processResponse
     *
     * @return EventData
     */
    public function setProcessResponse(string $processId, $processResponse, bool $succeed = true): EventData
    {
        $processingInfo = $this->processing_info;

        if (!isset($processingInfo['process_response'])) {
            $processingInfo['process_response'] = [];
        }
        $processingInfo['process_response'][$processId] = [
            'processId' => $processId,
            'isError'   => !$succeed,
            'response'  => $processResponse,
        ];

        $this->processing_info = $processingInfo;

        return $this;
    }

    /**
     * Get data
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->body;
    }

    /**
     * Set data
     *
     * @param $data
     *
     * @return mixed
     */
    public function setData($data)
    {
        $this->body = $data;

        return $this;
    }

    /**
     * Get event id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get value by key
     *
     * @param string $key
     * @param mixed  $default
     *
     * @return mixed
     */
    public function get(string $key, $default = null)
    {
        return $this->getData()[$key] ?? $default;
    }

    /**
     * Set request status
     *
     * @param string $status
     *
     * @return EventData
     */
    public function setStatus(string $status): EventData
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get request statu
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Set attempts to 0
     *
     * @return $this
     */
    public function dropAttempts(): EventData
    {
        return $this->setArrayItem('processing_info', 'attempts', 0);
    }
}