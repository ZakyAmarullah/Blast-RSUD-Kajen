<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Booking - RSUD Kajen</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body {
                font-family: 'Instrument Sans', sans-serif;
            }
        </style>
    @endif
</head>

<body class="bg-gray-100 text-gray-800 font-sans flex h-screen overflow-hidden">

    <!-- ======================== SIDEBAR ======================== -->
    <!-- Backdrop Overlay -->
    <div id="sidebar-backdrop"
        class="fixed inset-0 z-30 bg-black/40 backdrop-blur-sm hidden transition-opacity duration-300"
        onclick="toggleSidebar()"></div>

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
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <!-- Data Booking -->
                <li>
                    <a href="{{ route('data-booking') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-white/20 text-white text-sm font-semibold">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Data Booking
                    </a>
                </li>
                <!-- Dokter Berhalangan -->
                <li>
                    <a href="{{ route('dokter-berhalangan') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Dokter Berhalangan
                    </a>
                </li>
                <!-- Monitoring Notifikasi -->
                <li>
                    <a href="{{ route('monitoring-notifikasi') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        Monitoring Notifikasi
                    </a>
                </li>
                <!-- Riwayat Notifikasi -->
                <li>
                    <a href="{{ route('riwayat-notifikasi') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        Riwayat Notifikasi
                    </a>
                </li>
                <!-- Laporan -->
                <li>
                    <a href="{{ route('laporan') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Laporan
                    </a>
                </li>
                <!-- Pengaturan -->
                <li>
                    <a href="{{ route('pengaturan') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
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
                <button type="submit"
                    class="w-full flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors cursor-pointer">
                    <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
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

            <h1 class="text-base font-bold text-gray-800">Data Booking</h1>

            <div class="ml-auto flex items-center gap-3">

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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
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


                <!-- Date -->
                <div
                    class="flex items-center gap-1.5 text-gray-600 text-sm border border-gray-200 rounded-lg px-3 py-1.5 bg-white">
                    <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span
                        id="current-navbar-date">{{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</span>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto bg-gray-50 p-6">

            <!-- Main Content Card -->
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6 space-y-6">

                <!-- Filters & Search Row -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-end">

                    <!-- Tanggal Input -->
                    <div class="lg:col-span-2">
                        <label for="booking-date"
                            class="block text-xs font-semibold text-gray-600 mb-2">Tanggal</label>
                        <div class="relative">
                            <input type="date" id="booking-date"
                                value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                class="w-full h-11 border border-gray-300 rounded-lg px-3 text-sm
                                    focus:ring-2 focus:ring-[#1e6b45]/20 focus:border-[#1e6b45]">
                        </div>
                    </div>

                    <!-- Poli Dropdown -->
                    <div class="lg:col-span-3">
                        <label for="booking-poli" class="block text-xs font-semibold text-gray-600 mb-2">Poli</label>
                        <div class="relative">
                            <select id="booking-poli"
                                class="w-full h-11 border border-gray-300 rounded-lg px-3 text-sm
                                    appearance-none
                                    focus:ring-2 focus:ring-[#1e6b45]/20 focus:border-[#1e6b45]">
                                <option>Poli Penyakit Dalam</option>
                                <option>Poli Anak</option>
                                <option>Poli Bedah</option>
                                <option>Poli Jantung</option>
                            </select>
                            <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Search Input -->
                    <div class="lg:col-span-5">
                        <label class="block text-xs font-semibold text-gray-600 mb-2 invisible">
                            Search
                        </label>
                        <input type="text" id="booking-search" placeholder="Cari nama / no. RM / dokter..."
                            class="w-full h-11 border border-gray-300 rounded-lg px-3 text-sm
                                focus:ring-2 focus:ring-[#1e6b45]/20 focus:border-[#1e6b45]">
                    </div>

                    <div class="lg:col-span-2">
                        <!-- Search Button -->
                        <button id="booking-search-btn"
                            class="w-full h-11 bg-[#1e6b45]
                                hover:bg-[#175438]
                                text-white
                                rounded-lg
                                flex
                                justify-center
                                items-center
                                gap-2
                                font-semibold cursor-pointer">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <span>Cari</span>
                        </button>
                    </div>


                </div>

                <!-- Table Section -->
                <div class="w-full overflow-hidden border-t border-b border-gray-100">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-gray-700">
                            <thead
                                class="bg-gray-50 border-b border-gray-200 text-xs font-bold text-gray-600 uppercase tracking-wider">
                                <tr>
                                    <th class="px-6 py-4 w-16">No.</th>
                                    <th class="px-6 py-4 w-32">No. RM</th>
                                    <th class="px-6 py-4">Nama Pasien</th>
                                    <th class="px-6 py-4">No HP</th>
                                    <th class="px-6 py-4">Dokter</th>
                                    <th class="px-6 py-4">Jam Booking</th>
                                    <th class="px-6 py-4 w-28">Status</th>
                                </tr>
                            </thead>
                            <tbody id="booking-tbody"
                                class="divide-y divide-gray-100 font-medium text-gray-800 text-xs">
                                <tr class="booking-row hover:bg-gray-50/50 transition-colors">
                                    <td class="px-6 py-4 text-gray-400">1</td>
                                    <td class="px-6 py-4 font-bold text-gray-800">RM001</td>
                                    <td class="px-6 py-4">Budi Santoso</td>
                                    <td class="px-6 py-4 text-gray-600">08123456789</td>
                                    <td class="px-6 py-4 text-gray-600">dr. Andi, Sp.PD</td>
                                    <td class="px-6 py-4 text-gray-600">08.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-block bg-gray-100 text-gray-600 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Booking</span>
                                    </td>
                                </tr>
                                <tr class="booking-row hover:bg-gray-50/50 transition-colors">
                                    <td class="px-6 py-4 text-gray-400">2</td>
                                    <td class="px-6 py-4 font-bold text-gray-800">RM002</td>
                                    <td class="px-6 py-4">Siti Aisyah</td>
                                    <td class="px-6 py-4 text-gray-600">08123456789</td>
                                    <td class="px-6 py-4 text-gray-600">dr. Andi, Sp.PD</td>
                                    <td class="px-6 py-4 text-gray-600">08.30</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-block bg-gray-100 text-gray-600 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Booking</span>
                                    </td>
                                </tr>
                                <tr class="booking-row hover:bg-gray-50/50 transition-colors">
                                    <td class="px-6 py-4 text-gray-400">3</td>
                                    <td class="px-6 py-4 font-bold text-gray-800">RM003</td>
                                    <td class="px-6 py-4">Ahmad Fauzi</td>
                                    <td class="px-6 py-4 text-gray-600">08123456789</td>
                                    <td class="px-6 py-4 text-gray-600">dr. Andi, Sp.PD</td>
                                    <td class="px-6 py-4 text-gray-600">09.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-block bg-gray-100 text-gray-600 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Booking</span>
                                    </td>
                                </tr>
                                <tr class="booking-row hover:bg-gray-50/50 transition-colors">
                                    <td class="px-6 py-4 text-gray-400">4</td>
                                    <td class="px-6 py-4 font-bold text-gray-800">RM004</td>
                                    <td class="px-6 py-4">Dewi Lestari</td>
                                    <td class="px-6 py-4 text-gray-600">08123456789</td>
                                    <td class="px-6 py-4 text-gray-600">dr. Andi, Sp.PD</td>
                                    <td class="px-6 py-4 text-gray-600">09.30</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-block bg-gray-100 text-gray-600 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Booking</span>
                                    </td>
                                </tr>
                                <tr class="booking-row hover:bg-gray-50/50 transition-colors">
                                    <td class="px-6 py-4 text-gray-400">5</td>
                                    <td class="px-6 py-4 font-bold text-gray-800">RM005</td>
                                    <td class="px-6 py-4">Eko Prasetyo</td>
                                    <td class="px-6 py-4 text-gray-600">08123456789</td>
                                    <td class="px-6 py-4 text-gray-600">dr. Andi, Sp.PD</td>
                                    <td class="px-6 py-4 text-gray-600">10.00</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-block bg-gray-100 text-gray-600 text-[10px] font-bold px-2.5 py-0.5 rounded-full">Booking</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Table Footer / Pagination -->
                <div
                    class="flex flex-col sm:flex-row items-center justify-between gap-4 font-medium text-xs text-gray-500 pt-1">
                    <p id="booking-info-text">Menampilkan 1 - 5 dari 120 data</p>

                    <div
                        class="flex items-center gap-1 bg-white border border-gray-200 rounded-lg p-1 shadow-sm select-none">
                        <!-- Prev -->
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-gray-100 text-gray-400 transition-colors cursor-pointer">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <!-- Page 1 Active -->
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded-md bg-[#1e6b45] text-white font-bold cursor-pointer">1</button>
                        <!-- Page 2 -->
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-gray-100 transition-colors cursor-pointer">2</button>
                        <!-- Page 3 -->
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-gray-100 transition-colors cursor-pointer">3</button>
                        <!-- Dots -->
                        <span class="w-8 h-8 flex items-center justify-center text-gray-400">...</span>
                        <!-- Page 24 -->
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-gray-100 transition-colors cursor-pointer">24</button>
                        <!-- Next -->
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-gray-100 text-gray-400 transition-colors cursor-pointer">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-100 py-3 text-center shrink-0">
            <p class="text-xs text-gray-400">&copy; {{ date('Y') }} RSUD Kajen. Melayani Dengan Hati.</p>
        </footer>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('booking-search');
            const searchBtn = document.getElementById('booking-search-btn');
            const tbody = document.getElementById('booking-tbody');
            const infoText = document.getElementById('booking-info-text');

            if (!tbody || !searchInput) return;

            const rows = Array.from(tbody.querySelectorAll('tr.booking-row'));

            function filterBookingTable() {
                const query = searchInput.value.toLowerCase().trim();
                let visibleCount = 0;

                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    if (query === '' || text.includes(query)) {
                        row.classList.remove('hidden');
                        visibleCount++;
                    } else {
                        row.classList.add('hidden');
                    }
                });

                // Handle empty result row
                let emptyRow = document.getElementById('booking-empty-row');
                if (!emptyRow) {
                    emptyRow = document.createElement('tr');
                    emptyRow.id = 'booking-empty-row';
                    emptyRow.className = 'hidden';
                    emptyRow.innerHTML = `
                        <td colspan="6" class="px-6 py-10 text-center text-gray-500">
                            <div class="flex flex-col items-center justify-center gap-2">
                                <svg class="w-8 h-8 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                                <p class="font-medium text-sm text-gray-600">Data booking tidak ditemukan</p>
                                <p class="text-xs text-gray-400">Coba gunakan kata kunci pencarian yang lain.</p>
                            </div>
                        </td>
                    `;
                    tbody.appendChild(emptyRow);
                }

                if (visibleCount === 0) {
                    emptyRow.classList.remove('hidden');
                } else {
                    emptyRow.classList.add('hidden');
                }

                // Update table footer info
                if (infoText) {
                    if (query === '') {
                        infoText.textContent = `Menampilkan 1 - ${visibleCount} dari 120 data`;
                    } else {
                        infoText.textContent =
                            `Menampilkan ${visibleCount} data hasil pencarian "${searchInput.value.trim()}"`;
                    }
                }
            }

            // Trigger on typing in search box
            searchInput.addEventListener('input', filterBookingTable);

            // Trigger on Enter key
            searchInput.addEventListener('keyup', function(e) {
                if (e.key === 'Enter') {
                    filterBookingTable();
                }
            });

            // Trigger on clicking "Cari" button
            if (searchBtn) {
                searchBtn.addEventListener('click', filterBookingTable);
            }
        });
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
