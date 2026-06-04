@extends('layouts.app')
@section('title', 'Tentang Saya')

@section('content')
<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }
    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-400 { animation-delay: 0.4s; }
    .delay-500 { animation-delay: 0.5s; }
</style>

<div class="w-full px-6 lg:px-24 xl:px-32 py-16 overflow-hidden">

    <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-xl overflow-hidden border border-blue-50 dark:border-gray-700 flex flex-col lg:flex-row animate-fade-in-up delay-100 transition-colors duration-300">

        <div class="lg:w-1/3 bg-gradient-to-br from-blue-700 to-blue-900 dark:from-gray-900 dark:to-gray-800 p-10 xl:p-14 flex flex-col items-center text-white relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 rounded-full blur-2xl translate-x-1/2 -translate-y-1/2"></div>

            <div class="w-48 h-48 xl:w-56 xl:h-56 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white/30 dark:border-gray-600 shadow-2xl relative group z-10">
                <img
                    src="{{ asset('images/foto-profil.PNG') }}"
                    alt="Ketut Arya Wisnu Wardana"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                >
            </div>

            <h3 class="text-3xl font-bold mb-1 text-center z-10">Ketut Arya Wisnu Wardana</h3>
            <p class="text-blue-200 dark:text-blue-400 text-lg tracking-wide mb-8 text-center z-10">Web Developer</p>

            <div class="w-full mt-auto z-10">
                <h4 class="text-sm font-semibold text-blue-300 dark:text-gray-400 uppercase tracking-wider mb-4 border-b border-blue-500/50 dark:border-gray-600 pb-2 text-center lg:text-left">Terhubung dengan saya</h4>
                <div class="flex flex-col gap-3">
                    <a href="https://github.com/ktaryawsnwrdna" target="_blank" class="flex items-center gap-3 bg-blue-800/50 dark:bg-gray-700 hover:bg-blue-600 dark:hover:bg-gray-600 p-3 rounded-xl transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.416 22 12c0-5.523-4.477-10-10-10z"/></svg>
                        <span class="font-medium">github</span>
                    </a>
                    <a href="https://linkedin.com/in/ktaryawisnuwardana17" target="_blank" class="flex items-center gap-3 bg-blue-800/50 dark:bg-gray-700 hover:bg-blue-600 dark:hover:bg-gray-600 p-3 rounded-xl transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        <span class="font-medium">LinkedIn Profil</span>
                    </a>
                    <a href="https://Instagram.com/ktaryawisnuwardana" target="_blank" class="flex items-center gap-3 bg-blue-800/50 dark:bg-gray-700 hover:bg-blue-600 dark:hover:bg-gray-600 p-3 rounded-xl transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.209-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        <span class="font-medium">Instagram</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="lg:w-2/3 p-10 xl:p-14 bg-white dark:bg-gray-800 relative flex flex-col">
            <div class="mb-10">
                <h2 class="text-4xl xl:text-5xl font-extrabold text-blue-900 dark:text-white mb-6 relative inline-block">
                    Tentang Saya
                    <span class="absolute bottom-1 left-0 w-1/2 h-2 bg-blue-200 dark:bg-blue-900 -z-10 rounded"></span>
                </h2>
                <div class="space-y-4 text-gray-600 dark:text-gray-300 leading-relaxed text-lg xl:text-xl">
                    <p>
                        Halo! Saya adalah mahasiswa program studi <strong>Informatika</strong> di <strong>Universitas Teknologi Yogyakarta (UTY)</strong> Angkatan tahun 2022.
                    </p>
                    <p>
                        Saya memiliki minat yang mendalam pada pengembangan aplikasi web modern. Fokus utama saya adalah menciptakan antarmuka yang intuitif dan fungsional menggunakan teknologi seperti <strong>Laravel</strong>, <strong>Tailwind CSS</strong>, serta <strong>Next.js</strong> dan tertarik untuk terus memperluas pengetahuan saya dalam pengembangan frontend dan backend.
                    </p>
                    <p>
                        Selain itu, saya ucapkan <strong>Selamat datang!</strong> bagi para <strong>sahabat, teman, mantan atau siapapun itu</strong> di website portofolio saya. Selamat menikmati penjelajahan di website saya ini, jangan lupa <strong>berbuat baik,</strong> terima kasih dan semoga bahagia selalu.
                    </p> </div>
            </div> <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10 xl:gap-12">
                <div>
                    <h4 class="text-xl xl:text-2xl font-bold text-blue-800 dark:text-blue-400 mb-4 flex items-center gap-2 border-b-2 border-blue-100 dark:border-gray-700 pb-2">
                        <span class="text-2xl">🎓</span> Latar Belakang
                    </h4>
                    <div class="bg-blue-50/50 dark:bg-gray-700/50 p-5 rounded-xl border border-blue-50 dark:border-gray-700 hover:bg-blue-50 dark:hover:bg-gray-700 transition duration-300">
                        <h5 class="font-bold text-gray-800 dark:text-white text-lg">Universitas Teknologi Yogyakarta</h5>
                        <p class="text-blue-600 dark:text-blue-400 font-medium">S1 Informatika (Fakultas Sains & Teknologi)</p>
                        <p class="text-gray-500 dark:text-gray-400 mt-2">Angkatan Tahun 2022.</p>
                    </div>
                </div>

                <div>
                    <h4 class="text-xl xl:text-2xl font-bold text-blue-800 dark:text-blue-400 mb-4 flex items-center gap-2 border-b-2 border-blue-100 dark:border-gray-700 pb-2">
                        <span class="text-2xl">🎯</span> Minat & Hobi
                    </h4>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition"><span class="text-blue-500 dark:text-blue-400">✔</span> Web Development</li>
                        <li class="flex items-center gap-2 text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition"><span class="text-blue-500 dark:text-blue-400">✔</span> Frontend</li>
                        <li class="flex items-center gap-2 text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition"><span class="text-blue-500 dark:text-blue-400">✔</span> Server Management</li>
                        <li class="flex items-center gap-2 text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition"><span class="text-blue-500 dark:text-blue-400">✔</span> Olahraga</li>
                    </ul>
                </div>
            </div>

            <div>
                <h4 class="text-xl xl:text-2xl font-bold text-blue-800 dark:text-blue-400 mb-4 flex items-center gap-2 border-b-2 border-blue-100 dark:border-gray-700 pb-2">
                    <span class="text-2xl">⚡</span> Stack Teknologi
                </h4>
                <div class="flex flex-wrap gap-3">
                    <span class="px-5 py-2.5 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 rounded-lg font-bold border border-blue-100 dark:border-gray-600 shadow-sm hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white transition cursor-default hover:-translate-y-1">Laravel</span>
                    <span class="px-5 py-2.5 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 rounded-lg font-bold border border-blue-100 dark:border-gray-600 shadow-sm hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white transition cursor-default hover:-translate-y-1">Next.js</span>
                    <span class="px-5 py-2.5 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 rounded-lg font-bold border border-blue-100 dark:border-gray-600 shadow-sm hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white transition cursor-default hover:-translate-y-1">Tailwind CSS</span>
                    <span class="px-5 py-2.5 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 rounded-lg font-bold border border-blue-100 dark:border-gray-600 shadow-sm hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white transition cursor-default hover:-translate-y-1">Firebase</span>
                    <span class="px-5 py-2.5 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 rounded-lg font-bold border border-blue-100 dark:border-gray-600 shadow-sm hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white transition cursor-default hover:-translate-y-1">MySQL</span>
                    <span class="px-5 py-2.5 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 rounded-lg font-bold border border-blue-100 dark:border-gray-600 shadow-sm hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white transition cursor-default hover:-translate-y-1">Html</span>
                    <span class="px-5 py-2.5 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 rounded-lg font-bold border border-blue-100 dark:border-gray-600 shadow-sm hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white transition cursor-default hover:-translate-y-1">Css</span>
                </div>
            </div>

            <div class="mt-auto pt-10 flex justify-start">
                <a href="{{ route('projects') }}" class="group inline-flex items-center gap-3 bg-gradient-to-r from-blue-600 to-blue-800 text-white px-8 py-4 rounded-full font-bold shadow-lg hover:shadow-blue-500/50 dark:hover:shadow-blue-900/50 hover:-translate-y-1 transition-all duration-300">
                    Lihat Proyek Saya
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

        </div>
    </div>

    <div class="mt-24">
        <div class="text-center mb-12 animate-fade-in-up delay-200">
            <h3 class="text-3xl font-extrabold text-blue-900 dark:text-white mb-4">Jejak Langkah & Fokus Saat Ini</h3>
            <div class="w-20 h-1.5 bg-gradient-to-r from-blue-400 to-blue-700 mx-auto rounded-full"></div>
            <p class="mt-4 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Pengalaman dan eksplorasi yang membentuk kemampuan saya dalam pengembangan perangkat lunak.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 xl:gap-12">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg border-t-4 border-blue-400 dark:border-blue-500 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 animate-fade-in-up delay-200">
                <div class="w-14 h-14 bg-blue-50 dark:bg-gray-700 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center mb-6 border border-blue-100 dark:border-gray-600">
                    <span class="text-2xl">🏢</span>
                </div>
                <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Sistem Terintegrasi</h4>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed text-sm xl:text-base">Membangun <strong>Sistem GreenKost</strong> sebagai Tugas Akhir. Merancang logika backend yang kokoh dan mengintegrasikan <em>payment gateway</em> untuk otomatisasi transaksi.</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg border-t-4 border-blue-600 dark:border-blue-400 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 animate-fade-in-up delay-300">
                <div class="w-14 h-14 bg-blue-50 dark:bg-gray-700 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center mb-6 border border-blue-100 dark:border-gray-600">
                    <span class="text-2xl">⚡</span>
                </div>
                <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Eksplorasi Ekosistem</h4>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed text-sm xl:text-base">Berpengalaman membangun antarmuka dinamis seperti <strong>Portal Klub Voli</strong> menggunakan Next.js dan Firebase untuk memahami sinkronisasi data secara <em>real-time</em>.</p>
            </div>

            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg border-t-4 border-blue-900 dark:border-blue-300 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 animate-fade-in-up delay-400">
                <div class="w-14 h-14 bg-blue-50 dark:bg-gray-700 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center mb-6 border border-blue-100 dark:border-gray-600">
                    <span class="text-2xl">🖥️</span>
                </div>
                <h4 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Infrastruktur & Server</h4>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed text-sm xl:text-base">Memperluas kapasitas diri dalam bidang manajemen server dan <em>DevOps</em>. Mempersiapkan keahlian untuk mengelola implementasi (<em>deployment</em>) berskala profesional.</p>
            </div>
        </div>
    </div>

    <div class="mt-24 bg-gradient-to-br from-blue-900 to-blue-800 dark:from-gray-900 dark:to-gray-800 rounded-3xl p-10 xl:p-16 text-white shadow-2xl relative overflow-hidden animate-fade-in-up delay-500 group border dark:border-gray-700">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2 group-hover:scale-110 transition-transform duration-700"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-400 dark:bg-blue-900 opacity-10 rounded-full blur-3xl -translate-x-1/2 translate-y-1/2 group-hover:scale-110 transition-transform duration-700"></div>
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>

        <div class="relative z-10">
            <h3 class="text-3xl font-bold mb-12 text-center">Filosofi & Pendekatan Kerja</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="flex flex-col md:flex-row gap-5 items-start">
                    <div class="w-14 h-14 shrink-0 bg-blue-700/50 dark:bg-gray-700/50 rounded-2xl flex items-center justify-center text-3xl shadow-inner border border-blue-500/30 dark:border-gray-600">🧩</div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Analisis Kritis (Problem Solving)</h4>
                        <p class="text-blue-200 dark:text-gray-300 leading-relaxed">Terbiasa membedah masalah hingga ke akarnya. Pemahaman dasar pada Open Source Intelligence (OSINT) membentuk insting analitis yang tajam saat melacak kelemahan sistem atau <em>debugging</em>.</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-5 items-start">
                    <div class="w-14 h-14 shrink-0 bg-blue-700/50 dark:bg-gray-700/50 rounded-2xl flex items-center justify-center text-3xl shadow-inner border border-blue-500/30 dark:border-gray-600">🌱</div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Pembelajar yang Adaptif</h4>
                        <p class="text-blue-200 dark:text-gray-300 leading-relaxed">Dunia teknologi bergerak sangat cepat. Saya menanamkan *mindset* untuk terus bereksplorasi, mempelajari alat ukur (*tools*) baru, dan menyesuaikan diri dengan tren pengembangan modern.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
