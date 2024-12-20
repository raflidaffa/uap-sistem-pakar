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
            @if($penyakit)
                <div class="text-center">
                    <h1 class="text-2xl font-semibold text-green-600 mb-4">Hasil Diagnosa</h1>
                    <p class="text-lg">Penyakit yang terdeteksi berdasarkan gejala yang diberikan adalah:</p>
                    <h2 class="text-xl font-bold text-gray-900 mt-2">{{ $penyakit->jenis_penyakit }}</h2>
                    <h3 class="text-lg font-semibold text-gray-700 mt-4">Rekomendasi:</h3>
                    <p class="text-md text-gray-600">{{ $rekomendasi }}</p>
                </div>
            @else
                <div class="text-center">
                    <h1 class="text-2xl font-semibold text-red-600 mb-4">Hasil Diagnosa</h1>
                    <p class="text-lg">Tidak ditemukan penyakit berdasarkan gejala yang diberikan.</p>
                </div>
            @endif
            <div class="mt-6 text-center">
                <a href="{{ route('diagnosa.index') }}" class="inline-block bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
