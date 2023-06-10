<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publicacions')->insert([
            ['titulo'=> 'Kendall',
            'descripcion' => 'Milan Runaway',
            'foto' => 'img/publicaciones/kendall1.jpg',

            ],

            ['titulo'=> 'Kendall',
            'descripcion' => 'NY Street',
            'foto' => 'img/publicaciones/kendall2.jpg',

            ],

            ['titulo'=> 'Bella',
            'descripcion' => 'Fashion Week',
            'foto' => 'img/publicaciones/bella1.jpg',

            ],

            ['titulo'=> 'Bella',
            'descripcion' => 'NY Street',
            'foto' => 'img/publicaciones/bella2.jpg',

            ],

            ['titulo'=> 'Gigi',
            'descripcion' => 'Paris Runaway',
            'foto' => 'img/publicaciones/gigi1.jpg',

            ],

            ['titulo'=> 'Rosalía',
            'descripcion' => 'Music Awards',
            'foto' => 'img/publicaciones/rosalia1.jpg',

            ],

            ['titulo'=> 'Dua Lipa',
            'descripcion' => 'London Street',
            'foto' => 'img/publicaciones/dualipa1.jpg',
            
            ],

            ['titulo'=> 'Dua Lipa',
            'descripcion' => 'Music Awards',
            'foto' => 'img/publicaciones/dualipa2.jpg',
            
            ],

        ]);
    }
}
