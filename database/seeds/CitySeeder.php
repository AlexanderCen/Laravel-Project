<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'gambar' => 'gambar/'
        DB::table('kotas')->insert([
            ['kota' => 'Jakarta Barat', 'gambar' => 'gambar/jktbarat.jpg'],
            ['kota' => 'Jakarta Timur', 'gambar' => 'gambar/jkttimur.jpg'],
            ['kota' => 'Jakarta Utara', 'gambar' => 'gambar/jktutara.jpg'],
            ['kota' => 'Jakarta Selatan', 'gambar' => 'gambar/jktselatan.jpg'],
            ['kota' => 'Jakarta Pusat', 'gambar' => 'gambar/jktpusat.png'],
            ['kota' => 'Bogor', 'gambar' => 'gambar/bogor.png'],
            ['kota' => 'Depok', 'gambar' => 'gambar/depok.jpg'],
            ['kota' => 'Tangerang', 'gambar' => 'gambar/tangerang.png'],
            ['kota' => 'Bekasi', 'gambar' => 'gambar/bekasi.png'],
        ]);
            // ['provinsi' => "Riau"],
            // ['provinsi' => "Aceh"],
            // ['provinsi' => "Bali"],
            // ['provinsi' => "Banten"],
            // ['provinsi' => "Bengkulu"],
            // ['provinsi' => "Gorontalo"],
            // ['provinsi' => "Jambi"],
            // ['provinsi' => "Jawa Barat"],
            // ['provinsi' => "Jawa Tengah"],
            // ['provinsi' => "Jawa Timur"],
            // ['provinsi' => "Kalimantan Barat"],
            // ['provinsi' => "Kalimantan Selatan"],
            // ['provinsi' => "Kalimantan Tengah"],
            // ['provinsi' => "Kalimantan Timur"],
            // ['provinsi' => "Kalimantan Utara"],
            // ['provinsi' => "Kepulauan Bangka Belitung"],
            // ['provinsi' => "Kepulauan Riau"],
            // ['provinsi' => "DKI Jakarta"],
            // ['provinsi' => "Lampung"],
            // ['provinsi' => "Maluku"],
            // ['provinsi' => "Maluku Utara"],
            // ['provinsi' => "Nusa Tenggara Barat"],
            // ['provinsi' => "Nusa Tenggara Timur"],
            // ['provinsi' => "Papua"],
            // ['provinsi' => "Papua Barat"],
            // ['provinsi' => "Sulawesi Barat"],
            // ['provinsi' => "Sulawesi Selatan"],
            // ['provinsi' => "Sulawesi Tengah"],
            // ['provinsi' => "Sulawesi Tenggara"],
            // ['provinsi' => "Sulawesi Utara"],
            // ['provinsi' => "Sumatera Barat"],
            // ['provinsi' => "Sumatera Selatan"],
            // ['provinsi' => "Sumatera Utara"],
            // ['provinsi' => "Yogyakarta"],
    }
}
