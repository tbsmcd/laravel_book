<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // モデル名は bookdetail だがこの名前で使う
    public function detail()
    {
        // book has one detail
        return $this->hasOne('\App\Bookdetail');
    }

    public function author()
    {
        // book belongs to author
        return $this->belongsTo('\App\Author');
    }
}
