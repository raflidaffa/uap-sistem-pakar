<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosa Penyakit Sapi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-blue-600 shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-white text-lg font-bold">Sistem Pakar Diagnosa Penyakit Sapi</a>
            <div>
                <a href="/beranda" class="text-white hover:text-blue-200 mx-2">Beranda</a>
                <a href="/diagnosa" class="text-white hover:text-blue-200 mx-2">Diagnosa</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-10">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-2xl font-bold text-gray-700 mb-4">Pilih Gejala yang Dialami</h1>
            <form action="{{ route('diagnosa.proses') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($gejalas as $gejala)
                        <div class="flex items-center">
                            <input type="checkbox" id="{{ $gejala->kode_gejala }}" name="gejala[]" value="{{ $gejala->kode_gejala }}" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring focus:ring-blue-200">
                            <label for="{{ $gejala->kode_gejala }}" class="ml-2 text-gray-600">{{ $gejala->jenis_gejala }}</label>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="mt-6 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                    Diagnosa
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-4 mt-10">
        <div class="container mx-auto text-center">
        </div>
    </footer>
</body>
</html>
