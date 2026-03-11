<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SpellType;

class SpellTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spellTypes = [
            'Normal',
            'Continue',
            'Terrain',
            'Rapide',
            'Équipement',
            'Rituelle'
        ];

        foreach ($spellTypes as $type) {
            SpellType::create([
                'name' => $type
            ]);
        }
    }
}
