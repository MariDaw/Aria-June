<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamosoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('famosos')->insert([
            ['nombre'=> 'Kendall',
            ],

            ['nombre'=> 'Bella',
            ],

            ['nombre'=> 'Gigi',
            ],

            ['nombre'=> 'Rosalía',
            ],

            ['nombre'=> 'Dua Lipa',
            ],
            

        ]);
    }
}
