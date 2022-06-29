<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'title' => 'EN BROAD',
            'subtitle' => 'Tenemos un amplio conocimiento de los elementos fiscales, regulatorios y de mercados, así como estrechas relaciones con autoridades y ejecutivos clave dentro de los diversos participantes en el mercado de valores.',
            'banner'=> 'Images/example10.jfif'
        ]);

        DB::table('banners')->insert([
            'title' => 'Los profesionistas',
            'subtitle' => 'De BROAD tenemos una amplia y reconocida experiencia evaluando, estructurando, desarrollando e implementando productos financieros innovadores que cumplen con los requerimientos de inversión de nuestros clientes.',
            'banner'=> 'Images/example8.jpg'
        ]);

        DB::table('banners')->insert([
            'title' => 'Ya sea como',
            'subtitle' => 'BROAD o en lo individual, nuestro equipo ha participado en la estructuración de por lo menos 40 transacciones de banca de inversión y poco más de 100 en las que se han diseñado diversos productos de tesorería, también conocidos como estrategias de cobertura con derivados.',
            'banner'=> 'Images/example3.jpg'
        ]);
    }
}
