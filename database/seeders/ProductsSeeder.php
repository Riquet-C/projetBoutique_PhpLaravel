<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Kong',
                'price' => 1000,
                'pictureUrl' => '/image/kong.jpg',
                'descProducts' => Str::random(20), // Utilisation de Str::random pour générer une description aléatoire (peut être remplacée par du Lorem Ipsum)
                'weight' => 100,
                'discount' => 10,
                'categoryId' => 1,
                'available' => 4,
            ],
            [
                'name' => 'Corne',
                'price' => 100,
                'pictureUrl' => '/image/corne.jpg',
                'descProducts' => Str::random(20),
                'weight' => 200,
                'discount' => 20,
                'categoryId' => 2,
                'available' => 4,
            ],
            [
                'name' => 'Corde',
                'price' => 1000,
                'pictureUrl' => '/image/corde.jpg',
                'descProducts' => Str::random(20),
                'weight' => 500,
                'discount' => NULL,
                'categoryId' => 3,
                'available' => 4,
            ],
            [
                'name' => 'Peluche',
                'price' => 1400,
                'pictureUrl' => '/image/peluche.jpg',
                'descProducts' => Str::random(20), // Utilisation de Str::random pour générer une description aléatoire (peut être remplacée par du Lorem Ipsum)
                'weight' => 150,
                'discount' => 5,
                'categoryId' => 1,
                'available' => 4,
            ],
            [
                'name' => 'Balle',
                'price' => 5300,
                'pictureUrl' => '/image/balle.jpg',
                'descProducts' => Str::random(20),
                'weight' => 400,
                'discount' => 25,
                'categoryId' => 2,
                'available' => 4,
            ],
            [
                'name' => 'Pouet',
                'price' => 5000,
                'pictureUrl' => '/image/pouet.jpg',
                'descProducts' => Str::random(20),
                'weight' => 350,
                'discount' => NULL,
                'categoryId' => 3,
                'available' => 4,
            ],
        ]);
    }
}
