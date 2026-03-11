<?php

namespace Database\Seeders;

use App\Models\TrapType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;




class TrapTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trapTypes = [
            'Normal',
            'Continue',
            'Contre'
        ];

        foreach ($trapTypes as $type) {
            TrapType::create([
                'name' => $type
            ]);
        }
    }
}
