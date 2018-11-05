<?php

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
        $this->call([
            NewsTableSeeder::class,
            EventsTableSeeder::class,
            AppointmentsTableSeeder::class,
            ManagerTableSeeder::class,
            ImagesTableSeeder::class
        ]);
    }
}
