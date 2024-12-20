<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\Gejala;
use App\Models\Penyakit;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('diagnosa.index', compact('gejalas'));
    }

    public function diagnosa(Request $request)
{
    $inputGejala = $request->input('gejala');
    $rules = Rule::all();
    $penyakitScores = [];

    foreach ($rules as $rule) {
        $ruleGejala = json_decode($rule->kode_gejala, true);
        $jumlahTotalGejala = count($ruleGejala);
        $jumlahCocok = count(array_intersect($inputGejala, $ruleGejala));

        if ($jumlahCocok > 0) {
            // Hitung nilai CF: jumlah gejala cocok / total gejala dalam rule
            $cf = $jumlahCocok / $jumlahTotalGejala;

            // Simpan nilai CF terbesar untuk setiap penyakit
            if (!isset($penyakitScores[$rule->penyakit_id]) || $cf > $penyakitScores[$rule->penyakit_id]['cf']) {
                $penyakitScores[$rule->penyakit_id] = [
                    'penyakit' => Penyakit::find($rule->penyakit_id),
                    'cf' => $cf * 100, // Konversi ke persentase
                ];
            }
        }
    }

        // Urutkan hasil diagnosa berdasarkan nilai CF (desc)
        usort($penyakitScores, function ($a, $b) {
            return $b['cf'] <=> $a['cf'];
        });

        // Ambil nilai CF tertinggi
        $nilaiCFTertinggi = !empty($penyakitScores) ? $penyakitScores[0]['cf'] : null;

        // Ambil semua penyakit dengan nilai CF tertinggi
        $penyakitTertinggi = array_filter($penyakitScores, function ($score) use ($nilaiCFTertinggi) {
            return $score['cf'] === $nilaiCFTertinggi;
        });

        // Ambil rekomendasi untuk setiap penyakit dengan CF tertinggi
        $rekomendasiList = [];
        foreach ($penyakitTertinggi as $score) {
            $rekomendasiList[] = [
                'penyakit' => $score['penyakit']->jenis_penyakit,
                'rekomendasi' => $this->getRekomendasi($score['penyakit'])
            ];
        }

        return view('diagnosa.result', compact('penyakitScores', 'rekomendasiList'));
    }

    private function getRekomendasi($penyakit)
    {
        $rekomendasi = 'Rekomendasi default';

        if ($penyakit) {
            switch ($penyakit->kode_penyakit) {
                case 'P01':
                    $rekomendasi = 'Pastikan sapi berada di lingkungan yang bersih dan kering. Lakukan vaksinasi secara rutin untuk mencegah infeksi lebih lanjut. Berikan pakan bergizi dan suplemen sesuai anjuran dokter hewan.';
                    break;
                case 'P02':
                    $rekomendasi = 'Berikan obat cacing secara teratur dan pastikan kebersihan kandang untuk mencegah infeksi ulang. Periksa sapi secara berkala oleh dokter hewan dan jaga kualitas pakan.';
                    break;
                case 'P03':
                    $rekomendasi = 'Segera hubungi dokter hewan. Hindari kontak dengan hewan lain untuk mencegah penularan. Bersihkan dan disinfeksi area yang terkena. Berikan vitamin tambahan untuk meningkatkan kekebalan tubuh.';
                    break;
                case 'P04':
                    $rekomendasi = 'Bersihkan mata sapi dengan larutan antiseptik. Jauhkan sapi dari sinar matahari langsung dan debu. Hubungi dokter hewan untuk perawatan lebih lanjut. Pastikan mata sapi tetap lembab dan tidak terinfeksi.';
                    break;
                case 'P05':
                    $rekomendasi = 'Bersihkan dan keringkan kaki sapi secara rutin. Gunakan obat antiseptik pada kuku yang terkena. Pastikan lingkungan kandang tetap bersih dan kering. Berikan suplemen untuk memperkuat kuku sapi.';
                    break;
                case 'P06':
                    $rekomendasi = 'Hindari pemberian pakan yang bisa menyebabkan kembung. Berikan suplemen antifermentasi jika diperlukan. Periksa dan pijat perut sapi secara berkala. Jaga agar sapi tidak terlalu banyak bergerak setelah makan.';
                    break;
                case 'P07':
                    $rekomendasi = 'Lakukan pengujian TBC secara berkala. Isolasi sapi yang terinfeksi dan hubungi dokter hewan untuk perawatan lebih lanjut. Pastikan ventilasi kandang baik untuk mengurangi risiko penularan.';
                    break;
                case 'P08':
                    $rekomendasi = 'Berikan obat antiparasit sesuai anjuran dokter hewan. Isolasi sapi yang terinfeksi dan lakukan pengobatan secara rutin. Jaga kebersihan lingkungan untuk mencegah penyebaran parasit.';
                    break;
                default:
                    $rekomendasi = 'Rekomendasi belum tersedia untuk penyakit ini.';
                    break;
            }
        }
        return $rekomendasi;
    }

    public function dataIndex()
    {
        $gejalas = Gejala::all();
        $penyakits = Penyakit::all();
        $rules = Rule::with('penyakit')->get(); // Pastikan relasi antara Rule dan Penyakit sudah ada

        return view('data.index', compact('gejalas', 'penyakits', 'rules'));
    }
}
