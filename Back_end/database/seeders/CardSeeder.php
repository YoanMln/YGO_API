<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cards = [
            [
                'name' => 'Dragon Blanc Aux Yeux Bleus',
                'image' => 'blue_eyes.jpg',
                'monster_type_id' => '2',
                'description' => 'Ce dragon légendaire est un puissant moteur de destruction. Rares sont ceux qui ont survécu à cette terrifiante créature quasiment invincible pour en parler.',
                'level' => 8,
                'attack' => 3000,
                'defense' => 2500,
                'type_id' => 1, // Monster

            ],
            [
                'name' => 'Trou Noir',
                'image' => 'dark_hole.jpg',
                'description' => 'Détruisez tous les monstres sur le Terrain',
                'level' => null,
                'attack' => null,
                'defense' => null,
                'type_id' => 2, // Spell

            ],
            [
                'name' => 'Force de Miroir',
                'image' => 'mirror_force.jpg',
                'description' => 'Lorsqu un monstre de l adversaire déclare une attaque : détruisez tous les monstres en Position d Attaque de votre adversaire.',
                'level' => null,
                'attack' => null,
                'defense' => null,
                'type_id' => 3, // Trap

            ],
        ];
        foreach ($cards as $card) {
            Card::updateOrCreate(
                ['name' => $card['name']],
                array_merge($card, [
                    'created_at' => now(),
                    'updated_at' => now()
                ])
            );
        }
    }
}
