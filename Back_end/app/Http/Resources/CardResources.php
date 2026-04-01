<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CardResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'description'   => $this->description,
            'image'         => $this->image,
            'level'         => $this->level,
            'attack'        => $this->attack,
            'defense'       => $this->defense,
            'spellType'               => $this->spellType?->name,
            'trapType'                => $this->trapType?->name,
            'type' => [
                'id'   => $this->type?->id,
                'name' => $this->type?->name,
            ],
            'attribute' => [
                'id'   => $this->attribute?->id,
                'name' => $this->attribute?->name,
            ],
            'monster_type' => [
                'id'   => $this->monsterType?->id,
                'name' => $this->monsterType?->name,
            ],
            'monster_primary_type' => [
                'id'   => $this->monsterPrimaryType?->id,
                'name' => $this->monsterPrimaryType?->name,
            ],
            'monster_secondary_type' => [
                'id'   => $this->monsterSecondaryType?->id,
                'name' => $this->monsterSecondaryType?->name,
            ],
        ];
    }
}
