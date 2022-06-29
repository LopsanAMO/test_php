<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'h4' => 'PRODUCTOS DE',
            'span' => 'TESORERÍA',
            'service1' => 'Análisis y valuación de cualquier estrategia de cobertura propuesta',
            'service2' => 'Obtención del “costo flat” de cualquier producto de tesorería',
            'service3' => 'Recomendación de la mejor estrategia de optimización y cobertura para cualquier activo subyacente, siempre tomando en cuenta las necesidades del cliente',
            'service4' => 'Determinación del Credit Value Adjustment (“CVA”) y Return on Assets (“RAR”), para cualquier estrategia de cobertura',
            'service5' => 'Obtención de líneas de financiamiento para operar derivados con cualquier institución financiera establecida en México',
        ]);
        DB::table('services')->insert([
            'h4' => 'BANCA DE',
            'span' => 'INVERSIÓN M&A',
            'service1' => 'Análisis de las alternativas de financiamiento público, privado, bancario, bursátil, mezzanine o capital',
            'service2' => 'Diseño, estructuración, calificación, implementación, autorización y fondeo del financiamiento específico',
            'service3' => 'Calificación de financiamientos aplica fundamentalmente para financiamientos púbicos vía el mercado de valores',
            'service4' => 'Obtención de aprobaciones por parte de los reguladores',
            'service5' => 'Obtención de las aprobaciones necesarias por parte de los comités de crédito y/o riesgos por parte de los inversionistas para un exitoso fondeo de los financiamientos',
        ]);
    }
}
