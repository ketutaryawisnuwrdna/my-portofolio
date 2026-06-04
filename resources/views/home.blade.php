@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    .animate-float { animation: float 6s ease-in-out infinite; }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }

    @keyframes slideInLeft {
        from { opacity: 0; transform: translateX(-50px); }
        to { opacity: 1; transform: translateX(0); }
    }
    .animate-slide-in-left {
        animation: slideInLeft 1s ease-out forwards;
        opacity: 0;
    }

    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-400 { animation-delay: 0.4s; }
    .delay-500 { animation-delay: 0.5s; }
    .delay-600 { animation-delay: 0.6s; }
</style>

<div class="relative w-full px-6 lg:px-24 xl:px-32 py-20 flex flex-col md:flex-row items-center justify-between overflow-hidden min-h-[80vh]">

    <div class="absolute top-0 left-10 w-72 h-72 bg-blue-300 dark:bg-blue-900 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse pointer-events-none"></div>
    <div class="absolute top-20 right-10 w-72 h-72 bg-blue-400 dark:bg-purple-900 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse pointer-events-none" style="animation-delay: 2s;"></div>

    <div class="md:w-1/2 lg:w-5/12 z-10 relative">
        <div class="animate-fade-in-up delay-100 mb-6">
            <span class="inline-flex items-center gap-2 py-1.5 px-4 rounded-full bg-blue-50 dark:bg-gray-800 text-blue-700 dark:text-blue-300 text-sm font-bold tracking-wider border border-blue-100 dark:border-gray-700 shadow-sm hover:bg-blue-100 dark:hover:bg-gray-700 transition duration-300 cursor-default">
                <span class="animate-bounce">👋</span> HALO, SELAMAT DATANG
            </span>
        </div>

        <h1 class="text-5xl lg:text-6xl xl:text-7xl font-extrabold text-blue-900 dark:text-white mb-6 leading-tight animate-fade-in-up delay-200">
            They doubted, <br/>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-400 dark:from-blue-400 dark:to-cyan-300">I developed.</span>
        </h1>

        <p class="text-lg lg:text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed animate-fade-in-up delay-300">
            Karya sederhana seperti ini biasanya terlihat biasa bagi pola pikir yang terlalu kecil.
        </p>

        <div class="flex flex-wrap gap-4 animate-fade-in-up delay-400">
            <a href="{{ route('projects') }}" class="group bg-gradient-to-r from-blue-600 to-blue-800 text-white px-8 py-3.5 rounded-full font-semibold shadow-lg hover:shadow-blue-500/50 dark:hover:shadow-blue-900/50 hover:-translate-y-1 transition-all duration-300 flex items-center gap-2">
                Lihat Project Saya
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('about') }}" class="bg-white dark:bg-gray-800 text-blue-700 dark:text-blue-300 border border-blue-100 dark:border-gray-700 px-8 py-3.5 rounded-full font-semibold shadow-sm hover:bg-blue-50 dark:hover:bg-gray-700 hover:-translate-y-1 transition-all duration-300">
                Tentang Saya
            </a>
        </div>
    </div>

    <div class="md:w-1/2 lg:w-5/12 mt-16 md:mt-0 z-10 relative flex justify-end">
        <div class="relative w-80 h-80 lg:w-96 lg:h-96 animate-float">
            <div class="absolute inset-0 bg-gradient-to-tr from-blue-600 to-blue-300 dark:from-blue-800 dark:to-blue-500 rounded-3xl rotate-6 opacity-20 transition-transform duration-500 hover:rotate-12"></div>
            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-3xl shadow-2xl border border-white/60 dark:border-gray-700/50 flex flex-col items-center justify-center overflow-hidden backdrop-blur-md -rotate-3 hover:rotate-0 transition-transform duration-500">
                <span class="text-7xl lg:text-8xl mb-4">💻</span>
                <span class="text-blue-800 dark:text-blue-300 font-extrabold text-2xl lg:text-3xl tracking-wide">Web Dev</span>
                <span class="text-blue-500 dark:text-gray-400 text-sm lg:text-base font-medium mt-1">Laravel & Tailwind</span>
            </div>
            <div class="absolute -right-6 top-12 bg-white dark:bg-gray-800 p-3 rounded-2xl shadow-xl border border-blue-50 dark:border-gray-700 animate-bounce" style="animation-duration: 2.5s;">
                <span class="text-3xl lg:text-4xl">🚀</span>
            </div>
            <div class="absolute -left-6 bottom-12 bg-white dark:bg-gray-800 p-3 rounded-2xl shadow-xl border border-blue-50 dark:border-gray-700 animate-bounce" style="animation-duration: 3s; animation-delay: 0.5s;">
                <span class="text-3xl lg:text-4xl">✨</span>
            </div>
        </div>
    </div>
</div>

<div class="bg-gradient-to-b from-white to-blue-50 dark:from-gray-900 dark:to-gray-800 py-16 border-t border-blue-50 dark:border-gray-800 transition-colors duration-300">
    <div class="w-full px-6 lg:px-24 xl:px-32">
        <p class="text-center text-sm font-bold text-blue-400 tracking-widest uppercase mb-8 animate-fade-in-up delay-500">Teknologi Andalanku</p>
        <div class="flex flex-wrap justify-center gap-6 lg:gap-10 animate-slide-in-left delay-600">
            <div class="flex items-center gap-2 bg-white dark:bg-gray-800 px-6 py-3 lg:px-8 lg:py-4 rounded-2xl shadow-sm border border-blue-100 dark:border-gray-700 hover:shadow-md hover:-translate-y-1 transition duration-300">
                <span class="text-red-500 text-xl lg:text-2xl font-bold">L</span>
                <span class="font-semibold text-gray-700 dark:text-gray-200 lg:text-lg">Laravel</span>
            </div>
            <div class="flex items-center gap-2 bg-white dark:bg-gray-800 px-6 py-3 lg:px-8 lg:py-4 rounded-2xl shadow-sm border border-blue-100 dark:border-gray-700 hover:shadow-md hover:-translate-y-1 transition duration-300">
                <span class="text-cyan-500 text-xl lg:text-2xl font-bold">T</span>
                <span class="font-semibold text-gray-700 dark:text-gray-200 lg:text-lg">Tailwind CSS</span>
            </div>
            <div class="flex items-center gap-2 bg-white dark:bg-gray-800 px-6 py-3 lg:px-8 lg:py-4 rounded-2xl shadow-sm border border-blue-100 dark:border-gray-700 hover:shadow-md hover:-translate-y-1 transition duration-300">
                <span class="text-black dark:text-white text-xl lg:text-2xl font-bold">N</span>
                <span class="font-semibold text-gray-700 dark:text-gray-200 lg:text-lg">Next.js</span>
            </div>
            <div class="flex items-center gap-2 bg-white dark:bg-gray-800 px-6 py-3 lg:px-8 lg:py-4 rounded-2xl shadow-sm border border-blue-100 dark:border-gray-700 hover:shadow-md hover:-translate-y-1 transition duration-300">
                <span class="text-yellow-500 text-xl lg:text-2xl font-bold">F</span>
                <span class="font-semibold text-gray-700 dark:text-gray-200 lg:text-lg">Firebase</span>
            </div>
        </div>
    </div>
</div>

<div class="w-full px-6 lg:px-24 xl:px-32 py-20">
    <div class="text-center mb-16 animate-fade-in-up">
        <h2 class="text-3xl md:text-4xl font-bold text-blue-900 dark:text-white mb-4">Fokus Pengembangan</h2>
        <div class="w-20 h-1 bg-blue-500 mx-auto rounded"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
        <div class="bg-white dark:bg-gray-800 p-8 lg:p-10 rounded-3xl shadow-lg border border-blue-50 dark:border-gray-700 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group animate-fade-in-up delay-100">
            <div class="w-14 h-14 lg:w-16 lg:h-16 bg-blue-100 dark:bg-gray-700 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 dark:group-hover:bg-blue-500 transition-colors duration-300">
                <span class="text-2xl lg:text-3xl group-hover:text-white transition-colors duration-300">📊</span>
            </div>
            <h3 class="text-xl lg:text-2xl font-bold text-gray-800 dark:text-white mb-3">Sistem Informasi</h3>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed lg:text-lg">Membangun sistem manajemen terintegrasi berbasis web untuk mempermudah pendataan, transaksi, dan pelaporan.</p>
        </div>

        <div class="bg-white dark:bg-gray-800 p-8 lg:p-10 rounded-3xl shadow-lg border border-blue-50 dark:border-gray-700 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group animate-fade-in-up delay-200">
            <div class="w-14 h-14 lg:w-16 lg:h-16 bg-blue-100 dark:bg-gray-700 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 dark:group-hover:bg-blue-500 transition-colors duration-300">
                <span class="text-2xl lg:text-3xl group-hover:text-white transition-colors duration-300">⚡</span>
            </div>
            <h3 class="text-xl lg:text-2xl font-bold text-gray-800 dark:text-white mb-3">Aplikasi Real-Time</h3>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed lg:text-lg">Membuat antarmuka modern dan portal interaktif yang responsif dengan pembaruan data secara instan.</p>
        </div>

        <div class="bg-white dark:bg-gray-800 p-8 lg:p-10 rounded-3xl shadow-lg border border-blue-50 dark:border-gray-700 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group animate-fade-in-up delay-300">
            <div class="w-14 h-14 lg:w-16 lg:h-16 bg-blue-100 dark:bg-gray-700 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 dark:group-hover:bg-blue-500 transition-colors duration-300">
                <span class="text-2xl lg:text-3xl group-hover:text-white transition-colors duration-300">🔒</span>
            </div>
            <h3 class="text-xl lg:text-2xl font-bold text-gray-800 dark:text-white mb-3">Keamanan & Infrastruktur</h3>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed lg:text-lg">Memastikan aplikasi berjalan di atas struktur database yang kuat, aman, dan siap untuk dikembangkan skalanya.</p>
        </div>
    </div>
</div>
<style>
    /* Styling khusus untuk scrollbar di dalam terminal */
    .terminal-scrollbar::-webkit-scrollbar { width: 8px; }
    .terminal-scrollbar::-webkit-scrollbar-track { background: #1f2937; border-radius: 4px; }
    .terminal-scrollbar::-webkit-scrollbar-thumb { background: #4b5563; border-radius: 4px; }
    .terminal-scrollbar::-webkit-scrollbar-thumb:hover { background: #6b7280; }
</style>

<div class="w-full px-6 lg:px-24 xl:px-32 py-20 bg-gray-50 dark:bg-gray-900 border-t border-gray-100 dark:border-gray-800 transition-colors duration-300">
    <div class="text-center mb-12 animate-fade-in-up">
        <h2 class="text-3xl md:text-4xl font-bold text-blue-900 dark:text-white mb-4">Akses Konsol</h2>
        <div class="w-20 h-1 bg-blue-500 mx-auto rounded"></div>
        <p class="mt-4 text-gray-600 dark:text-gray-400">Jelajahi keahlian saya menggunakan simulasi command prompt di bawah ini.</p>
    </div>

    <div class="max-w-4xl mx-auto animate-fade-in-up delay-200">
        <div class="bg-gray-900 rounded-xl shadow-2xl overflow-hidden border border-gray-700">

            <div class="bg-gray-800 px-4 py-3 flex items-center border-b border-gray-700">
                <div class="flex space-x-2">
                    <div class="w-3.5 h-3.5 bg-red-500 rounded-full"></div>
                    <div class="w-3.5 h-3.5 bg-yellow-500 rounded-full"></div>
                    <div class="w-3.5 h-3.5 bg-green-500 rounded-full"></div>
                </div>
                <div class="mx-auto text-gray-400 text-xs font-mono flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    guest@portofolio-ketut:~
                </div>
            </div>

            <div class="p-6 font-mono text-sm md:text-base text-gray-300 h-80 overflow-y-auto terminal-scrollbar" id="terminal-container" onclick="document.getElementById('terminal-input').focus()">
                <div class="mb-4">
                    <span class="text-green-400 font-bold">Welcome to Interactive Terminal v1.0.0</span><br>
                    Type <span class="text-yellow-400">help</span> to see a list of available commands.
                </div>

                <div id="terminal-history"></div>

                <div class="flex items-center mt-2">
                    <span class="text-green-400 font-bold mr-2">guest@ketut:~$</span>
                    <input type="text" id="terminal-input" class="flex-1 bg-transparent border-none outline-none text-gray-100 focus:ring-0 p-0" autocomplete="off" spellcheck="false">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.getElementById('terminal-input');
        const history = document.getElementById('terminal-history');
        const container = document.getElementById('terminal-container');

        // Database respons terminal yang sudah disesuaikan dengan data riilmu
        const commands = {
            'hallo': "Hai! Saya ketut, selamat datang di website portofolio saya. ",

            'help': "Available commands:\n  whoami   - Tampilkan informasi singkat saya\n  skills   - Tampilkan stack teknologi\n  projects - Lihat daftar proyek unggulan\n  clear    - Bersihkan layar terminal",

            'whoami': "Nama: Ketut Arya Wisnu Wardana\nStatus: Mahasiswa S1 Informatika di Universitas Teknologi Yogyakarta (UTY).\nFokus: Pengembang Web yang berfokus pada arsitektur MVC dan modern frontend.",

            'skills': "Teknologi yang sering digunakan:\n[+] Laravel Framework\n[+] Next.js & Tailwind CSS\n[+] Firebase (Real-time DB)\n[+] MySQL\n[+] OSINT & Digital Forensics (Eksplorasi)",

            'projects': "Sedang Membangun / Telah Selesai:\n1. Sistem GreenKost (Manajemen Rumah Kos & Midtrans)\n2. Portal Klub Voli (Portal Pemain & Pelacakan Finansial)\n3. Eksplorasi OSINT (Geo-location & Data Capture)"

        };

        let isTyping = false;

        input.addEventListener('keydown', function(e) {
            // Mengeksekusi perintah saat tombol Enter ditekan
            if (e.key === 'Enter' && !isTyping) {
                const cmd = input.value.trim().toLowerCase();
                input.value = ''; // Kosongkan inputan

                if (cmd === '') return; // Abaikan jika user hanya menekan Enter kosong

                // 1. Cetak perintah yang diketik user ke layar (Histori)
                const cmdEl = document.createElement('div');
                cmdEl.innerHTML = `<span class="text-green-400 font-bold">guest@ketut:~$</span> <span class="text-white">${cmd}</span>`;
                history.appendChild(cmdEl);

                // 2. Evaluasi perintah
                if (cmd === 'clear') {
                    history.innerHTML = ''; // Bersihkan layar
                } else {
                    const responseText = commands[cmd] || `bash: command not found: ${cmd}\nType 'help' for available commands.`;
                    typeWriterAnimation(responseText);
                }

                scrollToBottom();
            }
        });

        // Fungsi untuk animasi mengetik per karakter
        function typeWriterAnimation(text) {
            isTyping = true;
            input.disabled = true; // Kunci input saat terminal sedang "mengetik"

            const responseEl = document.createElement('div');
            responseEl.className = 'mb-4 mt-1 text-gray-400 whitespace-pre-wrap';
            history.appendChild(responseEl);

            let i = 0;
            const interval = setInterval(() => {
                responseEl.textContent += text.charAt(i);
                i++;
                scrollToBottom();

                if (i >= text.length) {
                    clearInterval(interval);
                    isTyping = false;
                    input.disabled = false;
                    input.focus(); // Kembalikan fokus kursor ke input
                }
            }, 20); // Kecepatan ngetik (20 milidetik per karakter)
        }

        // Fungsi agar scrollbar selalu turun ke bawah saat baris baru bertambah
        function scrollToBottom() {
            container.scrollTop = container.scrollHeight;
        }
    });
</script>
@endsection
