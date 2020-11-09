<?php

namespace App\Domain\Laboratories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Laboratories\Models\Laboratory
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereUserId($value)
 */
class Laboratory extends Model
{
    use HasFactory;
}
