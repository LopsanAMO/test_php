<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
        $this->call([BannersTableSeeder::class]);
        $this->call([AboutSeeder::class]);
        $this->call([ServicesSeeder::class]);
        $this->call([IconsSeeder::class]);
        $this->call([AdvisorySeeder::class]);
        $this->call([ContactSeeder::class]);
        $this->call([ClientsSeeder::class]);
        $this->call([ImagesSeeder::class]);
    }
}
