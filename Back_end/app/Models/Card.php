<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function type()
    {
        return $this->belongsTo(\App\Models\Type::class);
    }
}
