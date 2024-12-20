<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
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
        .hero {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 50px;
            text-align: left;
        }
        .hero-content h1 {
            font-size: 3.5rem;
            color: #fff;
            font-weight: 700;
            line-height: 1.2;
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .hero-content p {
            font-size: 1.25rem;
            color: #fff;
            margin: 20px 0;
        }
        .hero a {
            background-color: #007bff;
            color: #fff;
            padding: 12px 30px;
            border-radius: 30px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background-color 0.3s, transform 0.2s;
        }
        .hero a:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
        .hero img {
            width: 45%;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .hero img:hover {
            transform: scale(1.05);
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

    <!-- Hero Section -->
    <div class="hero container mx-auto px-4 lg:px-0">
        <div class="hero-content">
            <h1>Selamat Datang di Sistem Pakar Diagnosa Penyakit Sapi</h1>
            <p>Gunakan sistem ini untuk mendiagnosa penyakit pada sapi berdasarkan gejala yang dialami. Pilih gejala yang dialami sapi Anda dan dapatkan hasil diagnosa serta rekomendasi perawatan.</p>
            <a href="{{ route('diagnosa.index') }}" class="font-bold">
                <i class="fas fa-arrow-right"></i> Mulai Diagnosa
            </a>
        </div>
        <img src="https://ugm.ac.id/wp-content/uploads/2022/03/09032216467963091960373715.jpg" alt="Gambar Sapi">
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 lg:px-0">
        <div class="card">
            <h2 class="text-xl font-bold mb-4">Tentang Sistem Kami</h2>
            <p class="text-gray-600">Sistem pakar ini dirancang untuk membantu peternak sapi dalam mendiagnosa penyakit berdasarkan gejala yang dialami oleh sapi. Dengan menggunakan teknologi AI, sistem ini dapat memberikan hasil diagnosa yang akurat dan rekomendasi perawatan yang sesuai.</p>
        </div>
        <div class="card mt-6">
            <h2 class="text-xl font-bold mb-4">Fitur-Fitur</h2>
            <ul class="list-disc pl-5 text-gray-600">
                <li><i class="fas fa-notes-medical feature-icon"></i>Diagnosa Penyakit Berdasarkan Gejala</li>
                <li><i class="fas fa-hand-holding-medical feature-icon"></i>Rekomendasi Perawatan</li>
                <li><i class="fas fa-info-circle feature-icon"></i>Informasi Penyakit dan Gejala</li>
                <li><i class="fas fa-mobile-alt feature-icon"></i>Antarmuka Pengguna yang Mudah Digunakan</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container mx-auto">
            <p>&copy; 2024 Sistem Pakar Diagnosa Penyakit Sapi. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
