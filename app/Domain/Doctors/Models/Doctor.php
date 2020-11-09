<?php

namespace App\Domain\Doctors\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Doctors\Models\Doctor
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $speciality_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSpecialityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereUserId($value)
 * @mixin Model
 */
class Doctor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
}
