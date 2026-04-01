<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;



class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Monstre', 'Magie', 'Piège'];

        foreach ($types as $type) {
            Type::firstOrCreate([
                'name' => $type
            ]);
        }
    }
}
