<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gejala;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gejalas = [
            ['kode_gejala' => 'GJ01', 'jenis_gejala' => 'Nafsu Makan Menurun'],
            ['kode_gejala' => 'GJ02', 'jenis_gejala' => 'Demam Tinggi'],
            ['kode_gejala' => 'GJ03', 'jenis_gejala' => 'Diare'],
            ['kode_gejala' => 'GJ04', 'jenis_gejala' => 'Sulit Bernafas'],
            ['kode_gejala' => 'GJ05', 'jenis_gejala' => 'Sapi Kurus (Penurunan Berat Badan)'],
            ['kode_gejala' => 'GJ06', 'jenis_gejala' => 'Sapi Terlihat Depresi'],
            ['kode_gejala' => 'GJ07', 'jenis_gejala' => 'Selaput Mata Menjadi Bengkak'],
            ['kode_gejala' => 'GJ08', 'jenis_gejala' => 'Air Liur Berlebihan'],
            ['kode_gejala' => 'GJ09', 'jenis_gejala' => 'Kejang-Kejang'],
            ['kode_gejala' => 'GJ10', 'jenis_gejala' => 'Keluar Darah dari Mulut'],
            ['kode_gejala' => 'GJ11', 'jenis_gejala' => 'Pernafasan Cepat dan Pendek'],
            ['kode_gejala' => 'GJ12', 'jenis_gejala' => 'Gerakan Sapi Sempoyongan, Berputar-Putar dan Mubeng'],
            ['kode_gejala' => 'GJ13', 'jenis_gejala' => 'Lemas dan Lesu'],
            ['kode_gejala' => 'GJ14', 'jenis_gejala' => 'Bulu Kasar, Kusam, Kaku dan Berdiri'],
            ['kode_gejala' => 'GJ15', 'jenis_gejala' => 'Terjadi Luka pada Selaput Mata'],
            ['kode_gejala' => 'GJ16', 'jenis_gejala' => 'Keluar Air Mata Terus Menerus'],
            ['kode_gejala' => 'GJ17', 'jenis_gejala' => 'Pinggang Sedikit Membungkuk'],
            ['kode_gejala' => 'GJ18', 'jenis_gejala' => 'Ngorok'],
            ['kode_gejala' => 'GJ19', 'jenis_gejala' => 'Hidung Mengeluarkan Cairan'],
            ['kode_gejala' => 'GJ20', 'jenis_gejala' => 'Perut Kiri Membesar Sebelah'],
            ['kode_gejala' => 'GJ21', 'jenis_gejala' => 'Selaput Bening Mata Kornea Menjadi Keruh'],
            ['kode_gejala' => 'GJ22', 'jenis_gejala' => 'Selaput Lendir Menguning'],
            ['kode_gejala' => 'GJ23', 'jenis_gejala' => 'Bulu Rontok'],
            ['kode_gejala' => 'GJ24', 'jenis_gejala' => 'Gerakan Kaki Pincang'],
            ['kode_gejala' => 'GJ25', 'jenis_gejala' => 'Bagian Pergelangan Kaki Berdekatan Kuku Bengkak'],
            ['kode_gejala' => 'GJ26', 'jenis_gejala' => 'Selaput Kuku Mengelupas'],
            ['kode_gejala' => 'GJ27', 'jenis_gejala' => 'Kuku Keluar Cairan Kuning dan Membusuk'],
            ['kode_gejala' => 'GJ28', 'jenis_gejala' => 'Gerakan Sempoyongan dan Kurang Lincah'],
            ['kode_gejala' => 'GJ29', 'jenis_gejala' => 'Batuk Kronis'],
            ['kode_gejala' => 'GJ30', 'jenis_gejala' => 'Kelenjar Susu Membengkak'],
            ['kode_gejala' => 'GJ31', 'jenis_gejala' => 'Air Kencing Berwarna Merah'],
            ['kode_gejala' => 'GJ32', 'jenis_gejala' => 'Diare Bercampur Darah']
        ];

        foreach ($gejalas as $gejala) {
            Gejala::create($gejala);
        }
    }
}
