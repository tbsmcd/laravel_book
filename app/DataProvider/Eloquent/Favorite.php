<?php

namespace App\DataProvider\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * App\DataProvider\Eloquent\Favorite
 *
 * @property int $book_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DataProvider\Eloquent\Favorite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DataProvider\Eloquent\Favorite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DataProvider\Eloquent\Favorite query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DataProvider\Eloquent\Favorite whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DataProvider\Eloquent\Favorite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DataProvider\Eloquent\Favorite whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\DataProvider\Eloquent\Favorite whereUserId($value)
 * @mixin \Eloquent
 */
class Favorite extends Model
{
    protected $fillable = [
        'book_id',
        'user_id',
        'created_at'
    ];
}
