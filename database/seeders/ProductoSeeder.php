<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            ['titulo'=> 'Camiseta',
            'foto' => 'img/Tienda/camiseta1.jpg',
            'descripcion' => 'Camiseta de Algodón 100% Blanca',
            'precio' => 9.99
            ],

            ['titulo'=> 'Camiseta',
            'foto' => 'img/Tienda/camiseta2.jpg',
            'descripcion' => 'Camiseta de Algodón 100% Negra',
            'precio' => 9.99        ],

            ['titulo'=> 'Pantalón',
            'foto' => 'img/Tienda/pantalon2.jpg',
            'descripcion' => 'Mon Jeans',
            'precio' => 29.99
            ],

            ['titulo'=> 'Gorro',
            'foto' => 'img/Tienda/gorro1.jpg',
            'descripcion' => 'Gorro de Lana Verde',
            'precio' => 5.99
            ],

            ['titulo'=> 'Gorro',
            'foto' => 'img/Tienda/gorro2.jpg',
            'descripcion' => 'Gorro de Lana Rojo',
            'precio' => 5.99
            ],

            ['titulo'=> 'Gorro',
            'foto' => 'img/Tienda/gorro3.jpg',
            'descripcion' => 'Gorro de Lana Negro',
            'precio' => 5.99
            ],

            ['titulo'=> 'Forrito',
            'foto' => 'img/Tienda/forrito1.jpg',
            'descripcion' => 'Forrito de lana',
            'precio' => 25.99
            ],

            ['titulo'=> 'Forrito',
            'foto' => 'img/Tienda/forrito3.jpg',
            'descripcion' => 'Forrito de lana',
            'precio' => 25.99
            ],

        ]);
    }
}
