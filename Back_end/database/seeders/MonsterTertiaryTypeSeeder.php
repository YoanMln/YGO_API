<?php

namespace Database\Seeders;

use App\Models\MonsterTertiaryType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonsterTertiaryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $monsterTertiaryTypes = [
            'Flip',
            'Toon',
            'Spirit',
            'Union',
            'Gémeau',
            'Syntoniseur',
        ];

        foreach ($monsterTertiaryTypes as $monsterTertiaryType) {
            MonsterTertiaryType::firstOrCreate(['name' => $monsterTertiaryType]);
        }
    }
}
