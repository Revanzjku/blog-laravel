<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - RevansBlog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            500: '#3b82f6',
                            600: '#2563eb',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-gray-800">RevansBlog</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-800 hover:text-blue-600 font-medium">Beranda</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Kategori</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Tentang</a>
                    <a href="#" class="text-gray-600 hover:text-blue-600 font-medium">Kontak</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
        

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">BlogInspirasi</h3>
                    <p class="text-gray-400">Tempat berbagi pengetahuan, pengalaman, dan inspirasi untuk kehidupan yang lebih baik.</p>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-4">Navigasi</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Beranda</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Artikel</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kategori</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Tentang</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-4">Kategori</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Teknologi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Produktivitas</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kesehatan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Pengembangan Diri</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-4">Kontak</h4>
                    <ul class="space-y-2">
                        <li class="text-gray-400">email@bloginspirasi.com</li>
                        <li class="text-gray-400">+62 123 4567 890</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                <p>© 2023 BlogInspirasi. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
