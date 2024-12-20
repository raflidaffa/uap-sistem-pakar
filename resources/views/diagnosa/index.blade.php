<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosa Penyakit Sapi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: linear-gradient(120deg, #fbc2eb 0%, #a6c1ee 100%);
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px 20px;
            z-index: 10;
            position: sticky;
            top: 0;
        }
        .navbar a {
            color: #333;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }
        .navbar a:hover {
            color: #007bff;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .checkbox-card {
            display: flex;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .checkbox-card:hover {
            transform: scale(1.05);
        }
        .feature-icon {
            color: #007bff;
            margin-right: 8px;
        }
    </style>
</head>
<body>
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

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-10">
        <div class="card">
            <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Pilih Gejala yang Dialami</h1>
            <form action="{{ route('diagnosa.proses') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($gejalas as $gejala)
                        <div class="checkbox-card">
                            <input type="checkbox" id="{{ $gejala->kode_gejala }}" name="gejala[]" value="{{ $gejala->kode_gejala }}" class="h-5 w-5 text-blue-500">
                            <label for="{{ $gejala->kode_gejala }}" class="ml-3 text-gray-800 font-medium">{{ $gejala->jenis_gejala }}</label>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-6">
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-notes-medical"></i> Diagnosa Sekarang
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Sistem Pakar Diagnosa Penyakit Sapi. All rights reserved.</p>
    </footer>
</body>
</html>