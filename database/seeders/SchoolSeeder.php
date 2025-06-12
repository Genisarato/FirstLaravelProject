<?php

namespace Database\Seeders;

use App\Models\School;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::create([
            'name' => 'IES L\'Ebre',
            'address' => 'Carrer Sant Pere, 123',
            'logo_path' => null,
            'email' => 'contacte@iesebre.cat',
            'phone' => '977481234',
            'website' => 'https://www.iesebre.cat',
        ]);

        School::create([
            'name' => 'Escola La Solana',
            'address' => 'Plaça Major, 45',
            'logo_path' => null,
            'email' => 'info@lasolana.org',
            'phone' => '977123456',
            'website' => 'https://www.lasolana.org',
        ]);

        School::create([
            'name' => 'Escola Sant Jordi',
            'address' => 'Carrer Montse Major, 45',
            'logo_path' => null,
            'email' => 'info@santjordi.org',
            'phone' => '977123456',
            'website' => 'https://www.santjordi.org',
        ]);
    }
}
