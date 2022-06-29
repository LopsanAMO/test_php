<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ricardo Monroy',
            'email' => 'rmonroy.rodriguez@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Tooring@2021'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Corporativo Tooring',
            'email' => 'corporativo@tooring.com.mx',
            'email_verified_at' => now(),
            'password' => Hash::make('Tooring@2021'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
