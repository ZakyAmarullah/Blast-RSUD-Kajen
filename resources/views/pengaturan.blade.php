<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengaturan - RSUD Kajen</title>

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

    <!-- Backdrop Overlay -->
    <div
        id="sidebar-backdrop"
        class="fixed inset-0 z-30 bg-black/40 backdrop-blur-sm hidden transition-opacity duration-300"
        onclick="toggleSidebar()"
    ></div>

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
                    <a href="{{ route('laporan') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Laporan
                    </a>
                </li>
                <!-- Pengaturan -->
                <li>
                    <a href="{{ route('pengaturan') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-white/20 text-white text-sm font-semibold">
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
            
            <h1 class="text-base font-bold text-gray-800">Pengaturan</h1>

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

        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto bg-gray-50 p-6 space-y-6">

            <!-- Title & Main Card -->
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6 space-y-6">

                <!-- Tabs Navigation -->
                <div class="border-b border-gray-200 flex gap-8">
                    <button
                        id="tab-profil"
                        onclick="switchTab('profil')"
                        class="pb-3 text-sm font-semibold text-[#1e6b45] border-b-2 border-[#1e6b45] transition-colors cursor-pointer"
                    >
                        Profil
                    </button>
                    <button
                        id="tab-fonnte"
                        onclick="switchTab('fonnte')"
                        class="pb-3 text-sm font-medium text-gray-500 hover:text-gray-700 transition-colors cursor-pointer"
                    >
                        Fonnte
                    </button>
                    <button
                        id="tab-pengiriman"
                        onclick="switchTab('pengiriman')"
                        class="pb-3 text-sm font-medium text-gray-500 hover:text-gray-700 transition-colors cursor-pointer"
                    >
                        Pengiriman
                    </button>
                </div>

                <!-- Tab 1: Profil Content -->
                <div id="content-profil" class="block pt-2">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        
                        <!-- Left Form Area (60-65% width) -->
                        <div class="lg:col-span-7 space-y-5">
                            <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Perubahan profil berhasil disimpan!');" class="space-y-5">
                                @csrf

                                <!-- Nama Lengkap -->
                                <div>
                                    <label for="nama_lengkap" class="block text-xs font-semibold text-gray-600 mb-1.5">Nama Lengkap</label>
                                    <input
                                        type="text"
                                        id="nama_lengkap"
                                        name="nama_lengkap"
                                        value="{{ Auth::check() ? Auth::user()->name : 'Admin RSUD Kajen' }}"
                                        class="w-full border border-gray-300 rounded-lg px-3.5 py-2.5 text-sm text-gray-800 bg-white font-medium focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/20 focus:border-[#1e6b45] transition-colors"
                                    >
                                </div>

                                <!-- Username -->
                                <div>
                                    <label for="username" class="block text-xs font-semibold text-gray-600 mb-1.5">Username</label>
                                    <input
                                        type="text"
                                        id="username"
                                        name="username"
                                        value="{{ Auth::check() ? (Auth::user()->username ?? Auth::user()->email ?? 'admin') : 'admin' }}"
                                        class="w-full border border-gray-300 rounded-lg px-3.5 py-2.5 text-sm text-gray-800 bg-white font-medium focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/20 focus:border-[#1e6b45] transition-colors"
                                    >
                                </div>

                                <!-- Password Baru -->
                                <div>
                                    <label for="password_baru" class="block text-xs font-semibold text-gray-600 mb-1.5">Password Baru</label>
                                    <div class="relative">
                                        <input
                                            type="password"
                                            id="password_baru"
                                            name="password_baru"
                                            placeholder="Kosongkan jika tidak ingin mengubah"
                                            class="w-full border border-gray-300 rounded-lg px-3.5 py-2.5 pr-10 text-sm text-gray-800 bg-white font-medium placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/20 focus:border-[#1e6b45] transition-colors"
                                        >
                                        <button
                                            type="button"
                                            onclick="togglePasswordVisibility()"
                                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 cursor-pointer transition-colors"
                                            title="Tampilkan / Sembunyikan Password"
                                        >
                                            <svg id="eye-icon" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Simpan Perubahan Button -->
                                <div class="flex justify-end pt-3">
                                    <button
                                        type="submit"
                                        class="px-6 py-2.5 bg-[#1e6b45] hover:bg-[#175438] text-white text-xs font-semibold rounded-lg transition-colors shadow-sm cursor-pointer flex items-center gap-2"
                                    >
                                        Simpan Perubahan
                                    </button>
                                </div>

                            </form>
                        </div>

                        <!-- Right Information Card (35-40% width) -->
                        <div class="lg:col-span-5">
                            <div class="bg-gray-50/80 border border-gray-100 rounded-xl p-6 space-y-6 shadow-2xs">
                                <h3 class="text-sm font-bold text-gray-900">Informasi Akun</h3>

                                <!-- Avatar & Profile Info Row -->
                                <div class="flex items-center gap-4">
                                    <div class="w-14 h-14 rounded-full bg-[#1e6b45] text-white flex items-center justify-center shrink-0 shadow-xs font-bold text-xl">
                                        @if(Auth::check() && Auth::user()->name)
                                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                        @else
                                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                        @endif
                                    </div>
                                    <div class="leading-tight">
                                        <p class="font-bold text-base text-gray-900" id="card-nama">{{ Auth::check() ? Auth::user()->name : 'Admin RSUD Kajen' }}</p>
                                        <p class="text-xs text-gray-500 font-medium mt-1" id="card-username">{{ Auth::check() ? (Auth::user()->username ?? Auth::user()->email ?? 'admin') : 'admin' }}</p>
                                    </div>
                                </div>

                                <!-- Last Login Info -->
                                <div class="pt-2 border-t border-gray-200/60">
                                    <p class="text-xs font-semibold text-gray-700">Terakhir login:</p>
                                    <p class="text-xs text-gray-600 font-medium mt-1">{{ \Carbon\Carbon::now()->locale('id')->isoFormat('D MMMM YYYY, HH.mm') }} WIB</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tab 2: Fonnte Content -->
                <div id="content-fonnte" class="hidden pt-2">
                    <div class="max-w-2xl space-y-6">
                        <div class="bg-emerald-50/60 border border-emerald-200/70 rounded-xl p-4 flex items-center gap-3">
                            <div class="w-3 h-3 rounded-full bg-emerald-500 shrink-0"></div>
                            <div>
                                <p class="text-xs font-bold text-emerald-800">Status Perangkat Fonnte: Terhubung (Online)</p>
                                <p class="text-[11px] text-emerald-600 font-medium mt-0.5">Sistem siap mengirimkan notifikasi WhatsApp kepada pasien.</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label for="fonnte_token" class="block text-xs font-semibold text-gray-600 mb-1.5">API Token Fonnte</label>
                                <input
                                    type="password"
                                    id="fonnte_token"
                                    value="fn_live_8917238917238127"
                                    class="w-full border border-gray-300 rounded-lg px-3.5 py-2.5 text-sm text-gray-800 bg-white font-medium focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/20 focus:border-[#1e6b45]"
                                >
                            </div>

                            <div class="flex items-center gap-3 pt-2">
                                <button type="button" class="px-5 py-2 bg-[#1e6b45] hover:bg-[#175438] text-white text-xs font-semibold rounded-lg transition-colors cursor-pointer">
                                    Simpan Token
                                </button>
                                <button type="button" class="px-5 py-2 bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 text-xs font-semibold rounded-lg transition-colors cursor-pointer">
                                    Tes Koneksi
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 3: Pengiriman Content -->
                <div id="content-pengiriman" class="hidden pt-2">
                    <div class="max-w-2xl space-y-5">
                        <div>
                            <label for="delay_pengiriman" class="block text-xs font-semibold text-gray-600 mb-1.5">Jeda Pengiriman per Pesan (Detik)</label>
                            <input
                                type="number"
                                id="delay_pengiriman"
                                value="2"
                                class="w-full border border-gray-300 rounded-lg px-3.5 py-2.5 text-sm text-gray-800 bg-white font-medium focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/20 focus:border-[#1e6b45]"
                            >
                        </div>

                        <div>
                            <label for="max_retry" class="block text-xs font-semibold text-gray-600 mb-1.5">Maksimal Percobaan Ulang (Retry)</label>
                            <input
                                type="number"
                                id="max_retry"
                                value="3"
                                class="w-full border border-gray-300 rounded-lg px-3.5 py-2.5 text-sm text-gray-800 bg-white font-medium focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/20 focus:border-[#1e6b45]"
                            >
                        </div>

                        <div class="pt-2">
                            <button type="button" class="px-5 py-2 bg-[#1e6b45] hover:bg-[#175438] text-white text-xs font-semibold rounded-lg transition-colors cursor-pointer">
                                Simpan Pengaturan Pengiriman
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-100 py-3 text-center shrink-0">
            <p class="text-xs text-gray-400">&copy; {{ date('Y') }} RSUD Kajen. Melayanan Dengan Hati.</p>
        </footer>
    </div>

    <!-- Script Tab Switcher & Toggle Password -->
    <script>
        function switchTab(tabName) {
            // Hide all tab contents
            document.getElementById('content-profil').classList.add('hidden');
            document.getElementById('content-fonnte').classList.add('hidden');
            document.getElementById('content-pengiriman').classList.add('hidden');

            // Reset tab button styles
            const tabs = ['profil', 'fonnte', 'pengiriman'];
            tabs.forEach(t => {
                const btn = document.getElementById('tab-' + t);
                btn.className = 'pb-3 text-sm font-medium text-gray-500 hover:text-gray-700 transition-colors cursor-pointer';
            });

            // Show selected tab content and activate button
            document.getElementById('content-' + tabName).classList.remove('hidden');
            const activeBtn = document.getElementById('tab-' + tabName);
            activeBtn.className = 'pb-3 text-sm font-semibold text-[#1e6b45] border-b-2 border-[#1e6b45] transition-colors cursor-pointer';
        }

        function togglePasswordVisibility() {
            const passInput = document.getElementById('password_baru');
            if (passInput.type === 'password') {
                passInput.type = 'text';
            } else {
                passInput.type = 'password';
            }
        }

        // Live update right info card on typing name/username
        document.getElementById('nama_lengkap').addEventListener('input', function(e) {
            document.getElementById('card-nama').textContent = e.target.value || 'Admin RSUD Kajen';
        });
        document.getElementById('username').addEventListener('input', function(e) {
            document.getElementById('card-username').textContent = e.target.value || 'admin';
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
