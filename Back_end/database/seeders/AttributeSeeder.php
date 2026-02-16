<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            'Lumière',
            'Ténèbres',
            'Feu',
            'Eau',
            'Vent',
            'Terre',
            'Divin'
        ];

        foreach ($attributes as $attr) {
            Attribute::firstOrCreate(['name' => $attr]);
        }
    }
}
