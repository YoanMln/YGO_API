<?php

namespace Database\Seeders;

use App\Models\MonsterType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonsterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $monsterTypes = [
            'Magicien',
            'Dragon',
            'Zombie',
            'Guerrier',
            'Bête-Guerrier',
            'Bête',
            'Bête Ailée',
            'Démon',
            'Elfe',
            'Insecte',
            'Dinosaure',
            'Reptile',
            'Poisson',
            'Serpent de Mer',
            'Aqua',
            'Pyro',
            'Tonnerre',
            'Rocher',
            'Plante',
            'Machine',
            'Psychique',
            'Bête Divine',
            'Wyrm',
            'Cyberse'
        ];

        foreach ($monsterTypes as $monsterType) {
            MonsterType::firstOrCreate(['name' => $monsterType]);
        }
    }
}
