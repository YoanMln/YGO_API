<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            ['name' => 'Monster', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spell', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Trap', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
