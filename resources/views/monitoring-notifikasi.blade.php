<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monitoring Notifikasi - RSUD Kajen</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body { font-family: 'Instrument Sans', sans-serif; }
        </style>
    @endif
</head>
<body class="bg-gray-100 text-gray-800 font-sans flex h-screen overflow-hidden">

    <!-- ======================== SIDEBAR ======================== -->
    <!-- Backdrop Overlay -->
     <aside class="w-52 bg-[#1e6b45] text-white flex flex-col shrink-0 relative overflow-hidden">

        <div class="px-5 py-5 border-b border-white/15 flex items-center gap-2.5">
            <img src="{{ asset('logo.png') }}" alt="Logo RSUD Kajen" class="h-10 w-auto">
            <div class="leading-tight">
                <p class="font-bold text-sm leading-none">RSUD Kajen</p>
                <p class="text-white/70 text-[10px]">Melayani dengan Hati</p>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="flex-1 py-4 overflow-y-auto">
            <ul class="space-y-0.5 px-3">
                <!-- Dashboard -->
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <!-- Data Booking -->
                <li>
                    <a href="{{ route('data-booking') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Data Booking
                    </a>
                </li>
                <!-- Dokter Berhalangan -->
                <li>
                    <a href="{{ route('dokter-berhalangan') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Dokter Berhalangan
                    </a>
                </li>
                <!-- Monitoring Notifikasi ACTIVE -->
                <li>
                    <a href="{{ route('monitoring-notifikasi') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-white/20 text-white text-sm font-semibold">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        Monitoring Notifikasi
                    </a>
                </li>
                <!-- Riwayat Notifikasi -->
                <li>
                    <a href="{{ route('riwayat-notifikasi') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        Riwayat Notifikasi
                    </a>
                </li>
                <!-- Laporan -->
                <li>
                    <a href="{{ route('laporan') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Laporan
                    </a>
                </li>
                <!-- Pengaturan -->
                <li>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Pengaturan
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Logout -->
        <div class="px-3 py-4 border-t border-white/15">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors cursor-pointer">
                    <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- ======================== MAIN CONTENT ======================== -->
    <div class="flex-1 flex flex-col overflow-hidden">

        <!-- Top Navbar -->
        <header class="bg-white border-b border-gray-200 px-6 py-3.5 flex items-center gap-3 shrink-0">
            <h1 class="text-base font-bold text-gray-800">Monitoring Notifikasi</h1>

            <div class="ml-auto flex items-center gap-3">

                <!-- Poli Badge -->
                <div class="flex items-center gap-2 px-3 py-1.5 border border-[#1e6b45]/30 rounded-lg bg-[#1e6b45]/5 text-[#1e6b45] text-sm font-medium cursor-pointer hover:bg-[#1e6b45]/10 transition-colors">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Poli Penyakit Dalam
                    <svg class="w-3.5 h-3.5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>

                <!-- Date -->
                <div class="flex items-center gap-1.5 text-gray-600 text-sm border border-gray-200 rounded-lg px-3 py-1.5 bg-white">
                    <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span id="current-navbar-date">{{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</span>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto bg-gray-50 pb-6">
            <div class="p-6 w-full">

                <!-- Broadcast Info Banner -->
                <div class="mb-5 bg-white border border-[#1e6b45]/20 rounded-xl px-5 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-3 shadow-sm">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-[#e8f5ee] flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-[#1e6b45]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-800">Broadcast: dr. Andi, Sp.PD – Poli Penyakit Dalam</p>
                            <p class="text-xs text-gray-500 mt-0.5">Tanggal: <span class="font-semibold text-gray-700">{{ \Carbon\Carbon::now()->locale('id')->isoFormat('D MMMM YYYY') }}</span> &nbsp;|&nbsp; Jam Berhalangan: <span class="font-semibold text-gray-700">09:00 – 12:00</span></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center gap-1.5 text-xs font-bold bg-green-50 text-green-700 border border-green-200 px-3 py-1.5 rounded-full">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse inline-block"></span>
                            Sedang Berjalan
                        </span>
                        <span class="text-xs text-gray-400 font-medium">Dikirim pukul 09:02</span>
                    </div>
                </div>

                <!-- ============= STAT CARDS ============= -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">

                    <!-- Total Target -->
                    <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm">
                        <p class="text-xs text-gray-500 font-semibold mb-2 uppercase tracking-wider">Total Target</p>
                        <p class="text-3xl font-extrabold text-gray-900 leading-none">120</p>
                        <p class="text-xs text-gray-400 mt-1.5 font-medium">Pasien</p>
                    </div>

                    <!-- Berhasil -->
                    <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm">
                        <p class="text-xs text-gray-500 font-semibold mb-2 uppercase tracking-wider">Berhasil</p>
                        <p class="text-3xl font-extrabold text-gray-900 leading-none">118</p>
                        <p class="text-xs text-green-600 font-bold mt-1.5">(98%)</p>
                    </div>

                    <!-- Retry -->
                    <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm">
                        <p class="text-xs text-gray-500 font-semibold mb-2 uppercase tracking-wider">Retry</p>
                        <p class="text-3xl font-extrabold text-gray-900 leading-none">2</p>
                        <p class="text-xs text-orange-500 font-bold mt-1.5">(2%)</p>
                    </div>

                    <!-- Gagal -->
                    <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm">
                        <p class="text-xs text-gray-500 font-semibold mb-2 uppercase tracking-wider">Gagal</p>
                        <p class="text-3xl font-extrabold text-gray-900 leading-none">0</p>
                        <p class="text-xs text-red-500 font-bold mt-1.5">(0%)</p>
                    </div>
                </div>

                <!-- ============= PROGRESS PENGIRIMAN ============= -->
                <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm mb-6">
                    <div class="flex items-center justify-between mb-3">
                        <p class="text-sm font-bold text-gray-800">Progress Pengiriman</p>
                        <span id="progress-pct-label" class="text-sm font-extrabold text-gray-800">0%</span>
                    </div>
                    <!-- Progress bar track -->
                    <div class="w-full h-3.5 bg-gray-100 rounded-full overflow-hidden">
                        <div
                            id="progress-bar"
                            class="h-full rounded-full transition-all duration-1000 ease-out"
                            style="width: 0%; background: linear-gradient(90deg, #1e6b45 0%, #3ab572 100%);"
                        ></div>
                    </div>
                    <!-- Legend Row -->
                    <div class="flex flex-wrap gap-4 mt-3 text-xs text-gray-500 font-medium">
                        <span class="flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-[#1e6b45] inline-block"></span>
                            Berhasil (118)
                        </span>
                        <span class="flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-orange-400 inline-block"></span>
                            Retry (2)
                        </span>
                        <span class="flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-red-400 inline-block"></span>
                            Gagal (0)
                        </span>
                    </div>
                </div>

                <!-- ============= TABEL DAFTAR PENGIRIMAN ============= -->
                <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                    <!-- Table Header Bar -->
                    <div class="px-5 py-4 border-b border-gray-100 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <h3 class="font-bold text-gray-900 text-sm">Daftar Pengiriman</h3>
                        <!-- Search input -->
                        <div class="flex items-center gap-2">
                            <div class="relative">
                                <input
                                    id="tabel-search"
                                    type="text"
                                    placeholder="Cari nama / nomor..."
                                    oninput="filterTable(this.value)"
                                    class="w-48 border border-gray-200 rounded-lg text-xs px-3 py-2 pl-8 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/30 focus:border-[#1e6b45] transition-colors bg-gray-50"
                                >
                                <svg class="absolute left-2.5 top-1/2 -translate-y-1/2 w-3.5 h-3.5 text-gray-400 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                            <!-- Export Excel Button -->
                            <button
                                id="export-excel-btn"
                                onclick="exportExcel()"
                                class="flex items-center gap-1.5 px-4 py-2 bg-[#1e6b45] hover:bg-[#175438] text-white text-xs font-bold rounded-lg transition-colors shadow-sm cursor-pointer whitespace-nowrap"
                            >
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                                </svg>
                                Export Excel
                            </button>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-gray-700">
                            <thead class="bg-gray-50 border-b border-gray-200 text-[10px] font-bold text-gray-500 uppercase tracking-wider">
                                <tr>
                                    <th class="px-5 py-3.5 w-14">No.</th>
                                    <th class="px-5 py-3.5">Nama Pasien</th>
                                    <th class="px-5 py-3.5">No. WhatsApp</th>
                                    <th class="px-5 py-3.5 w-28">Status</th>
                                    <th class="px-5 py-3.5 w-20">Waktu</th>
                                    <th class="px-5 py-3.5 w-16 text-center">Retry</th>
                                </tr>
                            </thead>
                            <tbody id="tabel-body" class="divide-y divide-gray-100 font-medium text-xs text-gray-800">
                                <!-- Row 1 -->
                                <tr class="hover:bg-gray-50/60 transition-colors tabel-row" data-name="budi santoso" data-phone="6281234567000">
                                    <td class="px-5 py-3.5 text-gray-400">1</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">Budi Santoso</td>
                                    <td class="px-5 py-3.5 text-gray-500">6281234567000</td>
                                    <td class="px-5 py-3.5">
                                        <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 border border-green-200 text-[10px] font-bold px-2.5 py-0.5 rounded-full">
                                            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                            Berhasil
                                        </span>
                                    </td>
                                    <td class="px-5 py-3.5 text-gray-500">09:02</td>
                                    <td class="px-5 py-3.5 text-center text-gray-500">0</td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="hover:bg-gray-50/60 transition-colors tabel-row" data-name="siti aisyah" data-phone="6281234567001">
                                    <td class="px-5 py-3.5 text-gray-400">2</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">Siti Aisyah</td>
                                    <td class="px-5 py-3.5 text-gray-500">6281234567001</td>
                                    <td class="px-5 py-3.5">
                                        <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 border border-green-200 text-[10px] font-bold px-2.5 py-0.5 rounded-full">
                                            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                            Berhasil
                                        </span>
                                    </td>
                                    <td class="px-5 py-3.5 text-gray-500">09:02</td>
                                    <td class="px-5 py-3.5 text-center text-gray-500">0</td>
                                </tr>
                                <!-- Row 3 (Retry) -->
                                <tr class="hover:bg-gray-50/60 transition-colors tabel-row" data-name="ahmad fauzi" data-phone="6281234567002">
                                    <td class="px-5 py-3.5 text-gray-400">3</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">Ahmad Fauzi</td>
                                    <td class="px-5 py-3.5 text-gray-500">6281234567002</td>
                                    <td class="px-5 py-3.5">
                                        <span class="inline-flex items-center gap-1 bg-orange-50 text-orange-600 border border-orange-200 text-[10px] font-bold px-2.5 py-0.5 rounded-full">
                                            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                                            Retry
                                        </span>
                                    </td>
                                    <td class="px-5 py-3.5 text-gray-500">09:03</td>
                                    <td class="px-5 py-3.5 text-center text-orange-500 font-bold">1</td>
                                </tr>
                                <!-- Row 4 -->
                                <tr class="hover:bg-gray-50/60 transition-colors tabel-row" data-name="dewi lestari" data-phone="6281234567003">
                                    <td class="px-5 py-3.5 text-gray-400">4</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">Dewi Lestari</td>
                                    <td class="px-5 py-3.5 text-gray-500">6281234567003</td>
                                    <td class="px-5 py-3.5">
                                        <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 border border-green-200 text-[10px] font-bold px-2.5 py-0.5 rounded-full">
                                            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                            Berhasil
                                        </span>
                                    </td>
                                    <td class="px-5 py-3.5 text-gray-500">09:03</td>
                                    <td class="px-5 py-3.5 text-center text-gray-500">0</td>
                                </tr>
                                <!-- Row 5 -->
                                <tr class="hover:bg-gray-50/60 transition-colors tabel-row" data-name="eko prasetyo" data-phone="6281234567004">
                                    <td class="px-5 py-3.5 text-gray-400">5</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">Eko Prasetyo</td>
                                    <td class="px-5 py-3.5 text-gray-500">6281234567004</td>
                                    <td class="px-5 py-3.5">
                                        <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 border border-green-200 text-[10px] font-bold px-2.5 py-0.5 rounded-full">
                                            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                            Berhasil
                                        </span>
                                    </td>
                                    <td class="px-5 py-3.5 text-gray-500">09:03</td>
                                    <td class="px-5 py-3.5 text-center text-gray-500">0</td>
                                </tr>

                                <!-- === ROWS HIDDEN INITIALLY (6–120) shown via "Lihat semua" === -->
                                <tr class="hover:bg-gray-50/60 transition-colors tabel-row hidden extra-row" data-name="maya rahayu" data-phone="6281234567005">
                                    <td class="px-5 py-3.5 text-gray-400">6</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">Maya Rahayu</td>
                                    <td class="px-5 py-3.5 text-gray-500">6281234567005</td>
                                    <td class="px-5 py-3.5">
                                        <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 border border-green-200 text-[10px] font-bold px-2.5 py-0.5 rounded-full">
                                            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                            Berhasil
                                        </span>
                                    </td>
                                    <td class="px-5 py-3.5 text-gray-500">09:04</td>
                                    <td class="px-5 py-3.5 text-center text-gray-500">0</td>
                                </tr>
                                <tr class="hover:bg-gray-50/60 transition-colors tabel-row hidden extra-row" data-name="rizky pratama" data-phone="6281234567006">
                                    <td class="px-5 py-3.5 text-gray-400">7</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">Rizky Pratama</td>
                                    <td class="px-5 py-3.5 text-gray-500">6281234567006</td>
                                    <td class="px-5 py-3.5">
                                        <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 border border-green-200 text-[10px] font-bold px-2.5 py-0.5 rounded-full">
                                            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                            Berhasil
                                        </span>
                                    </td>
                                    <td class="px-5 py-3.5 text-gray-500">09:04</td>
                                    <td class="px-5 py-3.5 text-center text-gray-500">0</td>
                                </tr>
                                <tr class="hover:bg-gray-50/60 transition-colors tabel-row hidden extra-row" data-name="linda wati" data-phone="6281234567007">
                                    <td class="px-5 py-3.5 text-gray-400">8</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">Linda Wati</td>
                                    <td class="px-5 py-3.5 text-gray-500">6281234567007</td>
                                    <td class="px-5 py-3.5">
                                        <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 border border-green-200 text-[10px] font-bold px-2.5 py-0.5 rounded-full">
                                            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                            Berhasil
                                        </span>
                                    </td>
                                    <td class="px-5 py-3.5 text-gray-500">09:05</td>
                                    <td class="px-5 py-3.5 text-center text-gray-500">0</td>
                                </tr>
                                <tr class="hover:bg-gray-50/60 transition-colors tabel-row hidden extra-row" data-name="hendra gunawan" data-phone="6281234567008">
                                    <td class="px-5 py-3.5 text-gray-400">9</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">Hendra Gunawan</td>
                                    <td class="px-5 py-3.5 text-gray-500">6281234567008</td>
                                    <td class="px-5 py-3.5">
                                        <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 border border-green-200 text-[10px] font-bold px-2.5 py-0.5 rounded-full">
                                            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                            Berhasil
                                        </span>
                                    </td>
                                    <td class="px-5 py-3.5 text-gray-500">09:05</td>
                                    <td class="px-5 py-3.5 text-center text-gray-500">0</td>
                                </tr>
                                <tr class="hover:bg-gray-50/60 transition-colors tabel-row hidden extra-row" data-name="yuni astuti" data-phone="6281234567009">
                                    <td class="px-5 py-3.5 text-gray-400">10</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">Yuni Astuti</td>
                                    <td class="px-5 py-3.5 text-gray-500">6281234567009</td>
                                    <td class="px-5 py-3.5">
                                        <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 border border-green-200 text-[10px] font-bold px-2.5 py-0.5 rounded-full">
                                            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                            Berhasil
                                        </span>
                                    </td>
                                    <td class="px-5 py-3.5 text-gray-500">09:06</td>
                                    <td class="px-5 py-3.5 text-center text-gray-500">0</td>
                                </tr>

                                <!-- Empty state when search finds nothing -->
                                <tr id="empty-row" class="hidden">
                                    <td colspan="6" class="px-5 py-10 text-center text-gray-400 text-xs font-medium">
                                        <div class="flex flex-col items-center gap-2">
                                            <svg class="w-8 h-8 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            Tidak ada data yang sesuai pencarian.
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Table Footer -->
                    <div class="px-5 py-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-3">
                        <span id="lihat-semua-link" onclick="lihatSemua()" class="text-sm font-semibold text-[#0071BC] hover:underline cursor-pointer select-none">Lihat semua</span>
                        <p id="table-count-info" class="text-xs text-gray-500 font-medium">Menampilkan 1 - 5 dari 120 data</p>
                    </div>
                </div>

            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-100 py-3 text-center shrink-0">
            <p class="text-xs text-gray-400">&copy; {{ date('Y') }} RSUD Kajen. Semua hak dilindungi.</p>
        </footer>
    </div>

    <!-- ======================== TOAST NOTIFICATION ======================== -->
    <div id="toast-container" class="fixed bottom-6 right-6 z-50 flex flex-col gap-3 pointer-events-none"></div>

    <!-- ======================== SCRIPTS ======================== -->
    <script>
        // ---- Sidebar Toggle ----
        const sidebar = document.getElementById('sidebar');
        const backdrop = document.getElementById('sidebar-backdrop');
        let isOpen = false;

        function toggleSidebar() {
            isOpen = !isOpen;
            if (isOpen) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                backdrop.classList.remove('hidden');
                requestAnimationFrame(() => backdrop.classList.add('opacity-100'));
            } else {
                closeSidebar();
            }
        }

        function closeSidebar() {
            isOpen = false;
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('translate-x-0');
            backdrop.classList.add('hidden');
            backdrop.classList.remove('opacity-100');
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeSidebar();
        });

        // ---- Animate Progress Bar on Page Load ----
        window.addEventListener('DOMContentLoaded', () => {
            const targetPct = 98;
            const bar = document.getElementById('progress-bar');
            const label = document.getElementById('progress-pct-label');
            let current = 0;

            // Small delay for visual effect
            setTimeout(() => {
                bar.style.width = targetPct + '%';

                // Animate the number
                const interval = setInterval(() => {
                    current++;
                    label.textContent = current + '%';
                    if (current >= targetPct) clearInterval(interval);
                }, 10);
            }, 300);
        });

        // ---- Filter Table (Real-time Search) ----
        let showingAll = false;

        function filterTable(query) {
            const rows = document.querySelectorAll('.tabel-row');
            const emptyRow = document.getElementById('empty-row');
            const normalizedQuery = query.toLowerCase().trim();
            let visibleCount = 0;

            rows.forEach(row => {
                const name = row.getAttribute('data-name') || '';
                const phone = row.getAttribute('data-phone') || '';
                const matches = name.includes(normalizedQuery) || phone.includes(normalizedQuery);

                if (normalizedQuery === '') {
                    // If no query, respect the showingAll state
                    const isExtra = row.classList.contains('extra-row');
                    if (!showingAll && isExtra) {
                        row.classList.add('hidden');
                    } else {
                        row.classList.remove('hidden');
                        visibleCount++;
                    }
                } else {
                    if (matches) {
                        row.classList.remove('hidden');
                        visibleCount++;
                    } else {
                        row.classList.add('hidden');
                    }
                }
            });

            emptyRow.classList.toggle('hidden', visibleCount > 0);
            updateTableInfo(normalizedQuery, visibleCount);
        }

        function updateTableInfo(query, visibleCount) {
            const info = document.getElementById('table-count-info');
            if (query) {
                info.textContent = `Menampilkan ${visibleCount} hasil pencarian dari 120 data`;
            } else if (showingAll) {
                info.textContent = `Menampilkan semua 120 data`;
            } else {
                info.textContent = `Menampilkan 1 - 5 dari 120 data`;
            }
        }

        // ---- Lihat Semua ----
        function lihatSemua() {
            const extraRows = document.querySelectorAll('.extra-row');
            const link = document.getElementById('lihat-semua-link');
            const info = document.getElementById('table-count-info');
            const searchVal = document.getElementById('tabel-search').value;

            if (!showingAll) {
                extraRows.forEach(row => row.classList.remove('hidden'));
                link.textContent = 'Sembunyikan';
                info.textContent = 'Menampilkan semua 120 data';
                showingAll = true;
            } else {
                if (!searchVal) {
                    extraRows.forEach(row => row.classList.add('hidden'));
                    link.textContent = 'Lihat semua';
                    info.textContent = 'Menampilkan 1 - 5 dari 120 data';
                    showingAll = false;
                }
            }
        }

        // ---- Export Excel (Toast Notification) ----
        function exportExcel() {
            showToast('success', 'Export berhasil!', 'Data monitoring notifikasi telah diekspor ke file Excel.');
        }

        // ---- Toast Engine ----
        function showToast(type, title, message) {
            const container = document.getElementById('toast-container');

            const colorMap = {
                success: { bg: 'bg-white', border: 'border-green-400', icon: '#16a34a', ring: 'ring-green-100' },
                error:   { bg: 'bg-white', border: 'border-red-400',   icon: '#dc2626', ring: 'ring-red-100'   },
                info:    { bg: 'bg-white', border: 'border-blue-400',  icon: '#2563eb', ring: 'ring-blue-100'  },
            };
            const c = colorMap[type] || colorMap.info;

            const iconSvg = type === 'success'
                ? `<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>`
                : `<svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>`;

            const toast = document.createElement('div');
            toast.className = `pointer-events-auto flex items-start gap-3 ${c.bg} border-l-4 ${c.border} rounded-xl shadow-xl px-4 py-3.5 max-w-sm ring-4 ${c.ring} translate-x-full opacity-0 transition-all duration-300`;
            toast.innerHTML = `
                <div class="shrink-0 mt-0.5 w-6 h-6 rounded-full flex items-center justify-center text-white" style="background:${c.icon}">
                    ${iconSvg}
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-bold text-gray-900">${title}</p>
                    <p class="text-xs text-gray-500 mt-0.5 leading-relaxed">${message}</p>
                </div>
                <button onclick="this.parentElement.remove()" class="shrink-0 text-gray-400 hover:text-gray-600 transition-colors mt-0.5 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            `;

            container.appendChild(toast);

            // Trigger entrance animation
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    toast.classList.remove('translate-x-full', 'opacity-0');
                    toast.classList.add('translate-x-0', 'opacity-100');
                });
            });

            // Auto dismiss after 4s
            setTimeout(() => {
                toast.classList.add('translate-x-full', 'opacity-0');
                setTimeout(() => toast.remove(), 300);
            }, 4000);
        }
    </script>
</body>
</html>
