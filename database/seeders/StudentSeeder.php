<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student; // Importa tu modelo Student
use App\Models\School;  // Importa tu modelo School para poder obtener sus IDs

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener IDs de escuelas existentes para asignarlas a los alumnos
        // Esto asume que el SchoolSeeder ya se ha ejecutado y ha creado estas escuelas.
        $iesEbre = School::where('name', 'IES L\'Ebre')->first();
        $santJordi = School::where('name', 'Escola Sant Jordi')->first();

        // Crear alumnos y asignarlos a una escuela
        if ($iesEbre) { // Siempre verifica que la escuela exista
            Student::create([
                'name' => 'Maria',
                'surname' => 'Perez',
                'birthdate' => '2008-03-20',
                'hometown' => 'Deltebre',
                'school_id' => $iesEbre->id, // Asigna el ID de la escuela
            ]);

            Student::create([
                'name' => 'Lusia',
                'surname' => 'Prats',
                'birthdate' => '2007-09-01',
                'hometown' => 'Carniseria lusia',
                'school_id' => $iesEbre->id,
            ]);
        }

        if ($santJordi) {
            Student::create([
                'name' => 'Lurdes',
                'surname' => 'Del burdel',
                'birthdate' => '2009-01-10',
                'hometown' => 'Tortosa',
                'school_id' => $santJordi->id,
            ]);
        }

        // Si quieres crear muchos alumnos de forma aleatoria, puedes usar Factories:
        // Student::factory()->count(50)->create(); // Asegúrate de haber configurado StudentFactory
    }
}
