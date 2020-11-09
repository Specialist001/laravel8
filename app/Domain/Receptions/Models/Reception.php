<?php

namespace App\Domain\Receptions\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Receptions\Models\Reception
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Reception newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reception newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reception query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $clinic_id
 * @property int $patient_id
 * @property int $doctor_id
 * @property int|null $employee_id
 * @property int|null $laboratory_id
 * @property string|null $reception_time
 * @property string $descriptions
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Reception whereClinicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reception whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reception whereDescriptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reception whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reception whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reception whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reception whereLaboratoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reception wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reception whereReceptionTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reception whereUpdatedAt($value)
 */
class Reception extends Model
{
    use HasFactory;
}
