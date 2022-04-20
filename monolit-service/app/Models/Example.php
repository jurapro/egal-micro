<?php

namespace App\Models;

use Carbon\Carbon;
use Egal\Model\Model as EgalModel;
use Illuminate\Database\Eloquent\Collection;

/**
 * @property int $id            {@property-type field}  {@primary-key}
 * @property string $email      {@property-type field}  {@validation-rules required|string|email|unique:example|email}
 * @property string $password   {@property-type field}  {@validation-rules required|string}
 * @property Carbon $created_at {@property-type field}
 * @property Carbon $updated_at {@property-type field}
 *
 * @property Collection $roles          {@property-type relation}
 * @property Collection $permissions    {@property-type relation}
 *
 * @action getItems     {@statuses-access guest}
 * @action getItem      {@statuses-access guest}
 * @action getMetadata  {@statuses-access guest}x
 * @action create       {@statuses-access guest}
 * @action update       {@statuses-access guest}
 * @action delete       {@statuses-access guest}
 */
class Example extends EgalModel
{

}
