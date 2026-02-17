<?php

namespace Database\Seeders;

use App\Models\MonsterPrimaryType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonsterPrimaryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $monsterPrimaryTypes = [
            'Normal',
            'Effet',
        ];

        foreach ($monsterPrimaryTypes as $monsterPrimaryType) {
            MonsterPrimaryType::firstOrCreate(['name' => $monsterPrimaryType]);
        }
    }
}
