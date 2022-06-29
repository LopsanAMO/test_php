<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'image'=> 'Images/bimbo.png',
            'client_id' => '1',
            'name' => 'Grupo BIMBO',
            'text' => 'Cross Currency Swap',
            'year' => '10 años',
            'money' => 'USD $40 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/mexichem.png',
            'client_id' => '1',
            'name' => 'Mexichem',
            'text' => 'Coupon Only Swap',
            'year' => '7 años',
            'money' => 'EUR/USD $70 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/alsea.png',
            'client_id' => '1',
            'name' => 'Alsea',
            'text' => 'FX Options Knock Out Forward',
            'year' => '1 año',
            'money' => 'USD $35 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/palacio_de_hierro.png',
            'client_id' => '1',
            'name' => 'Palacio de Hierro',
            'text' => 'Interest Rate Swap',
            'year' => '5 años',
            'money' => 'MXN $2,500 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/gerdau.png',
            'client_id' => '1',
            'name' => 'Gerdau',
            'text' => 'Interest Rate Swap',
            'year' => '7 años',
            'money' => 'MXN $5,000 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/jugos_del_valle.png',
            'client_id' => '1',
            'name' => 'Jugos del Valle',
            'text' => 'Interest Rate Swap',
            'year' => '5 años',
            'money' => 'MXN $1,000 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/tmm.png',
            'client_id' => '1',
            'name' => 'Grupo TMM',
            'text' => 'Interest Rate Cap',
            'year' => '3 años',
            'money' => 'USD $10,500 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/tv_azteca.png',
            'client_id' => '1',
            'name' => 'TV Azteca',
            'text' => 'Coupon Only Swap',
            'year' => '7 años',
            'money' => 'USD/MXN $400 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/bachoco.png',
            'client_id' => '2',
            'name' => 'Bachoco',
            'text' => 'Cross Currency Swap',
            'year' => '10 años',
            'money' => 'USD $30 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/fibra_hd.png',
            'client_id' => '2',
            'name' => 'Fibra HD',
            'text' => 'CCS UDI-TIIE',
            'year' => '3 años',
            'money' => 'MXN $600 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/financiera_atlas.png',
            'client_id' => '2',
            'name' => 'Financiera Atlas',
            'text' => 'Análisis y valuación de su portafolio de derivados',
            'year' => '',
            'money' => '',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/la_vasconia.png',
            'client_id' => '2',
            'name' => 'Grupo Vasconia',
            'text' => 'Análisis y valuación de su portafolio de derivados',
            'year' => '',
            'money' => '',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/elementia.png',
            'client_id' => '2',
            'name' => 'Elementia',
            'text' => 'Cross Currency Swap',
            'year' => '7 años',
            'money' => 'USD $200 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/idesa.png',
            'client_id' => '2',
            'name' => 'IDESA',
            'text' => 'Análisis y valuación de su portafolio de derivados',
            'year' => '',
            'money' => '',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/totalplay.png',
            'client_id' => '2',
            'name' => 'Totalplay',
            'text' => 'KO Fwd + Call OTM',
            'year' => '1.5 años',
            'money' => 'USD $24 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/fibra_hd.png',
            'client_id' => '2',
            'name' => 'Fibra HD',
            'text' => 'FX Par Forward ',
            'year' => '1 año',
            'money' => 'USD $20 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/grupo_iamsa.png',
            'client_id' => '3',
            'name' => 'Grupo IAMSA, S.A. de C.V',
            'text' => 'Financiamiento Bursátil',
            'year' => '',
            'money' => 'MXN $3,500 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/cas.png',
            'client_id' => '3',
            'name' => 'Concesionaria deAutopistas del Sureste, S.A. de C.V',
            'text' => 'Financiamiento Bursátil',
            'year' => '',
            'money' => 'MXN $3,500 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/canal_5.png',
            'client_id' => '3',
            'name' => 'Corporación Tapatía de Televisión, S.A. de C.V',
            'text' => 'Financiamiento Bursátil',
            'year' => '',
            'money' => 'MXN $700 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/tmm.png',
            'client_id' => '3',
            'name' => 'TMM División Marítima, S.A. de C.V.',
            'text' => 'Financiamiento Bursátil',
            'year' => '',
            'money' => 'MXN $10,500 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/promotora_fresnillo.png',
            'client_id' => '3',
            'name' => 'Promotora Fresnillo - Zacatecas',
            'text' => 'Financiamiento Bursátil',
            'year' => '',
            'money' => 'MXN $1,850 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/grupo_herradura_occidente.png',
            'client_id' => '3',
            'name' => 'Grupo Herradura Occidente',
            'text' => 'Financiamiento Bursátil',
            'year' => '',
            'money' => 'MXN $3,000 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/tuca.png',
            'client_id' => '3',
            'name' => 'Túneles Concesionados de Acapulco',
            'text' => 'Estructuración de un Financiamiento',
            'year' => '',
            'money' => 'MXN $1,250 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/tv_azteca.png',
            'client_id' => '3',
            'name' => 'Televisión Azteca',
            'text' => 'Estructuración de un Financiamiento',
            'year' => '',
            'money' => 'MXN $5,000 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/pinfra.png',
            'client_id' => '4',
            'name' => 'Concesionaria Pac, S.A de C.V.',
            'text' => 'Financiamiento Bursátil',
            'year' => '',
            'money' => 'MXN $1,850 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/dinero_express.svg',
            'client_id' => '4',
            'name' => 'Dinero Express',
            'text' => 'Financiamiento Bursátil',
            'year' => '',
            'money' => 'MXN $6,000 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/instituto_de_control_vehicular.png',
            'client_id' => '4',
            'name' => 'Instituto de Control Vehicular',
            'text' => 'Financiamiento Bursátil',
            'year' => '',
            'money' => 'MXN $6,000 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/fonacot.png',
            'client_id' => '4',
            'name' => 'INFONACOT',
            'text' => 'Financiamiento Bursátil',
            'year' => '',
            'money' => 'MXN $4,000 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/docsolutions.png',
            'client_id' => '4',
            'name' => 'Doc Solutions',
            'text' => 'Crédito Mezzanine',
            'year' => '',
            'money' => 'MXN $150 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/grupo_jap.png',
            'client_id' => '4',
            'name' => 'Grupo JAP',
            'text' => 'Financiamiento Bancario',
            'year' => '',
            'money' => 'MXN $100 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/ssl_digital.png',
            'client_id' => '4',
            'name' => 'SSL Digital',
            'text' => 'Crédito Mezzanine',
            'year' => '',
            'money' => 'MXN $400 millones',
        ]);
        DB::table('images')->insert([
            'image'=> 'Images/orsan.png',
            'client_id' => '4',
            'name' => 'ORSAN',
            'text' => 'M&A',
            'year' => '',
            'money' => 'MXN $320 millones',
        ]);
    }
}
