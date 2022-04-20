<?php

namespace App\Models;

use Carbon\Carbon;
use Egal\Model\Model as EgalModel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property integer $id           {@property-type field}  {@primary-key}
 * @property uuid $uid             {@property-type field}  {@validation-rules required|uuid|unique:speakers}
 * @property string $name          {@property-type field}  {@validation-rules required|string}
 * @property string $surname       {@property-type field}  {@validation-rules required|string}
 * @property string $avatar        {@property-type field}  {@validation-rules string}
 * @property string $video         {@property-type field}  {@validation-rules string}
 * @property Carbon $created_at    {@property-type field}
 * @property Carbon $updated_at    {@property-type field}
 *
 * @property Collection | WorkingTime[] $workingTimes     {@property-type relation}
 *
 * @action getMetadata  {@statuses-access logged}
 * @action getItem      {@statuses-access logged}
 * @action getItems     {@statuses-access logged}
 * @action create       {@statuses-access logged}
 * @action update       {@statuses-access logged}
 * @action delete       {@statuses-access logged}
 */
class Speaker extends EgalModel
{

    protected $fillable = [
        'uid',
        'name',
        'surname',
        'avatar',
        'video',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function workingTimes(): HasMany
    {
        return $this->hasMany(WorkingTime::class);
    }

}
