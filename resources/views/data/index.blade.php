<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penyakit, Gejala, dan Rule</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="bg-gradient-to-r from-purple-200 to-blue-300 text-gray-800 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 px-6 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/beranda" class="text-lg font-bold flex items-center">
                <i class="fas fa-stethoscope text-blue-500 mr-2"></i> Sistem Pakar Diagnosa Penyakit Sapi
            </a>
            <div>
                <a href="/beranda" class="mr-4 hover:text-blue-500"><i class="fas fa-home"></i> Beranda</a>
                <a href="/diagnosa" class="mr-4 hover:text-blue-500"><i class="fas fa-diagnoses"></i> Diagnosa</a>
                <a href="/data" class="hover:text-blue-500"><i class="fas fa-database"></i> Data</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-gradient-to-r from-blue-500 to-purple-500 text-white py-10 shadow-md">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-2"><i class="fas fa-database"></i> Data Penyakit, Gejala, dan Rule</h1>
            <p class="text-lg">Kelola dan lihat informasi mengenai penyakit, gejala, serta aturan diagnosa dengan mudah.</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto py-8 flex-1">
        <!-- Tabel Gejala -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6 flex items-center">
                <i class="fas fa-notes-medical text-blue-500 mr-2"></i> Data Gejala
            </h2>
            <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
                <table class="table-auto w-full border-collapse">
                    <thead class="bg-blue-100">
                        <tr>
                            <th class="border border-gray-300 px-4 py-3 text-left">Kode Gejala</th>
                            <th class="border border-gray-300 px-4 py-3 text-left">Jenis Gejala</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gejalas as $gejala)
                            <tr class="@if($loop->odd) bg-gray-50 @else bg-white @endif hover:bg-blue-50">
                                <td class="border border-gray-300 px-4 py-2">{{ $gejala->kode_gejala }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $gejala->jenis_gejala }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Tabel Penyakit -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6 flex items-center">
                <i class="fas fa-virus text-red-500 mr-2"></i> Data Penyakit
            </h2>
            <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
                <table class="table-auto w-full border-collapse">
                    <thead class="bg-blue-100">
                        <tr>
                            <th class="border border-gray-300 px-4 py-3 text-left">Kode Penyakit</th>
                            <th class="border border-gray-300 px-4 py-3 text-left">Jenis Penyakit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penyakits as $penyakit)
                            <tr class="@if($loop->odd) bg-gray-50 @else bg-white @endif hover:bg-blue-50">
                                <td class="border border-gray-300 px-4 py-2">{{ $penyakit->kode_penyakit }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $penyakit->jenis_penyakit }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Tabel Rule -->
        <section>
            <h2 class="text-2xl font-semibold text-gray-700 mb-6 flex items-center">
                <i class="fas fa-cogs text-green-500 mr-2"></i> Data Rule
            </h2>
            <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
                <table class="table-auto w-full border-collapse">
                    <thead class="bg-blue-100">
                        <tr>
                            <th class="border border-gray-300 px-4 py-3 text-left">Kode Rule</th>
                            <th class="border border-gray-300 px-4 py-3 text-left">Kode Gejala</th>
                            <th class="border border-gray-300 px-4 py-3 text-left">Penyakit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rules as $rule)
                            <tr class="@if($loop->odd) bg-gray-50 @else bg-white @endif hover:bg-blue-50">
                                <td class="border border-gray-300 px-4 py-2">Rule {{ $rule->id }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ implode(', ', json_decode($rule->kode_gejala, true)) }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $rule->penyakit->jenis_penyakit }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 text-center">
        <p>&copy; 2024 Sistem Pakar Diagnosa Penyakit Sapi. All rights reserved.</p>
    </footer>
</body>
</html>
