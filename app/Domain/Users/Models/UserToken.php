<?php

namespace App\Domain\Users\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Users\Models\UserToken
 *
 * @property int $id
 * @property int $user_id
 * @property string $token
 * @property string|null $expired_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken whereExpiredDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserToken whereUserId($value)
 * @mixin \Eloquent
 */
class UserToken extends Model
{
    use HasFactory;
}
