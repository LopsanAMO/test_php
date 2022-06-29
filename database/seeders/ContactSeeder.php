<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'h4' => 'ENCUENTRANOS EN',
            'corporate' => 'Corporativo Azul Mazaryk',
            'address' => 'Av. Pdte. Masaryk 61-901B, Polanco, Polanco V Secc, Miguel Hidalgo, 11560 Ciudad de México, CDMX',
            'phone1' => '(55) 5244 5855',
            'phone2' => '',
            'email' => 'contacto@broad.mx',
        ]);
    }
}
