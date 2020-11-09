<?php

namespace App\Domain\Specialities\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Specialities\Models\Speciality
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality query()
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality whereUpdatedAt($value)
 * @mixin Model
 * @property string $slug
 * @property-read \App\Domain\Specialities\Models\SpecialityTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domain\Specialities\Models\SpecialityTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Speciality withTranslation()
 */
class Speciality extends Model
{
    use HasFactory, Translatable;

    protected $guarded = ['id'];

    protected $translatedAttributes = ['name'];

    protected static function newFactory()
    {
        return \Database\Factories\SpecialityFactory::new();
    }
}
