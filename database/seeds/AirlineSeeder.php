<?php

use Illuminate\Database\Seeder;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeding data
        DB::table('airlines')->insert([
            [
            "nama"          => "Garuda Indonesia",
            "alamat"        => "Jl. Kebon Sirih No. 44, Jakarta 10110, Indonesia",
            "no_tlpn"       => 804180780,
            "e-mail"        => "customer@garuda-indonesia.com",
            "ticket_id"     => 1,
            ],
            [
            "nama"          => "Lion Air",
            "alamat"        => "Jl. Gajahmada No.7 Jakarta Pusat 10130",
            "no_tlpn"       => 804180780,
            "e-mail"        => "216379800",
            "ticket_id"     => 1,
            ]
        ]);
    }
}
