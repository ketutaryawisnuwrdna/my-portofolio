@extends('layouts.app')
@section('title', 'Proyek Saya')

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
</style>

<div class="w-full px-6 lg:px-24 xl:px-32 py-16">

    <div class="text-center mb-16 animate-fade-in-up">
        <span class="inline-block py-1 px-3 rounded-full bg-blue-50 dark:bg-gray-800 text-blue-700 dark:text-blue-400 text-xs font-bold tracking-widest mb-4 border border-blue-200 dark:border-gray-700 uppercase transition-colors duration-300">
            Portofolio
        </span>
        <h2 class="text-4xl md:text-5xl xl:text-6xl font-extrabold text-blue-900 dark:text-white mb-4 transition-colors duration-300">Project Unggulan</h2>
        <div class="w-24 h-1.5 bg-gradient-to-r from-blue-400 to-blue-700 mx-auto rounded-full"></div>
        <p class="text-gray-600 dark:text-gray-300 mt-6 text-lg xl:text-xl max-w-3xl mx-auto transition-colors duration-300">
            Kumpulan karya digital yang telah saya kembangkan. Fokus pada performa, keamanan, dan pengalaman pengguna yang responsif.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 xl:gap-12">

        <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-blue-50 dark:border-gray-700 group flex flex-col h-full hover:-translate-y-2 animate-fade-in-up delay-100 relative">
            <div class="absolute top-4 right-4 z-20 bg-yellow-400 text-yellow-900 text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                Tugas Akhir
            </div>

            <div class="h-56 xl:h-64 bg-gradient-to-br from-blue-700 to-blue-900 dark:from-gray-700 dark:to-gray-900 flex items-center justify-center relative overflow-hidden">
                <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] group-hover:scale-110 transition-transform duration-700"></div>
                <div class="z-10 text-center">
                    <span class="text-5xl block mb-2">🏢</span>
                    <span class="text-white font-bold text-2xl xl:text-3xl tracking-wide">GreenKost</span>
                </div>
            </div>
            <div class="p-8 xl:p-10 flex-grow flex flex-col">
                <h3 class="text-2xl xl:text-3xl font-bold text-gray-800 dark:text-white mb-3 group-hover:text-blue-700 dark:group-hover:text-blue-400 transition-colors">Sistem Manajemen Rumah Kos</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-6 flex-grow leading-relaxed xl:text-lg">
                    Sistem informasi manajemen berbasis web yang terintegrasi penuh dengan Midtrans payment gateway untuk mempermudah transaksi finansial, pendaftaran, dan pendataan penghuni secara otomatis.
                </p>

                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 text-sm font-bold rounded-md border border-blue-100 dark:border-gray-600">Laravel</span>
                    <span class="px-3 py-1 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 text-sm font-bold rounded-md border border-blue-100 dark:border-gray-600">Tailwind CSS</span>
                    <span class="px-3 py-1 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 text-sm font-bold rounded-md border border-blue-100 dark:border-gray-600">Midtrans</span>
                </div>

                <div class="flex items-center gap-3 mt-auto pt-4 border-t border-gray-100 dark:border-gray-700">
                    <a href="#" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-bold text-sm xl:text-base flex items-center gap-1 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        Detail Proyek
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-blue-50 dark:border-gray-700 group flex flex-col h-full hover:-translate-y-2 animate-fade-in-up delay-200">
            <div class="h-56 xl:h-64 bg-gradient-to-br from-blue-500 to-blue-700 dark:from-gray-700 dark:to-gray-900 flex items-center justify-center relative overflow-hidden">
                <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] group-hover:scale-110 transition-transform duration-700"></div>
                <div class="z-10 text-center">
                    <span class="text-5xl block mb-2">🏐</span>
                    <span class="text-white font-bold text-2xl xl:text-3xl tracking-wide">Portal Klub Voli</span>
                </div>
            </div>
            <div class="p-8 xl:p-10 flex-grow flex flex-col">
                <h3 class="text-2xl xl:text-3xl font-bold text-gray-800 dark:text-white mb-3 group-hover:text-blue-700 dark:group-hover:text-blue-400 transition-colors">Aplikasi Manajemen Olahraga</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-6 flex-grow leading-relaxed xl:text-lg">
                    Platform manajemen klub olahraga komprehensif. Dilengkapi dengan portal khusus pemain, pendaftaran, penjadwalan pertandingan, hingga pelacakan kehadiran dan metrik finansial real-time.
                </p>

                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 text-sm font-bold rounded-md border border-blue-100 dark:border-gray-600">Next.js</span>
                    <span class="px-3 py-1 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 text-sm font-bold rounded-md border border-blue-100 dark:border-gray-600">Firebase</span>
                    <span class="px-3 py-1 bg-blue-50 dark:bg-gray-700 text-blue-700 dark:text-blue-300 text-sm font-bold rounded-md border border-blue-100 dark:border-gray-600">Tailwind CSS</span>
                </div>

                <div class="flex items-center gap-3 mt-auto pt-4 border-t border-gray-100 dark:border-gray-700">
                    <a href="#" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-bold text-sm xl:text-base flex items-center gap-1 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        Source Code Coming Soon
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-blue-50 dark:border-gray-700 group flex flex-col h-full hover:-translate-y-2 animate-fade-in-up delay-300 relative">
            <div class="h-56 xl:h-64 bg-gradient-to-br from-gray-700 to-gray-900 flex items-center justify-center relative overflow-hidden">
                <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] group-hover:scale-110 transition-transform duration-700"></div>
                <div class="z-10 text-center">
                    <span class="text-5xl block mb-2">🔍</span>
                    <span class="text-white font-bold text-2xl xl:text-3xl tracking-wide">Buat Project apalagi ya?</span>
                </div>
            </div>
            <div class="p-8 xl:p-10 flex-grow flex flex-col">
                <h3 class="text-2xl xl:text-3xl font-bold text-gray-800 dark:text-white mb-3 group-hover:text-blue-700 dark:group-hover:text-blue-400 transition-colors">Coming Soon......</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-6 flex-grow leading-relaxed xl:text-lg">
                    Saya sedang dalam proses mengembangkan proyek baru yang lebih menarik dan menantang. Nantikan karya-karya saya selanjutnya yang akan segera hadir di sini!
                </p>

                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-sm font-bold rounded-md border border-gray-200 dark:border-gray-600">-</span>
                    <span class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-sm font-bold rounded-md border border-gray-200 dark:border-gray-600">-</span>
                    <span class="px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 text-sm font-bold rounded-md border border-gray-200 dark:border-gray-600">-</span>
                </div>

                <div class="flex items-center gap-3 mt-auto pt-4 border-t border-gray-100 dark:border-gray-700">
                    <a href="#" class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-bold text-sm xl:text-base flex items-center gap-1 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H14"></path></svg>
                        Studi Kasus
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-24 xl:mt-32 bg-gradient-to-r from-blue-800 to-blue-600 dark:from-gray-900 dark:to-gray-800 border dark:border-gray-700 rounded-3xl p-10 xl:p-16 text-center text-white shadow-2xl relative overflow-hidden animate-fade-in-up delay-400 transition-colors duration-300">
        <div class="absolute -top-10 -right-10 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl"></div>

        <h3 class="text-3xl xl:text-4xl font-bold mb-6 relative z-10">Tertarik Membangun Sesuatu Bersama?</h3>
        <p class="text-blue-100 dark:text-gray-300 mb-10 max-w-2xl mx-auto relative z-10 text-lg xl:text-xl">
            Saya selalu terbuka untuk mendiskusikan peluang baru, proyek freelance, atau sekadar bertukar pikiran tentang teknologi web terbaru.
        </p>
        <a href="{{ route('about') }}" class="inline-block bg-white dark:bg-blue-600 text-blue-800 dark:text-white font-bold px-10 py-4 xl:px-12 xl:py-5 rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 relative z-10 text-lg">
            Hubungi Saya
        </a>
    </div>

</div>
@endsection
