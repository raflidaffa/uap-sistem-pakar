<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="bg-white shadow-md rounded-lg p-6 md:w-2/3 lg:w-1/2">
            @if($penyakitScores && count($penyakitScores) > 0)
                <div class="text-center">
                    <h1 class="text-2xl font-semibold text-green-600 mb-4">Hasil Diagnosa</h1>
                    <p class="text-lg mb-4">Penyakit yang terdeteksi berdasarkan gejala yang diberikan:</p>

                    <!-- Tabel Hasil Diagnosa -->
                    <table class="table-auto w-full text-left border-collapse border border-gray-300 mb-4">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-300 px-4 py-2">Penyakit</th>
                                <th class="border border-gray-300 px-4 py-2">Nilai CF (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penyakitScores as $score)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $score['penyakit']->jenis_penyakit }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ number_format($score['cf'], 2) }}%</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

            <!-- Informasi Penyakit dengan CF Tertinggi -->
            @foreach($rekomendasiList as $item)
                <div class="mt-4">
                    <h3 class="text-lg font-semibold text-gray-700">{{ $item['penyakit'] }}</h3>
                    <p class="text-md text-gray-600">{{ $item['rekomendasi'] }}</p>
                </div>
            @endforeach
            @else
                <div class="text-center">
                    <h1 class="text-2xl font-semibold text-red-600 mb-4">Hasil Diagnosa</h1>
                    <p class="text-lg">Tidak ditemukan penyakit berdasarkan gejala yang diberikan.</p>
                </div>
            @endif

            <!-- Tombol Kembali -->
            <div class="mt-6 text-center">
                <a href="{{ route('diagnosa.index') }}" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
