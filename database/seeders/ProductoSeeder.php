<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use Illuminate\Support\Str;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    for ($i = 1; $i <= 50; $i++) {
        Producto::create([
            'nombre' => 'Producto ' . $i,
            'marca' => 'Marca ' . rand(1, 10),
            'precio' => rand(10, 100),
            'imagen' => 'producto' . $i . '.jpg', // puedes cambiar esto luego con imágenes reales
            'descripcion' => 'Descripción del producto farmacéutico número ' . $i,
            'stock' => rand(1, 200),
            'categoria' => ['Analgésico', 'Antibiótico', 'Antiinflamatorio', 'Antigripal'][rand(0, 3)],
        ]);
    }
}
}
