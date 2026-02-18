<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    protected $fillable = [
        'name',
        'description',
        'type_id',
        'attribute',
        'monster_type_id',
        'monster_primary_type_id',
        'monster_secondary_type_id'
    ];

    public function type()
    {
        return $this->belongsTo(\App\Models\Type::class);
    }

    public function getImageAttribute($value)
    {
        return $value ? asset('storage/cards/' . $value) : null;
    }

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function monsterType()
    {
        return $this->belongsTo(MonsterType::class, 'monster_type_id');
    }

    public function monsterPrimaryType()
    {
        return $this->belongsTo(MonsterPrimaryType::class, 'monster_primary_type_id');
    }

    public function monsterSecondaryType()
    {
        return $this->belongsTo(MonsterSecondaryType::class, 'monster_secondary_type_id');
    }

    public function monsterTertiaryType()
    {
        return $this->belongsTo(MonsterTertiaryType::class, 'monster_tertiary_type_id');
    }
}
