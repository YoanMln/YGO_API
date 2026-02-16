<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

use function Symfony\Component\Clock\now;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Monster', 'Spell', 'Trap'];

        foreach ($types as $type) {
            Type::firstOrCreate([
                'name' => $type
            ]);
        }
    }
}
