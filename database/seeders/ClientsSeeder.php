<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'h4' => 'Productos de',
            'span' => 'tesorería',
            'h4_2'=> 'en los que hemos participado y cerrado',
        ]);
        DB::table('clients')->insert([
            'h4' => 'Productos de',
            'span' => 'tesorería',
            'h4_2'=> 'en los que hemos valuado y cerrado',
        ]);
        DB::table('clients')->insert([
            'h4' => 'Banca de',
            'span' => 'inversión',
            'h4_2'=> 'en los que hemos estructurado y vendido',
        ]);
        DB::table('clients')->insert([
            'h4' => 'Asesor',
            'span' => 'financiero',
            'h4_2'=> 'líder en la infraestructura de financiamientos bursátiles',
        ]);
    }
}
