<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeding data
        DB::table('users')->insert([
            'name' => "budi",
            'email' => "idabagusbudia@gmail.com",
            'password' => bcrypt('budi'),
        ]);
    }
}
