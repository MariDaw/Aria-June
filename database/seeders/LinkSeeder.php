<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->insert([
            ['publicacion_id'=> 1,
            'prenda' => 'Sudadera',
            'url' => 'https://www.zara.com/es/es/sudadera-texto-p01131891.html?v1=221841986'
            ],

            ['publicacion_id'=> 1,
            'prenda' => 'Chaqueta',
            'url' => 'https://www.pullandbear.com/es/chaqueta-acolchada-efecto-piel-l08715325?cS=737'
            ],

            ['publicacion_id'=> 1,
            'prenda' => 'Pantalón',
            'url' => 'https://www.zara.com/es/es/jeans-z1975-high-rise-mini-flare-p07147225.html?v1=195578120'
            ],

            ['publicacion_id'=> 2,
            'prenda' => 'Camiseta',
            'url' => 'https://www.pullandbear.com/es/camiseta-capri-ilustracion-l08245364?cS=250'
            ],

            ['publicacion_id'=> 2,
            'prenda' => 'Bolso',
            'url' => 'https://www.pullandbear.com/es/bandolera-cebra-brillos-l14136040?cS=092'
            ],

            ['publicacion_id'=> 2,
            'prenda' => 'Pantalón',
            'url' => 'https://www.zara.com/es/es/pantalon-cargo-efecto-piel-p04432524.html?v1=222370838'
            ],

            ['publicacion_id'=> 2,
            'prenda' => 'Botas',
            'url' => 'https://www.zara.com/es/es/botin-tacon-alto-tejido-p12115010.html?v1=190251350'
            ],

            ['publicacion_id'=> 3,
            'prenda' => 'Camiseta',
            'url' => 'https://www.pullandbear.com/es/jersey-punto-cuello-alto-l04556303?cS=779'
            ],

            ['publicacion_id'=> 3,
            'prenda' => 'Gabardina',
            'url' => 'https://www.pullandbear.com/es/gabardina-efecto-piel-l08750325?cS=800'
            ],

            ['publicacion_id'=> 3,
            'prenda' => 'Gafas',
            'url' => 'https://www.pullandbear.com/es/gafas-sol-efecto-carey-l08999306?cS=700'
            ],

            ['publicacion_id'=> 4,
            'prenda' => 'Camiseta',
            'url' => 'https://www.pullandbear.com/es/tank-top-blanco-l04230338?cS=250'
            ],

            ['publicacion_id'=> 4,
            'prenda' => 'Pantalón',
            'url' => 'https://www.pullandbear.com/es/pantalon-de-vestir-raya-diplomatica-l08674332?cS=400'
            ],

            ['publicacion_id'=> 4,
            'prenda' => 'Riñonera',
            'url' => 'https://www.pullandbear.com/es/rinonera-efecto-charol-l14009140?cS=040&pelement=549428043'
            ],

            ['publicacion_id'=> 5,
            'prenda' => 'Chaqueta',
            'url' => 'https://www.pullandbear.com/es/chaqueta-corta-l04714333?cS=800'
            ],

            ['publicacion_id'=> 5,
            'prenda' => 'Pantalón',
            'url' => 'https://www.pullandbear.com/es/pantalon-de-vestir-loose-fit-l08677355?cS=800'
            ],

            ['publicacion_id'=> 5,
            'prenda' => 'Bolso',
            'url' => 'https://www.zara.com/es/es/bolso-mini-flores-p16078010.html?v1=201646540'
            ],

            ['publicacion_id'=> 6,
            'prenda' => 'Sudadera',
            'url' => 'https://www.pullandbear.com/es/sudadera-oversize-con-capucha-l08591385?cS=800'
            ],

            ['publicacion_id'=> 6,
            'prenda' => 'Chaqueta',
            'url' => 'https://www.pullandbear.com/es/gabardina-efecto-piel-l08750325?cS=800'
            ],

            ['publicacion_id'=> 6,
            'prenda' => 'Pantalón',
            'url' => 'https://www.pullandbear.com/es/pantalon-racing-efecto-piel-paneles-l08674393?cS=065'
            ],

            ['publicacion_id'=> 6,
            'prenda' => 'Gafas',
            'url' => 'https://www.pullandbear.com/es/gafas-sol-ciclista-negras-l08998311?cS=800'
            ],

            ['publicacion_id'=> 6,
            'prenda' => 'Casco',
            'url' => 'https://rosalia.tmstor.es/product/90520'
            ],

            ['publicacion_id'=> 7,
            'prenda' => 'Sudadera',
            'url' => 'https://www.pullandbear.com/es/sudadera-oversize-capucha-l08590318?cS=803'
            ],

            ['publicacion_id'=> 7,
            'prenda' => 'Chaqueta',
            'url' => 'https://www.pullandbear.com/es/sobrecamisa-cuadros-borreguillo-l08715349?cS=712'
            ],

            ['publicacion_id'=> 7,
            'prenda' => 'Top Deportivo',
            'url' => 'https://www.nike.com/es/t/swoosh-sujetador-deportivo-de-sujecion-media-sin-almohadilla-3fcmZz/BV3900-010'
            ],

            ['publicacion_id'=> 7,
            'prenda' => 'Pantalón',
            'url' => 'https://www.pullandbear.com/es/jogger-varsity-fleece-l04678316?cS=800'
            ],

            ['publicacion_id'=> 7,
            'prenda' => 'Deportes',
            'url' => 'https://www.nike.com/es/t/air-force-1-mid-react-zapatillas-QfKZ1m/DQ7668-100'
            ],

            ['publicacion_id'=> 8,
            'prenda' => 'Camiseta',
            'url' => 'https://www.pullandbear.com/es/crop-top-manga-larga-stretch-l04230420?cS=800'
            ],

            ['publicacion_id'=> 8,
            'prenda' => 'Chaqueta',
            'url' => 'https://www.pullandbear.com/es/sobrecamisa-larga-acolchada-l08715335?cS=940'
            ],

            ['publicacion_id'=> 8,
            'prenda' => 'Pantalón',
            'url' => 'https://www.pullandbear.com/es/pantalon-jogger-basico-gomas-l08676319?cS=800'
            ],

            ['publicacion_id'=> 8,
            'prenda' => 'Deportes',
            'url' => 'https://www.nike.com/es/t/air-max-plus-zapatillas-SzVGZR/604133-050'
            ],

        ]);
    }
}
