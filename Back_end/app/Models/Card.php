<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    protected $fillable = [
        'name',
        'description',
        'type_id',
        'attribute',
    ];

    public function type()
    {
        return $this->belongsTo(\App\Models\Type::class);
    }

    public function getImageAttribute($value)
    {
        return $value ? asset('storage/cards/' . $value) : null;
    }
}
