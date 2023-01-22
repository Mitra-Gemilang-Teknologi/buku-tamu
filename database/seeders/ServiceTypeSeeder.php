<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceType::create([
            'service_name' => 'Kelautan & Perikanan'
        ]);

        ServiceType::create([
            'service_name' => 'Lingkungan Hidup'
        ]);

        ServiceType::create([
            'service_name' => 'Energi dan Sumber Daya Mineral'
        ]);

        ServiceType::create([
            'service_name' => 'Tenaga Kerja'
        ]);

        ServiceType::create([
            'service_name' => 'Pendidikan'
        ]);

        ServiceType::create([
            'service_name' => 'Kesehatan'
        ]);

        ServiceType::create([
            'service_name' => 'Perhubungan'
        ]);

        ServiceType::create([
            'service_name' => 'Perdagangan'
        ]);

        ServiceType::create([
            'service_name' => 'Kehutanan'
        ]);

        ServiceType::create([
            'service_name' => 'Sosial'
        ]);

        ServiceType::create([
            'service_name' => 'Pertanian'
        ]);

        ServiceType::create([
            'service_name' => 'Pekerjaan Umum dan Penataan Ruang'
        ]);
    }
}
