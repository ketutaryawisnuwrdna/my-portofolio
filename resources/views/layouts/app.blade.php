<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Profesional | @yield('title')</title>
    @vite('resources/css/app.css')

    <script>
        // Jika sebelumnya user sengaja memencet Dark Mode, maka tampilkan Dark.
        // Jika tidak ada data atau belum pernah dipencet, otomatis Terang (Light).
        if (localStorage.theme === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.theme = 'light'; // Set default ke light
        }
    </script>
</head>

<body class="bg-gradient-to-b from-blue-50 to-white dark:from-gray-900 dark:to-gray-800 text-gray-800 dark:text-gray-100 font-sans antialiased min-h-screen flex flex-col transition-colors duration-300">

    <nav class="bg-gradient-to-r from-blue-900 to-blue-700 dark:from-gray-900 dark:to-black shadow-lg sticky top-0 z-50 transition-colors duration-300">
        <div class="w-full px-6 lg:px-24 xl:px-32">
            <div class="flex justify-between items-center py-4">

                <a href="{{ route('home') }}" class="text-white font-bold text-2xl tracking-wide z-20">
                    Ketut Website<span class="text-blue-300 dark:text-blue-500">.</span>
                </a>

                <div class="hidden md:flex items-center space-x-6">
                    <div class="space-x-6 text-white font-medium">
                        <a href="{{ route('home') }}" class="hover:text-blue-200 transition">Home</a>
                        <a href="{{ route('about') }}" class="hover:text-blue-200 transition">About</a>
                        <a href="{{ route('projects') }}" class="hover:text-blue-200 transition">Project</a>
                    </div>

                    <div class="w-px h-6 bg-white/30"></div>

                    <button id="theme-toggle-desktop" class="text-white hover:text-blue-200 focus:outline-none transition">
                        <svg id="theme-toggle-dark-icon-desktop" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg id="theme-toggle-light-icon-desktop" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="md:hidden flex items-center gap-4 z-20">
                    <button id="theme-toggle-mobile" class="text-white hover:text-blue-200 focus:outline-none transition">
                        <svg id="theme-toggle-dark-icon-mobile" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg id="theme-toggle-light-icon-mobile" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>

                    <button id="mobile-menu-button" class="text-white hover:text-blue-200 focus:outline-none p-1">
                        <svg class="w-7 h-7 transition-transform duration-300" id="icon-menu" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        <svg class="w-7 h-7 hidden transition-transform duration-300" id="icon-close" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden absolute w-full bg-blue-800 dark:bg-gray-900 shadow-xl border-t border-blue-700 dark:border-gray-800 transition-all duration-300 ease-in-out transform -translate-y-full opacity-0 -z-10 pointer-events-none">
            <div class="flex flex-col px-4 pt-4 pb-6 space-y-2">
                <a href="{{ route('home') }}" class="block text-white hover:bg-blue-600 dark:hover:bg-gray-800 rounded-lg px-4 py-3 font-medium transition duration-200">Home</a>
                <a href="{{ route('about') }}" class="block text-white hover:bg-blue-600 dark:hover:bg-gray-800 rounded-lg px-4 py-3 font-medium transition duration-200">About</a>
                <a href="{{ route('projects') }}" class="block text-white hover:bg-blue-600 dark:hover:bg-gray-800 rounded-lg px-4 py-3 font-medium transition duration-200">Project</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow relative z-0">
        @yield('content')
    </main>

    <footer class="bg-blue-900 dark:bg-black text-white text-center py-6 mt-12 transition-colors duration-300">
        <p>&copy; {{ date('Y') }} Portofolio Profesional by Ketut.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // --- Logika Mobile Menu ---
            const btn = document.getElementById('mobile-menu-button');
            const menu = document.getElementById('mobile-menu');
            const iconMenu = document.getElementById('icon-menu');
            const iconClose = document.getElementById('icon-close');

            btn.addEventListener('click', () => {
                menu.classList.toggle('-translate-y-full');
                menu.classList.toggle('opacity-0');
                menu.classList.toggle('pointer-events-none');
                iconMenu.classList.toggle('hidden');
                iconClose.classList.toggle('hidden');
            });

            // --- Logika Dark Mode ---
            function setupDarkModeToggle(btnId, darkIconId, lightIconId) {
                const themeBtn = document.getElementById(btnId);
                const darkIcon = document.getElementById(darkIconId);
                const lightIcon = document.getElementById(lightIconId);

                // Menyesuaikan tampilan icon awal HANYA berdasarkan localStorage
                if (localStorage.theme === 'dark') {
                    lightIcon.classList.remove('hidden'); // Sedang Dark Mode, tampilkan icon Matahari
                } else {
                    darkIcon.classList.remove('hidden'); // Sedang Light Mode, tampilkan icon Bulan
                }

                themeBtn.addEventListener('click', function() {
                    // Toggle Icon
                    darkIcon.classList.toggle('hidden');
                    lightIcon.classList.toggle('hidden');

                    // Toggle Theme
                    if (localStorage.theme === 'light' || !('theme' in localStorage)) {
                        document.documentElement.classList.add('dark');
                        localStorage.theme = 'dark';
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.theme = 'light';
                    }
                });
            }

            // Inisialisasi tombol desktop dan mobile
            setupDarkModeToggle('theme-toggle-desktop', 'theme-toggle-dark-icon-desktop', 'theme-toggle-light-icon-desktop');
            setupDarkModeToggle('theme-toggle-mobile', 'theme-toggle-dark-icon-mobile', 'theme-toggle-light-icon-mobile');
            // --- [PENTING] INISIALISASI VANILLA-TILT UNTUK SEMUA KARTU ---
            // Kita menargetkan semua elemen yang memiliki atribut 'data-tilt'
            VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
                max: 15,            // Kemiringan maksimal (derajat)
                speed: 400,         // Kecepatan transisi (ms)
                glare: true,        // Aktifkan efek kilauan holografik
                "max-glare": 0.3,   // Intensitas kilauan maksimal (0.0 - 1.0)
                perspective: 1000,   // Jarak perspektif 3D
                scale: 1.02,        // Sedikit membesar saat hover
                gyroscope: true     // Aktifkan miring menggunakan giroskop di HP (keren!)
            });
        });
    </script>
</body>
</html>
