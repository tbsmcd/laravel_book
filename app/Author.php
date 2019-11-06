<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Author
 *
 * @property int $id
 * @property string $name
 * @property string $kana
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Book[] $books
 * @property-read int|null $books_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Author onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author whereKana($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Author whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Author withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Author withoutTrashed()
 * @mixin \Eloquent
 */
class Author extends Model
{
    use SoftDeletes;
    // 規約に反したパターンだとこうなる
    // protected $table = 't_author';
    // あえて id 以外をプライマリーキーとする場合
    // protected $primaryKey = 'authors_id';
    // タイムスタンプを記録しない
    // protected $timestamps = false;
    // 編集可能なカラムを指定
    protected $fillable = [
        'kana',
        'name'
    ];
    // 編集不可能なカラムを指定（ブラックリスト）
//    protected $guarded = [
//        'id',
//        'created_at',
//        'updated_at'
//    ];
    public function books()
    {
        // author has many books
        return $this->hasMany('\App\Book');
    }

}
