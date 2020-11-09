<?php


namespace App\Domain\Specialities\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Specialities\Models\SpecialityTranslation
 *
 * @property int $id
 * @property int $speciality_id
 * @property string $name
 * @property string $description
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialityTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialityTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialityTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialityTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialityTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialityTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialityTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecialityTranslation whereSpecialityId($value)
 * @mixin \Eloquent
 */
class SpecialityTranslation extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];
}
