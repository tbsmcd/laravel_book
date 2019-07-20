<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
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
    
}
