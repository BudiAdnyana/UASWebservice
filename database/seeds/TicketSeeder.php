<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeding data
        DB::table('tickets')->insert([
            [
            "kelas"          => "Bisnis",
            "sub_kelas"      => "C",
            "harga"          => 6675000,
            "berlaku"        => "3 Bulan",
            "desc"           => "Layanan:\r\nKursi berbaring\r\nWi-Fi\r
                                         \nKonektor daya & USB di kursi\r
                                         \nVideo sesuai permintaan\r
                                         \nEstimasi emisi karbon: 254 kg",
            ],
            [
            "kelas"          => "Ekonomi",
            "sub_kelas"      => "Y",
            "harga"          => 558000,
            "berlaku"        => "3 Bulan",
            "desc"           => "Layanan:\r\nRuang kaki rata-rata (79 cm)\r
                                         \nStreaming media ke perangkat Anda\r
                                         \nEstimasi emisi karbon: 128 kg"
            ]
        ]);
    }
}
