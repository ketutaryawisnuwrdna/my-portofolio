@extends('layouts.app')
@section('title', 'Proyek Saya')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-16">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-blue-900 mb-4">Proyek Unggulan</h2>
        <div class="w-24 h-1 bg-blue-500 mx-auto rounded"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

        <!-- Kartu Proyek 1 -->
        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-blue-50 group">
            <div class="h-48 bg-blue-800 flex items-center justify-center">
                <span class="text-white font-semibold text-xl group-hover:scale-110 transition">Sistem GreenKost</span>
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Manajemen Rumah Kos</h3>
                <p class="text-gray-600 mb-4 line-clamp-3">Sistem informasi manajemen rumah kos berbasis web yang terintegrasi dengan payment gateway untuk mempermudah transaksi dan pendataan.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">Laravel</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">Midtrans</span>
                </div>
            </div>
        </div>

        <!-- Kartu Proyek 2 -->
        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden border border-blue-50 group">
            <div class="h-48 bg-blue-600 flex items-center justify-center">
                <span class="text-white font-semibold text-xl group-hover:scale-110 transition">Aplikasi Klub Voli</span>
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Portal Klub Olahraga</h3>
                <p class="text-gray-600 mb-4 line-clamp-3">Platform manajemen klub olahraga dengan fitur portal pemain, pendaftaran, serta pelacakan finansial dan kehadiran secara real-time.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">Next.js</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 text-sm rounded-full">Firebase</span>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
