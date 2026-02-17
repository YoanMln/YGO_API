<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonsterSecondaryType extends Model
{
    protected $fillable = ['name'];

    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
