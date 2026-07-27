<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan - RSUD Kajen</title>

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
<body class="bg-[#f8fafc] text-gray-800 font-sans flex h-screen overflow-hidden">

<!-- ======================== SIDEBAR ======================== -->
    <aside class="w-52 bg-[#1e6b45] text-white flex flex-col shrink-0 relative overflow-hidden">

        <!-- Logo -->
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
                <!-- Dashboard Active -->
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
                <!-- Monitoring Notifikasi -->
                <li>
                    <a href="{{ route('monitoring-notifikasi') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
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
                    <a href="{{ route('laporan') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-white/20 text-white text-sm font-semibold">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Laporan
                    </a>
                </li>
                <!-- Pengaturan -->
                <li>
                    <a href="{{ route('pengaturan') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
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
            
            <h1 class="text-base font-bold text-gray-800">Laporan
                
            </h1>

            <div class="ml-auto flex items-center gap-3">

                <!-- Poli Badge -->
                <div class="relative inline-block text-left">

                    <!-- Button Dropdown -->
                    <button id="dropdownButton" onclick="toggleDropdown()"
                        class="flex items-center gap-2 px-3 py-2 border border-[#1e6b45]/30 rounded-lg bg-[#1e6b45]/5 text-[#1e6b45] text-sm font-medium hover:bg-[#1e6b45]/10 transition-colors cursor-pointer">

                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>

                        <span id="selectedPoli">Poli Penyakit Dalam</span>

                        <svg class="w-4 h-4 transition-transform duration-200" id="arrowIcon" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown -->
                    <div id="dropdownMenu"
                        class="hidden absolute right-0 mt-2 w-60 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden z-50">

                        <button onclick="selectPoli('Semua Poli')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Semua Poli
                        </button>

                        <button onclick="selectPoli('Poli Penyakit Dalam')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Penyakit Dalam
                        </button>

                        <button onclick="selectPoli('Poli Anak')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Anak
                        </button>

                        <button onclick="selectPoli('Poli Bedah')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Bedah
                        </button>

                        <button onclick="selectPoli('Poli Kandungan')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Kandungan
                        </button>

                        <button onclick="selectPoli('Poli Mata')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Mata
                        </button>

                        <button onclick="selectPoli('Poli Gigi')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Gigi
                        </button>

                        <button onclick="selectPoli('Poli THT - KL')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli THT - KL
                        </button>

                        <button onclick="selectPoli('Poli Jantung dan Pembuluh Darah')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Jantung dan Pembuluh Darah
                        </button>

                        <button onclick="selectPoli('Poli Orthopedi')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Orthopedi
                        </button>

                        <button onclick="selectPoli('Poli Saraf')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Saraf
                        </button>

                        <button onclick="selectPoli('Poli Rehab Medik')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Rehab Medik
                        </button>

                        <button onclick="selectPoli('Poli Kesehatan Jiwa')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Kesehatan Jiwa
                        </button>

                        <button onclick="selectPoli('Poli Kulit dan Kelamin')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Kulit dan Kelamin
                        </button>

                        <button onclick="selectPoli('Poli Paru')"
                            class="w-full text-left px-4 py-3 hover:bg-green-50 text-sm">
                            Poli Paru
                        </button>
                    </div>

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


        <!-- Page Content Scrollable -->
        <main class="flex-1 overflow-y-auto bg-gray-50 p-6 space-y-6">

            <!-- Title & Export Buttons Header -->
            <div class="flex items-center justify-end gap-3 w-full">

                <div class="flex items-center gap-3 shrink-0">
                    <!-- Export PDF -->
                    <button class="flex items-center gap-2 px-4 py-2 bg-white border border-red-200 text-red-600 rounded-xl hover:bg-red-50 text-xs font-semibold transition-colors shadow-2xs cursor-pointer">
                        <svg class="w-4 h-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Export PDF
                    </button>

                    <!-- Export Excel -->
                    <button class="flex items-center gap-2 px-4 py-2 bg-white border border-emerald-200 text-emerald-700 rounded-xl hover:bg-emerald-50 text-xs font-semibold transition-colors shadow-2xs cursor-pointer">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Export Excel
                    </button>
                </div>
            </div>

            <!-- Filter Laporan Card -->
            <div class="bg-white rounded-2xl border border-gray-100 shadow-2xs p-6 space-y-4">
                <h3 class="text-sm font-bold text-gray-900">Filter Laporan</h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 items-end">
                    <!-- Periode -->
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1.5">Periode</label>
                        <div class="relative">
                            <select class="w-full border border-gray-200 rounded-xl px-3.5 py-2.5 text-xs text-gray-800 bg-white font-medium focus:outline-none focus:border-[#0e6037] appearance-none pr-8 cursor-pointer shadow-2xs">
                                <option selected>Bulanan</option>
                                <option>Mingguan</option>
                                <option>Harian</option>
                            </select>
                            <svg class="absolute right-3.5 top-1/2 -translate-y-1/2 w-3.5 h-3.5 text-gray-400 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Bulan -->
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1.5">Bulan</label>
                        <div class="relative">
                            <select class="w-full border border-gray-200 rounded-xl px-3.5 py-2.5 text-xs text-gray-800 bg-white font-medium focus:outline-none focus:border-[#0e6037] appearance-none pr-8 cursor-pointer shadow-2xs">
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option selected>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>
                            <svg class="absolute right-3.5 top-1/2 -translate-y-1/2 w-3.5 h-3.5 text-gray-400 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Tahun -->
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1.5">Tahun</label>
                        <div class="relative">
                            <select class="w-full border border-gray-200 rounded-xl px-3.5 py-2.5 text-xs text-gray-800 bg-white font-medium focus:outline-none focus:border-[#0e6037] appearance-none pr-8 cursor-pointer shadow-2xs">
                                <option>2024</option>
                                <option>2025</option>
                                <option selected>2026</option>
                            </select>
                            <svg class="absolute right-3.5 top-1/2 -translate-y-1/2 w-3.5 h-3.5 text-gray-400 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Poli -->
                    <div>
                        <label class="block text-xs font-medium text-gray-600 mb-1.5">Poli</label>
                        <div class="relative">
                            <select class="w-full border border-gray-200 rounded-xl px-3.5 py-2.5 text-xs text-gray-800 bg-white font-medium focus:outline-none focus:border-[#0e6037] appearance-none pr-8 cursor-pointer shadow-2xs">
                                <option selected>Semua Poli</option>
                                <option>Poli Penyakit Dalam</option>
                                <option>Poli Anak</option>
                                <option>Poli Bedah</option>
                            </select>
                            <svg class="absolute right-3.5 top-1/2 -translate-y-1/2 w-3.5 h-3.5 text-gray-400 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Generate Laporan Button -->
                    <div>
                        <button class="w-full flex items-center justify-center gap-2 px-4 py-2.5 bg-[#0e6037] hover:bg-[#0b4d2c] text-white text-xs font-semibold rounded-xl transition-colors shadow-2xs cursor-pointer">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            Generate Laporan
                        </button>
                    </div>
                </div>
            </div>

            <!-- 4 Stat Metric Cards Row -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                <!-- 1. Total Broadcast -->
                <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-2xs flex items-center gap-4">
                    <div class="w-13 h-13 rounded-full bg-blue-50 text-blue-500 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.684A1.76 1.76 0 013 12V8c0-.972.788-1.762 1.76-1.762.668 0 1.258.37 1.56.918l3.68 7.028z"/>
                        </svg>
                    </div>
                    <div class="space-y-0.5">
                        <p class="text-xs font-semibold text-gray-500">Total Broadcast</p>
                        <p class="text-3xl font-extrabold text-gray-900 tracking-tight">45</p>
                        <p class="text-[11px] font-medium text-gray-400">Kali</p>
                    </div>
                </div>

                <!-- 2. Total Pasien -->
                <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-2xs flex items-center gap-4">
                    <div class="w-13 h-13 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="space-y-0.5">
                        <p class="text-xs font-semibold text-gray-500">Total Pasien</p>
                        <p class="text-3xl font-extrabold text-gray-900 tracking-tight">420</p>
                        <p class="text-[11px] font-medium text-gray-400">Pasien</p>
                    </div>
                </div>

                <!-- 3. Berhasil -->
                <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-2xs flex items-center gap-4">
                    <div class="w-13 h-13 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <div class="space-y-0.5">
                        <p class="text-xs font-semibold text-gray-500">Berhasil</p>
                        <p class="text-3xl font-extrabold text-gray-900 tracking-tight">415</p>
                        <p class="text-[11px] font-normal text-gray-400"><span class="font-bold text-emerald-600">98,81%</span> dari total</p>
                    </div>
                </div>

                <!-- 4. Gagal -->
                <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-2xs flex items-center gap-4">
                    <div class="w-13 h-13 rounded-full bg-red-50 text-red-500 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </div>
                    <div class="space-y-0.5">
                        <p class="text-xs font-semibold text-gray-500">Gagal</p>
                        <p class="text-3xl font-extrabold text-gray-900 tracking-tight">5</p>
                        <p class="text-[11px] font-normal text-gray-400"><span class="font-bold text-red-500">1,19%</span> dari total</p>
                    </div>
                </div>

            </div>

            <!-- Middle Section: 2 Cards Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <!-- Left Card: Grafik Ringkasan -->
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-2xs flex flex-col justify-between space-y-6">
                    <h3 class="text-base font-bold text-gray-900">Grafik Ringkasan</h3>

                    <div class="flex flex-col sm:flex-row items-center justify-around gap-6 my-auto">
                        <!-- Donut Chart Canvas / SVG -->
                        <div class="relative w-48 h-48 flex items-center justify-center shrink-0">
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 160 160">
                                <!-- Background Circle (Red slice fallback) -->
                                <circle cx="80" cy="80" r="62" fill="none" stroke="#ef4444" stroke-width="22"/>
                                <!-- Main Green Slice (98.81%) -->
                                <!-- Circumference = 2 * PI * 62 = 389.55 -->
                                <!-- 98.81% of 389.55 = 384.91 -->
                                <circle cx="80" cy="80" r="62" fill="none" stroke="#0e6037" stroke-width="22"
                                        stroke-dasharray="384.91 389.55"
                                        stroke-dashoffset="0" stroke-linecap="butt"/>
                            </svg>
                            <!-- Inner Donut Content -->
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                                <span class="text-2xl font-extrabold text-gray-900 tracking-tight">98,81%</span>
                                <span class="text-xs font-medium text-gray-400 mt-0.5">Berhasil</span>
                            </div>
                        </div>

                        <!-- Legend Details -->
                        <div class="space-y-4 w-full sm:w-auto">
                            <!-- Berhasil -->
                            <div class="flex items-center gap-3">
                                <span class="w-3.5 h-3.5 rounded-full bg-[#0e6037] shrink-0"></span>
                                <div class="flex items-center justify-between gap-6 text-sm">
                                    <span class="font-medium text-gray-600">Berhasil</span>
                                    <span class="font-bold text-gray-900">415 <span class="text-xs text-gray-500 font-normal">(98,81%)</span></span>
                                </div>
                            </div>
                            <div class="border-b border-gray-100"></div>
                            <!-- Gagal -->
                            <div class="flex items-center gap-3">
                                <span class="w-3.5 h-3.5 rounded-full bg-red-500 shrink-0"></span>
                                <div class="flex items-center justify-between gap-6 text-sm">
                                    <span class="font-medium text-gray-600">Gagal</span>
                                    <span class="font-bold text-gray-900">5 <span class="text-xs text-gray-500 font-normal">(1,19%)</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Card: Ringkasan Detail -->
                <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-2xs flex flex-col justify-between space-y-4">
                    <h3 class="text-base font-bold text-gray-900">Ringkasan Detail</h3>

                    <div class="divide-y divide-gray-100">
                        <!-- Item 1: Total Broadcast -->
                        <div class="py-3 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-500 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.684A1.76 1.76 0 013 12V8c0-.972.788-1.762 1.76-1.762.668 0 1.258.37 1.56.918l3.68 7.028z"/>
                                    </svg>
                                </div>
                                <span class="text-xs sm:text-sm font-medium text-gray-600">Total Broadcast</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-gray-400 text-xs font-semibold">:</span>
                                <span class="text-xs sm:text-sm font-bold text-gray-900 w-24 text-left">45 Kali</span>
                            </div>
                        </div>

                        <!-- Item 2: Total Pasien -->
                        <div class="py-3 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                                <span class="text-xs sm:text-sm font-medium text-gray-600">Total Pasien</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-gray-400 text-xs font-semibold">:</span>
                                <span class="text-xs sm:text-sm font-bold text-gray-900 w-24 text-left">420 Pasien</span>
                            </div>
                        </div>

                        <!-- Item 3: Broadcast Berhasil -->
                        <div class="py-3 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <span class="text-xs sm:text-sm font-medium text-gray-600">Broadcast Berhasil</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-gray-400 text-xs font-semibold">:</span>
                                <span class="text-xs sm:text-sm font-bold text-gray-900 w-24 text-left">415 Pasien</span>
                            </div>
                        </div>

                        <!-- Item 4: Broadcast Gagal -->
                        <div class="py-3 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-red-50 text-red-500 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </div>
                                <span class="text-xs sm:text-sm font-medium text-gray-600">Broadcast Gagal</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-gray-400 text-xs font-semibold">:</span>
                                <span class="text-xs sm:text-sm font-bold text-gray-900 w-24 text-left">5 Pasien</span>
                            </div>
                        </div>

                        <!-- Item 5: Tingkat Keberhasilan -->
                        <div class="py-3 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-500 flex items-center justify-center shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/>
                                    </svg>
                                </div>
                                <span class="text-xs sm:text-sm font-medium text-gray-600">Tingkat Keberhasilan</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="text-gray-400 text-xs font-semibold">:</span>
                                <span class="text-xs sm:text-sm font-bold text-gray-900 w-24 text-left">98,81 %</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Card: Informasi Laporan -->
            <div class="bg-white rounded-2xl border border-gray-100 p-6 shadow-2xs space-y-4">
                <h3 class="text-base font-bold text-gray-900">Informasi Laporan</h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 divide-y sm:divide-y-0 lg:divide-x divide-gray-100">

                    <!-- Item 1: Periode Laporan -->
                    <div class="flex items-center gap-4 lg:pr-4 pt-2 sm:pt-0">
                        <div class="w-12 h-12 rounded-xl bg-gray-50 border border-gray-100 text-gray-600 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-gray-400">Periode Laporan</p>
                            <p class="text-sm font-bold text-gray-900 mt-0.5">01 - 31 Juli 2026</p>
                        </div>
                    </div>

                    <!-- Item 2: Poli -->
                    <div class="flex items-center gap-4 lg:px-4 pt-4 sm:pt-0">
                        <div class="w-12 h-12 rounded-xl bg-gray-50 border border-gray-100 text-gray-600 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-gray-400">Poli</p>
                            <p class="text-sm font-bold text-gray-900 mt-0.5">Semua Poli</p>
                        </div>
                    </div>

                    <!-- Item 3: Generate Pada -->
                    <div class="flex items-center gap-4 lg:px-4 pt-4 sm:pt-0">
                        <div class="w-12 h-12 rounded-xl bg-gray-50 border border-gray-100 text-gray-600 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-gray-400">Generate Pada</p>
                            <p class="text-sm font-bold text-gray-900 mt-0.5">23 Juli 2026, 08:55 WIB</p>
                        </div>
                    </div>

                    <!-- Item 4: Dibuat Oleh -->
                    <div class="flex items-center gap-4 lg:pl-4 pt-4 sm:pt-0">
                        <div class="w-12 h-12 rounded-xl bg-gray-50 border border-gray-100 text-gray-600 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-medium text-gray-400">Dibuat Oleh</p>
                            <p class="text-sm font-bold text-gray-900 mt-0.5">Admin</p>
                        </div>
                    </div>

                </div>
            </div>

        </main>
    </div>
    <script>
        function toggleDropdown() {
            document.getElementById('dropdownMenu').classList.toggle('hidden');
            document.getElementById('arrowIcon').classList.toggle('rotate-180');
        }

        function selectPoli(namaPoli) {

            document.getElementById('selectedPoli').innerText = namaPoli;

            document.getElementById('dropdownMenu').classList.add('hidden');
            document.getElementById('arrowIcon').classList.remove('rotate-180');

            // nanti disini bisa memanggil ajax / reload data
            console.log("Poli dipilih :", namaPoli);
        }

        // Menutup dropdown saat klik di luar
        window.addEventListener('click', function(e) {

            if (!document.getElementById('dropdownButton').contains(e.target)) {
                document.getElementById('dropdownMenu').classList.add('hidden');
                document.getElementById('arrowIcon').classList.remove('rotate-180');
            }

        });
    </script>
</body>
</html>
