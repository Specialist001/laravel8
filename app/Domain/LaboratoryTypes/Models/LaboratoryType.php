<?php

namespace App\Domain\LaboratoryTypes\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\LaboratoryTypes\Models\LaboratoryType
 *
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryType query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $slug
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryType whereUpdatedAt($value)
 */
class LaboratoryType extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return \Database\Factories\LaboratoryTypeFactory::new();
    }
}
