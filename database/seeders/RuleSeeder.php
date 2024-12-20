<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rule;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rule::truncate();

        $rules = [
            ['kode_rule' => 'R01', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'GJ08', 'GJ11', 'GJ13', 'GJ18', 'GJ19']), 'penyakit_id' => 1], // Rule 1
            ['kode_rule' => 'R02', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'GJ08', 'GJ11', 'GJ13', 'GJ18']), 'penyakit_id' => 1], // Rule 2
            ['kode_rule' => 'R03', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'G08', 'GJ11', 'GJ13']), 'penyakit_id' => 1], // Rule 3
            ['kode_rule' => 'R04', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'GJ08', 'GJ11']), 'penyakit_id' => 1], // Rule 4
            ['kode_rule' => 'R05', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'GJ08']), 'penyakit_id' => 1], // Rule 5
            ['kode_rule' => 'R06', 'kode_gejala' => json_encode(['GJ01', 'GJ02']), 'penyakit_id' => 1], // Rule 6
            ['kode_rule' => 'R07', 'kode_gejala' => json_encode(['GJ01', 'GJ03', 'GJ05', 'GJ11', 'GJ14', 'GJ17', 'GJ20']), 'penyakit_id' => 2], // Rule 7
            ['kode_rule' => 'R08', 'kode_gejala' => json_encode(['GJ01', 'GJ03', 'GJ05', 'GJ11', 'GJ14', 'GJ17']), 'penyakit_id' => 2], // Rule 8
            ['kode_rule' => 'R09', 'kode_gejala' => json_encode(['GJ01', 'GJ03', 'GJ05', 'GJ11', 'GJ14']), 'penyakit_id' => 2], // Rule 9
            ['kode_rule' => 'R10', 'kode_gejala' => json_encode(['GJ01', 'GJ03', 'GJ05', 'GJ11']), 'penyakit_id' => 2], // Rule 10
            ['kode_rule' => 'R11', 'kode_gejala' => json_encode(['GJ01', 'GJ03', 'GJ05']), 'penyakit_id' => 2], // Rule 11
            ['kode_rule' => 'R12', 'kode_gejala' => json_encode(['GJ01', 'GJ03']), 'penyakit_id' => 2], // Rule 12
            ['kode_rule' => 'R13', 'kode_gejala' => json_encode(['GJ07', 'GJ15', 'GJ16', 'GJ21']), 'penyakit_id' => 4], // Rule 13
            ['kode_rule' => 'R14', 'kode_gejala' => json_encode(['GJ07', 'GJ15', 'GJ16']), 'penyakit_id' => 4], // Rule 14
            ['kode_rule' => 'R15', 'kode_gejala' => json_encode(['GJ07', 'GJ15']), 'penyakit_id' => 4], // Rule 15
            ['kode_rule' => 'R16', 'kode_gejala' => json_encode(['GJ24', 'GJ25', 'GJ26', 'GJ27']), 'penyakit_id' => 5], // Rule 16
            ['kode_rule' => 'R17', 'kode_gejala' => json_encode(['GJ24', 'GJ25', 'GJ26']), 'penyakit_id' => 5], // Rule 17
            ['kode_rule' => 'R18', 'kode_gejala' => json_encode(['GJ24', 'GJ25']), 'penyakit_id' => 5], // Rule 18
            ['kode_rule' => 'R19', 'kode_gejala' => json_encode(['GJ04', 'GJ20', 'GJ28']), 'penyakit_id' => 6], // Rule 19
            ['kode_rule' => 'R20', 'kode_gejala' => json_encode(['GJ04', 'GJ20']), 'penyakit_id' => 6], // Rule 20
            ['kode_rule' => 'R21', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'GJ05', 'GJ11', 'GJ13', 'GJ19', 'GJ29', 'GJ30']), 'penyakit_id' => 7], // Rule 21
            ['kode_rule' => 'R22', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'GJ05', 'GJ11', 'GJ13', 'GJ19', 'GJ29']), 'penyakit_id' => 7], // Rule 22
            ['kode_rule' => 'R23', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'GJ05', 'GJ11', 'GJ13', 'GJ19']), 'penyakit_id' => 7], // Rule 23
            ['kode_rule' => 'R24', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'GJ05', 'GJ11', 'GJ13']), 'penyakit_id' => 7], // Rule 24
            ['kode_rule' => 'R25', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'GJ05', 'GJ11']), 'penyakit_id' => 7], // Rule 25
            ['kode_rule' => 'R26', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'GJ05']), 'penyakit_id' => 7], // Rule 26
            ['kode_rule' => 'R27', 'kode_gejala' => json_encode(['GJ01', 'GJ02']), 'penyakit_id' => 7], // Rule 27
            ['kode_rule' => 'R28', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'GJ06', 'GJ12', 'GJ13', 'GJ22', 'GJ23']), 'penyakit_id' => 8], // Rule 28
            ['kode_rule' => 'R29', 'kode_gejala' => json_encode(['GJ01', 'GJ02', 'GJ06', 'GJ12', 'GJ13', 'GJ22']), 'penyakit_id' => 8] // Rule 29
        ];

        foreach ($rules as $rule) {
            Rule::create($rule);
        }
    }
}
