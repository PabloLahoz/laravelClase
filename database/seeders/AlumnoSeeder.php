<?php

namespace Database\Seeders;

use App\Models\Idioma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private function createIdiomasAlumnos(Alumno $alumno, int $numero_idiomas_hablados): void
    {
        $niveles = collect(["Alto", "Medio", "Bajo"]);
        $titulos = collect([null, "A1", "A2", "B1", "B2", "C1", "C2"]);
        $idiomas = collect(config("idiomas"))->shuffle()->take($numero_idiomas_hablados);
        $idiomas->each(fn($idioma_hablado) => $alumno->idiomas()->create([
            "idioma" => $idioma_hablado,
            "nivel" => $niveles->random(),
            "titulo" => $titulos->random(),
        ])
        );
    }
    public function run(): void
    {
        Alumno::factory()->count(5)->create()->each(function (Alumno $alumno) {
            $numero_idiomas_hablados = rand(0, 4);
            if ($numero_idiomas_hablados > 0) {
                $this->createIdiomasAlumnos($alumno, $numero_idiomas_hablados);
            }
        });
        //
    }


}
