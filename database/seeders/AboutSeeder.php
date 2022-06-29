<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'h4' => 'BRO',
            'span' => 'AD',
            'p1' => 'Es una firma de asesoría financiera y legal a empresas, inversionistas institucionales, fondos y financial sponsors, en estructuración de financiamiento, IPOs, procesos de M&A, valuaciones y reestructuras y estrategias de optimización, valuación y cobertura de riesgos de tipo de cambio y tasa de interés con productos derivados.',
            'p2' => 'Nuestra especialidad se centra en la estructuración de productos financieros que atiendan a las necesidades de fondeo y cobertura de las empresas.',
        ]);
    }
}
