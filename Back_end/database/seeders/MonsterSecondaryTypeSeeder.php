<?php

namespace Database\Seeders;

use App\Models\MonsterSecondaryType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonsterSecondaryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $monsterSecondaryTypes = [
            'Rituel',
            'Fusion',
            'Synchro',
            'Xyz',
            'Pendule',
            'Lien',
        ];
        foreach ($monsterSecondaryTypes as $monsterSecondaryType) {
            MonsterSecondaryType::firstOrCreate(['name' => $monsterSecondaryType]);
        }
    }
}
