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
                Ce dragon légendaire est un puissant moteur de destruction. 
                Rares sont ceux qui ont survécu à cette terrifiante créature quasiment invincible pour en parler.
                EOD,
                'level' => 8,
                'attack' => 3000,
                'defense' => 2500,
                'type_id' => 1,
                'monster_primary_type_id' => 1,
                'attribute_id' => 1,
            ],
            [
                'name' => 'Trou Noir',
                'image' => 'dark_hole.jpg',
                'description' => <<<EOD
                Détruisez tous les monstres sur le Terrain.
                EOD,
                'type_id' => 2,
                'spell_type_id' => 1,
            ],
            [
                'name' => 'Force de Miroir',
                'image' => 'mirror_force.jpg',
                'description' => <<<EOD
                Lorsqu'un monstre de l'adversaire déclare une attaque : 
                détruisez tous les monstres en Position d'Attaque de votre adversaire.
                EOD,
                'type_id' => 3,
                'trap_type_id' => 1,
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
                'monster_type_id' => 15,
                'monster_primary_type_id' => 2,
                'monster_secondary_type_id' => 2,
                'attribute_id' => 4,
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
                'monster_type_id' => 22,
                'monster_primary_type_id' => 2,
                'attribute_id' => 7,
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
                'attribute_id' => 1,
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
                Vous pouvez envoyer 1 monstre Bête Divine depuis votre main au Cimetière ; ajoutez 1 "Monster Reborn" depuis votre Deck ou Cimetière à votre main. 
                Vous pouvez envoyer cette carte face recto au Cimetière ; ce tour, vous pouvez Invoquer Spécialement "Le Dragon Ailé de Râ" depuis votre Cimetière avec "Monster Reborn", en ignorant ses conditions d'Invocation. Durant la End Phase du tour où cet effet a été activé, vous devez envoyer "Le Dragon Ailé de Râ" que vous contrôlez qui a été Invoqué Spécialement avec "Monster Reborn" au Cimetière. Vous ne pouvez utiliser chaque effet de "Révélation Millénaire" qu'une fois par tour.
                EOD,
                'type_id' => 2,
                'spell_type_id' => 2,
            ],
            [
                'name' => 'Unification du Dieu du Soleil',
                'image' => 'sun_god_unification.jpg',
                'description' => <<<EOD
                Si vous contrôlez un monstre dont le nom d'origine est "Le Dragon Ailé de Râ", vous pouvez activer cette carte le tour où elle a été Posée. 
                Durant la Main Phase : vous pouvez payer des LP jusqu'à n'en avoir plus que 100 ; 1 "Le Dragon Ailé de Râ" Invoqué Spécialement que vous contrôlez gagne une ATK/DEF égales au montant des LP payés (même si cette carte quitte le Terrain). Une fois par tour : vous pouvez Sacrifier 1 "Le Dragon Ailé de Râ" ; gagnez des LP égaux à son ATK sur le Terrain. Vous ne pouvez pas activer les deux effets de cette carte dans la même Chaîne.
                EOD,
                'type_id' => 3,
                'trap_type_id' => 2,
            ],
            [
                'name' => 'Chant Ancien',
                'image' => 'ancient_chant.jpg',
                'description' => <<<EOD
                Ajoutez 1 "Le Dragon Ailé de Râ" depuis votre Deck ou Cimetière à votre main, et si vous le faites, 
                vous pouvez Invoquer par Sacrifice 1 monstre durant votre Main Phase ce tour, en plus de votre Invocation/Pose Normale. 
                (Vous ne pouvez gagner cet effet qu'une fois par tour.) Vous pouvez bannir cette carte depuis votre Cimetière : si vous Invoquez par Sacrifice "Le Dragon Ailé de Râ" ce tour, son ATK/DEF d'origine deviennent la somme des ATK/DEF d'origine des monstres Sacrifiés pour son Invocation. Vous ne pouvez activer qu'1 "Chant Ancien" par tour.
                EOD,
                'type_id' => 2,
                'spell_type_id' => 1,
            ],
            [
                'name' => 'Le véritable Dieu Du Soleil',
                'image' => 'the_true_sun_god.jpg',
                'description' => <<<EOD
                Lorsque cette carte est activée : ajoutez 1 "Le Dragon Ailé de Râ" ou 1 carte qui le mentionne ("Le Véritable Dieu du Soleil" exclu) 
                depuis votre Deck à votre main. Les monstres ("Le Dragon Ailé de Râ" exclu) ne peuvent pas attaquer le tour où ils sont Invoqués Spécialement. Une fois par tour, durant votre Main Phase : vous pouvez envoyer cette carte depuis le Terrain ou 1 "Le Dragon Ailé de Râ - L'Invincible Phénix" depuis votre Deck au Cimetière, puis envoyez 1 "Le Dragon Ailé de Râ" depuis votre Zone Monstre au Cimetière. Vous ne pouvez activer qu'1 "Le Véritable Dieu du Soleil" par tour.
                EOD,
                'type_id' => 2,
                'spell_type_id' => 2
            ],
            [
                'name' => 'Canon De Flammes',
                'image' => 'blaze_canon.jpg',
                'description' => <<<EOD
                (Cette carte est toujours aussi traitée comme une carte "Accélérateur de Flammes".)
                Jusqu'à la fin de ce tour, un "Le Dragon Ailé de Râ" que vous contrôlez gagne les effets suivants. L'activation et l'effet de cette carte ne peuvent être annulés.
                ●Cette carte n'est pas affectée par des effets de carte de votre adversaire.
                ●Lorsqu'une attaque impliquant cette carte est déclarée : vous pouvez Sacrifier un nombre de votre choix d'autres monstres qui n'ont pas déclaré d'attaque ce tour ; jusqu'à la fin de ce tour, cette carte gagne une ATK égale à la somme des ATK d'origine des monstres Sacrifiés.
                ●Après le calcul des dommages, si cette carte a attaqué : vous pouvez envoyer tous les monstres contrôlés par votre adversaire au Cimetière.
                EOD,
                'type_id' => 2,
                'spell_type_id' => 4
            ],
            [
                'name' => <<<EOD
                Chaînes D'Entrave Du Dieu
                EOD,
                'image' => 'mound_of_the_bound_creator.jpg',
                'description' => <<<EOD
                Les monstres de min. Niveau 10 sur le Terrain ne peuvent être ni ciblés ni détruits par des effets de carte. Si un monstre de min.
                Niveau 10 détruit un monstre au combat et l'envoie au Cimetière : le joueur qui contrôlait le monstre détruit reçoit 1000 points de dommages. 
                Lorsque cette carte sur le Terrain est détruite par un effet de carte et envoyée au Cimetière : vous pouvez ajouter ı monstre DIVIN depuis votre Deck à votre main.
                EOD,
                'type_id' => 2,
                'spell_type_id' => 3,
            ],
            [
                'name' => "Gardien Slime",
                'image' => 'guardian_slime.jpg',
                'description' => <<<EOD
                Si vous recevez des dommages de combat ou d'effet : vous pouvez Invoquer Spécialement cette carte depuis votre main. 
                Durant le calcul des dommages, si cette carte combat un monstre de l'adversaire (Effet Rapide) : durant ce calcul des dommages uniquement, vous pouvez faire gagner à cette carte une DEF égale à l'ATK du monstre de l'adversaire. 
                Si cette carte est envoyée depuis la main ou Terrain au Cimetière : vous pouvez ajouter 1 Magie/Piège depuis votre Deck à votre main, qui liste spécifiquement la carte "Le Dragon Ailé de Râ" dans son texte. Vous ne pouvez utiliser chaque effet de "Gardien Slime" qu'une fois par tour.
                EOD,
                'level' => 10,
                'attack' => 0,
                'defense' => 0,
                'type_id' => 1,
                'monster_type_id' => 15,
                'monster_primary_type_id' => 2,
                'attribute_id' => 4,

            ],
            [
                'name' => "Réacteur Slime",
                'image' => 'reactor_slime.jpg',
                'description' => <<<EOD
                Durant votre Main Phase : vous pouvez activer cet effet; Invoquez Spécialement 2 "Jeton de Slime" (Aqua/EAU/Niveau 1/ATK 500/DEF 500), et aussi, vous ne pouvez Invoquer ni Normalement ni Spécialement de monstres (monstres Bête Divine exclus) le reste de ce tour. Durant la Battle Phase (Effet Rapide) : vous pouvez Sacrifier cette carte ; Posez 1 "Slime Métallique" depuis votre main, Deck ou Cimetiere. peut etre active ce tour.
                Vous ne pouvez utiliser chaque effet de "Réacteur Slime" qu'une fois par tour.
                EOD,
                'level' => 4,
                'attack' => 500,
                'defense' => 500,
                'type_id' => 1,
                'monster_type_id' => 15,
                'monster_primary_type_id' => 2,
                'attribute_id' => 4,
            ],
            [
                'name' => 'Slime Métallique',
                'image' => 'metal_reflect_slime.jpg',
                'description' => <<<EOD
                Invoquez Spécialement cette carte en Position de Défense comme un Monstre à Effet (Aqua/EAU/Niveau 10/ATK o/DEF 3000). 
                (Cette carte est toujours aussi un Piège.) Si elle est Invoquée de cette façon, cette carte ne peut pas attaquer.
                EOD,
                'type_id' => 3,
                'trap_type_id' => 2,
            ],
            [
                'name' => <<<EOD
                Verdict D'Anubis
                EOD,
                'image' => 'verdict_of_anubis.jpg',
                'description' => <<<EOD
                Lorsque votre adversaire active une Carte Magie/Piège, tant que vous contrôlez min. 3 autres Magies/Pièges : annulez l'activation, et si vous le faites, détruisez la carte, 
                puis si vous contrôlez "Le Temple des Rois", vous pouvez détruire autant de monstres contrôlés par votre adversaire que possible, 
                puis infligez des dommages à votre adversaire égaux à la moitié de la somme des ATK d'origine de ces monstres détruits. 
                Vous ne pouvez activer qu'1 "Verdict d'Anubis" par tour.
                EOD,
                'type_id' => 3,
                'trap_type_id' => 3,
            ],
            [
                'name' => 'Rituel De Magie Noire',
                'image' => 'black_magic_ritual.jpg',
                'description' => <<<EOD
                Cette carte est utilisée pour Invoquer Rituellement "Magicien du Chaos Sombre".
                Vous devez aussi Sacrifier des monstres depuis votre main ou Terrain dont le Niveau total est égal à min.
                EOD,
                'type_id' => 2,
                'spell_type_id' => 6,
            ],
            [
                'name' => 'Secrets De La Magie Des Ténèbres',
                'image' => 'secrets_of_dark_magic.jpg',
                'description' => <<<EOD
                Activez 1 des effets suivants.
                • Invoquez par Fusion 1 Monstre Fusion depuis votre Extra Deck, en utilisant des monstres depuis votre main ou Terrain ("Magicien Sombre"
                'ou "Magicienne des Ténèbres" inclus) comme Matériel Fusion.
                • Invoquez Rituellement 1 Monstre Rituel depuis votre main, en Sacrifiant des monstres depuis votre main ou Terrain (Magicien Sombre" ou "Magicienne des Ténèbres" inclus) 
                dont le Niveau total est supérieur ou égal au Niveau du Monstre Rituel.
                EOD,
                'type_id' => 2,
                'spell_type_id' => 4,
            ],
            [
                'name' => <<<EOD
                Hâpi, Guide D'Horus
                EOD,
                'image' => 'hapi-guidance-of-horus.jpg',
                'description' => <<<EOD
                Si vous contrôlez "Sarcophage du Roi", vous pouvez Invoquer Spécialement cette carte (depuis votre Cimetière). 
                Vous ne pouvez Invoquer Spécialement "Hâpi, Guide d'Horus" qu'une fois par tour de cette façon. 
                Si une ou plusieurs autres cartes que vous contrôlez quittent le Terrain par un effet de carte de l'adversaire, tant que cette carte est dans votre Zone Monstre 
                (sauf durant la Damage Step) : vous pouvez cibler 2 cartes qui sont bannies et/ou dans les Cimetières ; soit ajoutez-les toutes les deux à la main, soit mélangez-les toutes les deux dans le Deck. 
                Vous ne pouvez utiliser cet effet de "Hâpi, Guide d'Horus" qu'une fois par tour.
                EOD,
                'type_id' => 1,
                'monster_type_id' => 5,
                'monster_primary_type_id' => 2,
                'level' => 8,
                'attribute_id' => 5,
                'attack' => 2400,
                'defense' => 1600,
            ],
            [
                'name' => <<<EOD
                Kébehsénouf, Protection D'Horus
                EOD,
                'image' => 'qebehsenuef.jpg',
                'description' => <<<EOD
                Si vous contrôlez "Sarcophage du Roi", vous pouvez Invoquer Spécialement cette carte (depuis votre Cimetière). 
                Vous ne pouvez Invoquer Spécialement "Kébehsénouf, Protection d'Horus" qu'une fois par tour de cette façon. 
                Si une ou plusieurs autres cartes que vous contrôlez quittent le Terrain par un effet de carte de l'adversaire, 
                tant que cette carte est dans votre Zone Monstre (sauf durant la Damage Step) : vous pouvez activer cet effet ; 
                ce tour, les monstres de votre adversaire ne peuvent pas cibler de monstres "Horus" avec une attaque, et aussi, 
                votre adversaire ne peut pas cibler de monstres "Horus" sur le Terrain avec des effets de carte. Vous ne pouvez utiliser cet effet de "Kébehsénouf, 
                Protection d'Horus" qu'une fois par tour.
                EOD,
                'type_id' => 1,
                'monster_type_id' => 7,
                'monster_primary_type_id' => 2,
                'level' => 8,
                'attribute_id' => 6,
                'attack' => 2500,
                'defense' => 2000,
            ],
            [
                'name' => <<<EOD
                Hamset, Gloire D'Horus
                EOD,
                'image' => 'imsety-glory-of-horus.jpg',
                'description' => <<<EOD
                Si vous contrôlez "Sarcophage du Roi", vous pouvez Invoquer Spécialement cette carte (depuis votre Cimetière). 
                Vous ne pouvez Invoquer Spécialement "Amset, Gloire d'Horus" qu'une fois par tour de cette façon. 
                Vous ne pouvez utiliser chacun des effets suivants de "Amset, Gloire d'Horus" qu'une fois par tour. 
                Vous pouvez envoyer 2 cartes (cette carte incluse) depuis votre main au Cimetière ; 
                ajoutez 1 "Sarcophage du Roi" depuis votre Deck à votre main, puis vous pouvez piocher 1 carte. 
                Si une ou plusieurs autres cartes que vous contrôlez quittent le Terrain par un effet de carte de l'adversaire, 
                tant que cette carte est dans votre Zone Monstre (sauf durant la Damage Step) : vous pouvez envoyer 1 carte sur le Terrain au Cimetière.
                EOD,
                'type_id' => 1,
                'monster_type_id' => 1,
                'monster_primary_type_id' => 2,
                'level' => 8,
                'attribute_id' => 2,
                'attack' => 3000,
                'defense' => 1800,
            ],
            [
                'name' => 'Horus Divinité De La Flamme Noire',
                'image' => 'horus-the-black-flame-deity.jpg',
                'description' => <<<EOD
                Si vous contrôlez "Sarcophage du Roi" et un monstre "Horus" : vous pouvez révéler cette carte dans votre main, 
                puis envoyez 1 carte depuis votre main ou Terrain au Cimetière ; envoyez 1 carte sur le Terrain au Cimetière. 
                Si un ou plusieurs monstres "Horus" face recto que vous contrôlez ("Horus Divinité de la Flamme Noire" exclu) 
                ou "Sarcophage du Roi" face recto que vous contrôlez quittent le Terrain par un effet de carte de l'adversaire 
                (sauf durant la Damage Step) : vous pouvez Invoquer Spécialement cette carte depuis votre main, puis vous pouvez 
                envoyer tous les autres monstres sur le Terrain au Cimetière. Vous ne pouvez utiliser chaque effet de "Horus Divinité de la Flamme Noire" 
                qu'une fois par tour.
                EOD,
                'type_id' => 1,
                'monster_type_id' => 2,
                'monster_primary_type_id' => 2,
                'level' => 8,
                'attribute_id' => 3,
                'attack' => 3000,
                'defense' => 1800,
            ],
            [
                'name' => <<<EOM
                Douamoutef, Bénédiction d'Horus
                EOM,
                'image' => 'duamutef-blessing-of-horus.jpg',
                'description' => <<<EOM
                Si vous contrôlez "Sarcophage du Roi", vous pouvez Invoquer Spécialement cette carte (depuis votre Cimetière). 
                Vous ne pouvez Invoquer Spécialement "Douamoutef, Bénédiction d'Horus" qu'une fois par tour de cette façon. 
                Gagne 1200 ATK/DEF pour chaque monstre "Horus" que vous contrôlez. Si une ou plusieurs autres cartes que vous 
                contrôlez quittent le Terrain par un effet de carte de l'adversaire, tant que cette carte est dans votre Zone Monstre 
                (sauf durant la Damage Step) : vous pouvez piocher un nombre de cartes égal au nombre de monstres de noms différents dans votre Zone Monstre Main. 
                Vous ne pouvez utiliser cet effet de "Douamoutef, Bénédiction d'Horus" qu'une fois par tour.
                EOM,
                'type_id' => 1,
                'monster_type_id' => 6,
                'monster_primary_type_id' => 2,
                'level' => 8,
                'attribute' => 4,
                'attack' => 0,
                'defense' => 0,
            ],
            [
                'name' => 'Sarcophage Du Roi',
                'image' => 'kings-sarcophagus.jpg',
                'description' => <<<EOM
                Les monstres "Horus" que vous contrôlez ne peuvent pas être détruits par des effets de carte qui ne les ciblent pas. 
                Vous pouvez envoyer 1 carte depuis votre main au Cimetière ; envoyez 1 monstre "Horus" depuis votre Deck au Cimetière. 
                Vous ne pouvez utiliser cet effet de "Sarcophage du Roi" que max. quatre fois par tour. Une fois par tour, au début de la Damage Step, 
                si votre monstre "Horus" combat un monstre de l'adversaire : vous pouvez envoyer le monstre de l'adversaire au Cimetière.
                EOM,
                'type_id' => 2,
                'spell_type_id' => 2,
            ],
            [
                'name' => 'Dragon Toon Aux Yeux Rouges',
                'image' => 'red-eyes-toon.jpg',
                'description' => <<<EOM
                Ne peut pas attaquer le tour où elle est Invoquée. 
                Tant que vous contrôlez "Monde des Toons" et que votre adversaire ne contrôle aucun monstre Toon, 
                cette carte peut attaquer directement votre adversaire. Une fois par tour : vous pouvez Invoquer 
                Spécialement 1 monstre Toon ("Dragon Toon aux Yeux Rouges" exclu) depuis votre main, en ignorant ses conditions d'Invocation.
                EOM,
                'type_id' => 1,
                'monster_type_id' => 2,
                'monster_primary_type_id' => 2,
                'monster_tertiary_type_id' => 2,
                'attribute_id' => 2,
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
