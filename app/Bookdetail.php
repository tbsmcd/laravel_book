<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookdetail extends Model
{
    public function book()
    {
        // detail belongs to book
        return $this->belongsTo('\App\Book');
    }
}
