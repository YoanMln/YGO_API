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
                'monster_type_id' => 2,
                'description' => <<<EOD
Ce dragon légendaire est un puissant moteur de destruction. Rares sont ceux qui ont survécu à cette terrifiante créature quasiment invincible pour en parler.
EOD,
                'level' => 8,
                'attack' => 3000,
                'defense' => 2500,
                'type_id' => 1, // Monster
                'monster_primary_type_id' => 1, // Normal
            ],
            [
                'name' => 'Trou Noir',
                'image' => 'dark_hole.jpg',
                'description' => <<<EOD
Détruisez tous les monstres sur le Terrain.
EOD,
                'level' => null,
                'attack' => null,
                'defense' => null,
                'type_id' => 2, // Spell
            ],
            [
                'name' => 'Force de Miroir',
                'image' => 'mirror_force.jpg',
                'description' => <<<EOD
Lorsqu'un monstre de l'adversaire déclare une attaque : détruisez tous les monstres en Position d'Attaque de votre adversaire.
EOD,
                'level' => null,
                'attack' => null,
                'defense' => null,
                'type_id' => 3, // Trap
            ],
            [
                'name' => 'Dieu Égyptien Slime',
                'image' => 'egyptian_god_slime.jpg',
                'description' => <<<EOD
1 monstre Aqua + 1 monstre EAU de Niveau 10
Doit d'abord être soit Invoquée par Fusion, soit Invoquée Spécialement depuis votre Extra Deck en Sacrifiant 1 monstre Aqua de Niveau 10 avec 0 ATK. 
Cette carte peut être traitée comme 1 ou 3 Sacrifices pour l'Invocation Sacrifice d'un monstre. Non destructible au combat. Les monstres de votre adversaire ne peuvent pas cibler avec une attaque, et votre adversaire ne peut pas cibler avec des effets de carte, les monstres que vous contrôlez ("Dieu Égyptien Slime" exclu).
EOD,
                'level' => 10,
                'attack' => 3000,
                'defense' => 3000,
                'type_id' => 1,
                'monster_type_id' => 15, // Aqua
                'monster_primary_type_id' => 2,
                'monster_secondary_type_id' => 2, // Fusion
            ],
            [
                'name' => 'Le Dragon Ailé De Râ',
                'image' => 'winged_dragon_of_ra.jpg',
                'description' => <<<EOD
Non Invocable Spécialement. Nécessite 3 Sacrifices pour son Invocation Normale (non Posable Normalement). 
L'Invocation Normale de cette carte ne peut pas être annulée. 
Lorsqu'elle est Invoquée Normalement, les autres cartes et effets ne peuvent pas être activés. 
Vous pouvez payer des LP jusqu'à n'en avoir plus que 100 ; cette carte gagne une ATK/DEF égales au montant des LP payés. 
Vous pouvez payer 1000 LP, puis ciblez 1 monstre sur le Terrain ; détruisez la cible.
EOD,
                'level' => 10,
                'attack' => null,
                'defense' => null,
                'type_id' => 1,
                'monster_type_id' => 22, // Divin
                'monster_primary_type_id' => 2,
            ],
            [
                'name' => 'Cyber Dragon Infini',
                'image' => 'cyber_dragon_infinity.jpg',
                'description' => <<<EOD
3 monstres LUMIÈRE Machine de Niveau 6. Une fois par tour, vous pouvez aussi Invoquer par Xyz "Cyber Dragon Infini" en utilisant "Cyber Dragon Nova" que vous contrôlez comme Matériel. 
Transférez ses Matériels à cette carte. Gagne 200 ATK pour chaque Matériel qui lui est attaché. 
Une fois par tour : vous pouvez cibler 1 monstre en Position d'Attaque face recto sur le Terrain ; attachez-le à cette carte comme Matériel. 
Une fois par tour, lorsqu'une carte ou un effet est activé (Effet Rapide) : vous pouvez détacher 1 Matériel de cette carte ; annulez l'activation, et si vous le faites, détruisez-la.
EOD,
                'level' => 6,
                'attack' => 2100,
                'defense' => 1600,
                'type_id' => 1,
                'monster_type_id' => 20,
                'monster_primary_type_id' => 2,
                'monster_secondary_type_id' => 4,
            ],
            [
                'name' => 'Cyber Dragon Sieger',
                'image' => 'cyber_dragon_sieger.jpg',
                'description' => <<<EOD
2 monstres Machine ("Cyber Dragon" inclus). Le nom de cette carte devient "Cyber Dragon" tant qu'elle est sur le Terrain ou dans le Cimetière.
Durant chaque Battle Phase, si cette carte n'a pas déclaré d'attaque (Effet Rapide) : vous pouvez cibler 1 monstre Machine que vous contrôlez avec min. 2100 ATK ; 
le reste de ce tour, le monstre gagne 2100 ATK/DEF, et aucun joueur ne reçoit de dommages de combat d'attaques impliquant ce monstre. 
Vous ne pouvez utiliser cet effet de "Cyber Dragon Sieger" qu'une fois par tour.
EOD,
                'level' => null,
                'attack' => 2100,
                'defense' => null,
                'type_id' => 1,
                'monster_type_id' => 20,
                'monster_primary_type_id' => 2,
                'monster_secondary_type_id' => 6,
                'attribute_id' => 1,
            ],
            [
                'name' => 'Révélation Millénaire',
                'image' => 'millennium_revelation.jpg',
                'description' => <<<EOD
Vous pouvez envoyer 1 monstre Bête Divine depuis votre main au Cimetière ; ajoutez 1 "Monster Reborn" depuis votre Deck ou Cimetière à votre main. Vous pouvez envoyer cette carte face recto au Cimetière ; ce tour, vous pouvez Invoquer Spécialement "Le Dragon Ailé de Râ" depuis votre Cimetière avec "Monster Reborn", en ignorant ses conditions d'Invocation. Durant la End Phase du tour où cet effet a été activé, vous devez envoyer "Le Dragon Ailé de Râ" que vous contrôlez qui a été Invoqué Spécialement avec "Monster Reborn" au Cimetière. Vous ne pouvez utiliser chaque effet de "Révélation Millénaire" qu'une fois par tour.
EOD,
                'level' => null,
                'attack' => null,
                'defense' => null,
                'type_id' => 2,
                'spell_type_id' => 2,
            ]
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
