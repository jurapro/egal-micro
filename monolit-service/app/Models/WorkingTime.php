<?php

namespace App\Models;

use Carbon\Carbon;
use Egal\Model\Model as EgalModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer $id           {@property-type field}  {@primary-key}
 * @property integer $speaker_id   {@property-type field}  {@validation-rules required|exists:speakers,id}
 * @property Carbon $starts_at     {@property-type field}  {@validation-rules required|date|before:ends_at}
 * @property Carbon $ends_at       {@property-type field}  {@validation-rules required|date|after:starts_at}
 * @property Carbon $created_at    {@property-type field}
 * @property Carbon $updated_at    {@property-type field}
 *
 * @property Speaker $speaker {@property-type relation}
 *
 * @action getMetadata          {@statuses-access guest|logged}
 * @action create               {@statuses-access guest|logged}
 * @action update               {@statuses-access guest|logged}
 * @action delete               {@statuses-access guest|logged}
 * @action actionCreateMany     {@statuses-access guest|logged}
 * @action actionDeleteManyRaw  {@statuses-access guest|logged}
 * @action getItem              {@statuses-access guest|logged}
 * @action getItems             {@statuses-access guest|logged}
 */
class WorkingTime extends EgalModel
{

    protected $fillable = [
        'speaker_id',
        'starts_at',
        'ends_at',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function speaker(): BelongsTo
    {
        return $this->belongsTo(Speaker::class);
    }

}
