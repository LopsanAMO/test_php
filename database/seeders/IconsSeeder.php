<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            'icon' => 'lni-investment'
        ]);
        DB::table('icons')->insert([
            'icon' => 'lni-stats-up'
        ]);
        DB::table('icons')->insert([
            'icon' => 'lni-handshake'
        ]);
        DB::table('icons')->insert([
            'icon' => 'lni-invest-monitor'
        ]);
    }
}
