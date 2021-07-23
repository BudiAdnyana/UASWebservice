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
        //memanggil seeder
        $this->call([
        AirlineSeeder::class,
        TicketSeeder::class,
        UserSeeder::class
        ]);
         
    }
}
