<?php
namespace Database\Seeders;
use App\Models\Idea;
use Illuminate\Database\Seeder;
class IdeaSeeder extends Seeder
{
 public function run(): void
 {
 Idea::create([
 'titulo' => 'Aplicación para organizar citas
veterinarias',
 'descripcion' => 'Sistema para registrar y organizar
citas de mascotas.',
 'estado' => 'registrada',
 'autor' => 'Jose',
 'categoria_id' => 1
 ]);
 Idea::create([
 'titulo' => 'Plataforma para cursos en línea',
 'descripcion' => 'Sistema para ofrecer cursos y
materiales educativos.',
 'estado' => 'en revisión',
 'autor' => 'Pedro',
 'categoria_id' => 2
 ]);
  Idea::create([
    'titulo' => 'Generador de progresiones de acordes e sintetizadores',
    'descripcion' => 'Herramienta interactiva para diseñar secuencias armónicas y experimentar con música electrónica y sintetizadores.',
    'estado' => 'registrada',
    'autor' => 'Nayeli',
    'categoria_id' => 5
]);
 }
}