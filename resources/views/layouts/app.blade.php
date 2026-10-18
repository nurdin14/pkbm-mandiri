<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKBM MANDIRI BANJARAN</title>
    <!-- Google Fonts Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js untuk SPA State Routing -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #111827;
            background-color: #FFFFFF;
        }

        @keyframes floatUp {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-15px); /* Jarak geser ke atas secara halus */
            }
        }

        @keyframes floatDown {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(15px); /* Jarak geser ke bawah secara halus */
            }
        }

        /* Kelas untuk Animasi Kotak 1 (Dari bawah ke atas berulang) */
        .warga-belajar {
            animation: floatUp 4s ease-in-out infinite;
            animation-delay: 1.2s;
        }

        /* Kelas untuk Animasi Kotak 2 (Dari atas ke bawah berulang) */
        .kelulusana {
            animation: floatDown 4s ease-in-out infinite;
            animation-delay: 1.4s; /* Diberi jeda agar gerakannya tidak kaku/bersamaan */
        }

        .tutor-ahli {
            animation: floatDown 4s ease-in-out infinite;
            animation-delay: 2s; /* Diberi jeda agar gerakannya tidak kaku/bersamaan */
        }
    </style>
</head>
<body x-data="{ activePage: 'beranda' }" class="antialiased selection:bg-indigo-500 selection:text-white">
    @yield('content')
</body>
</html>