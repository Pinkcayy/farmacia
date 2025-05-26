<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        $productos = [
            [
                'nombre' => 'Paracetamol 500mg',
                'marca' => 'Genfar',
                'precio' => 10.50,
                'imagen' => 'paracetamol.jpg',
                'descripcion' => 'Analgésico y antipirético para tratar dolores leves y fiebre.',
                'stock' => 50,
                'categoria' => 'Analgésico',
            ],
            [
                'nombre' => 'Ibuprofeno 400mg',
                'marca' => 'Bayer',
                'precio' => 12.00,
                'imagen' => 'ibuprofeno.jpg',
                'descripcion' => 'Antiinflamatorio no esteroideo para dolor muscular y fiebre.',
                'stock' => 30,
                'categoria' => 'Antiinflamatorio',
            ],
            [
                'nombre' => 'Amoxicilina 500mg',
                'marca' => 'Bagó',
                'precio' => 22.00,
                'imagen' => 'amoxicilina.jpg',
                'descripcion' => 'Antibiótico para infecciones respiratorias y urinarias.',
                'stock' => 25,
                'categoria' => 'Antibiótico',
            ],
            [
                'nombre' => 'Loratadina 10mg',
                'marca' => 'Genfar',
                'precio' => 8.50,
                'imagen' => 'loratadina.jpg',
                'descripcion' => 'Antihistamínico para aliviar síntomas de alergias.',
                'stock' => 40,
                'categoria' => 'Antialérgico',
            ],
            [
                'nombre' => 'Vitamina C 1000mg',
                'marca' => 'Redoxon',
                'precio' => 18.00,
                'imagen' => 'vitamina_c.jpg',
                'descripcion' => 'Refuerza el sistema inmune y previene resfriados.',
                'stock' => 35,
                'categoria' => 'Suplemento',
            ],
            [
                'nombre' => 'Omeprazol 20mg',
                'marca' => 'MK',
                'precio' => 14.75,
                'imagen' => 'omeprazol.jpg',
                'descripcion' => 'Protector gástrico para acidez y gastritis.',
                'stock' => 60,
                'categoria' => 'Gastrointestinal',
            ],
            [
                'nombre' => 'Salbutamol Inhalador',
                'marca' => 'Sandoz',
                'precio' => 35.00,
                'imagen' => 'salbutamol.jpg',
                'descripcion' => 'Broncodilatador de acción rápida para crisis respiratorias.',
                'stock' => 20,
                'categoria' => 'Respiratorio',
            ],
            [
                'nombre' => 'Diclofenaco Sódico 50mg',
                'marca' => 'Bagó',
                'precio' => 9.00,
                'imagen' => 'diclofenaco.jpg',
                'descripcion' => 'Antiinflamatorio para dolores musculares y articulares.',
                'stock' => 50,
                'categoria' => 'Antiinflamatorio',
            ],
            [
                'nombre' => 'Suero Oral',
                'marca' => 'Pedialyte',
                'precio' => 6.00,
                'imagen' => 'suero.jpg',
                'descripcion' => 'Solución rehidratante con electrolitos para diarreas.',
                'stock' => 15,
                'categoria' => 'Rehidratante',
            ],
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
