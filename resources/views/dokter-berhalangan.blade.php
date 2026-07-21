<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokter Berhalangan - RSUD Kajen</title>

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
    <div
        id="sidebar-backdrop"
        class="fixed inset-0 z-30 bg-black/40 backdrop-blur-sm hidden transition-opacity duration-300"
        onclick="toggleSidebar()"
    ></div>

    <aside id="sidebar" class="fixed top-0 left-0 h-full z-40 w-52 bg-[#1e6b45] text-white flex flex-col shrink-0 overflow-hidden -translate-x-full transition-transform duration-300 ease-in-out shadow-2xl">
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
                <!-- Dokter Berhalangan ACTIVE -->
                <li>
                    <a href="{{ route('dokter-berhalangan') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-white/20 text-white text-sm font-semibold">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Dokter Berhalangan
                    </a>
                </li>
                
                <!-- Monitoring Notifikasi -->
                <li>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        Monitoring Notifikasi
                    </a>
                </li>
                <!-- Riwayat Notifikasi -->
                <li>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        Riwayat Notifikasi
                    </a>
                </li>
                <!-- Laporan -->
                <li>
                    <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
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
            <!-- Hamburger -->
            <button id="hamburger-btn" onclick="toggleSidebar()" class="text-gray-500 hover:text-gray-700 transition-colors cursor-pointer mr-1">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <h1 class="text-base font-bold text-gray-800">Dokter Berhalangan</h1>

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

                <!-- Notification Bell -->
                <button class="relative text-gray-500 hover:text-gray-700 p-1">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    <span class="absolute top-0 right-0 bg-red-500 text-white text-[9px] font-bold w-4 h-4 flex items-center justify-center rounded-full">2</span>
                </button>

                <!-- User Menu -->
                <button class="flex items-center gap-2 hover:bg-gray-50 px-2 py-1 rounded-lg transition-colors">
                    <div class="w-8 h-8 bg-[#1e6b45] text-white rounded-full flex items-center justify-center font-semibold text-sm">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <span class="text-sm font-semibold text-gray-800 hidden sm:inline">{{ Auth::user()->name }}</span>
                </button>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto bg-gray-50 pb-10">

            <!-- ===== STEPPER ===== -->
            <div class="bg-white border-b border-gray-100 px-8 py-4">
                <div class="flex items-center justify-center gap-0 max-w-2xl mx-auto">
                    <!-- Step 1 Indicator -->
                    <div id="step1-indicator" class="flex items-center gap-2">
                        <div id="step1-circle" class="w-7 h-7 rounded-full bg-[#1e6b45] flex items-center justify-center text-white text-xs font-bold shrink-0 transition-colors">1</div>
                        <span id="step1-text" class="text-sm font-semibold text-[#1e6b45] whitespace-nowrap transition-colors">Input Dokter Berhalangan</span>
                    </div>

                    <!-- Connector 1-2 -->
                    <div id="step1-connector" class="flex-1 h-[2px] border-t-2 border-dashed border-gray-200 mx-4 min-w-[40px] transition-colors"></div>

                    <!-- Step 2 Indicator -->
                    <div id="step2-indicator" class="flex items-center gap-2">
                        <div id="step2-circle" class="w-7 h-7 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-400 text-xs font-bold shrink-0 bg-white transition-colors">2</div>
                        <span id="step2-text" class="text-sm font-medium text-gray-400 whitespace-nowrap transition-colors">Analisis Dampak</span>
                    </div>

                    <!-- Connector 2-3 -->
                    <div id="step2-connector" class="flex-1 h-[2px] border-t-2 border-dashed border-gray-200 mx-4 min-w-[40px] transition-colors"></div>

                    <!-- Step 3 Indicator -->
                    <div id="step3-indicator" class="flex items-center gap-2">
                        <div id="step3-circle" class="w-7 h-7 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-400 text-xs font-bold shrink-0 bg-white transition-colors">3</div>
                        <span id="step3-text" class="text-sm font-medium text-gray-400 whitespace-nowrap transition-colors">Konfirmasi Broadcast</span>
                    </div>
                </div>
            </div>

            <!-- ===== FORM AREA ===== -->
            <div class="p-6 max-w-5xl mx-auto w-full">

                <!-- STEP 1 CONTAINER -->
                <div id="step1-container" class="block bg-white rounded-xl border border-gray-100 shadow-sm transition-all">
                    <!-- Card Header -->
                    <div class="px-6 py-5 border-b border-gray-100">
                        <h2 class="text-base font-bold text-gray-900">Input Dokter Berhalangan</h2>
                        <p class="text-sm text-gray-500 mt-0.5">Lengkapi informasi dokter yang berhalangan praktik.</p>
                    </div>

                    <!-- Card Body -->
                    <div class="px-6 py-6">
                        <!-- Row 1: Dokter | Tanggal | Jam Berhalangan -->
                        <div class="grid grid-cols-1 md:grid-cols-[2fr_1.2fr_1.8fr] gap-5 mb-6">

                            <!-- Dokter -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                    Dokter <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="flex items-center gap-3 w-full border border-gray-300 rounded-lg px-3 py-2.5 bg-white cursor-pointer hover:border-[#1e6b45] transition-colors select-none">
                                        <div class="w-9 h-9 bg-blue-100 rounded-full flex items-center justify-center shrink-0 overflow-hidden border border-blue-200">
                                            <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold text-gray-800 leading-none">dr. Andi, Sp.PD</p>
                                            <p class="text-xs text-gray-500 mt-0.5">Spesialis Penyakit Dalam</p>
                                        </div>
                                        <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    </div>
                                    <select id="input-dokter" class="absolute inset-0 opacity-0 w-full h-full cursor-pointer">
                                        <option value="dr. Andi, Sp.PD" data-sp="Spesialis Penyakit Dalam">dr. Andi, Sp.PD</option>
                                        <option value="dr. Rizky, Sp.Jt" data-sp="Spesialis Penyakit Jantung">dr. Rizky, Sp.Jt</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Tanggal -->
                            <div>
                                <label for="tanggal" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                    Tanggal <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input
                                        type="date"
                                        id="tanggal"
                                        name="tanggal"
                                        value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                        class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm text-gray-800 bg-white focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/30 focus:border-[#1e6b45] transition-colors pr-10 cursor-pointer font-medium"
                                    >
                                    <svg class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Jam Berhalangan -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                                    Jam Berhalangan <span class="text-red-500">*</span>
                                </label>
                                <div class="flex items-center gap-2">
                                    <!-- Jam Mulai -->
                                    <div class="relative flex-1">
                                        <input
                                            type="time"
                                            id="jam_mulai"
                                            name="jam_mulai"
                                            value="09:00"
                                            class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm text-gray-800 bg-white focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/30 focus:border-[#1e6b45] transition-colors pr-8 font-medium"
                                        >
                                        <svg class="absolute right-2.5 top-1/2 -translate-y-1/2 w-3.5 h-3.5 text-gray-400 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm text-gray-500 font-medium shrink-0">s.d.</span>
                                    <!-- Jam Selesai -->
                                    <div class="relative flex-1">
                                        <input
                                            type="time"
                                            id="jam_selesai"
                                            name="jam_selesai"
                                            value="12:00"
                                            class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm text-gray-800 bg-white focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/30 focus:border-[#1e6b45] transition-colors pr-8 font-medium"
                                        >
                                        <svg class="absolute right-2.5 top-1/2 -translate-y-1/2 w-3.5 h-3.5 text-gray-400 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Row 2: Alasan | Informasi -->
                        <div class="grid grid-cols-1 md:grid-cols-[1.5fr_1fr] gap-5">
                            <!-- Alasan -->
                            <div>
                                <label for="alasan" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                    Alasan <span class="text-red-500">*</span>
                                </label>
                                <textarea
                                    id="alasan"
                                    name="alasan"
                                    rows="5"
                                    placeholder="Masukkan alasan dokter berhalangan..."
                                    class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm text-gray-800 bg-white focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/30 focus:border-[#1e6b45] transition-colors resize-none font-medium font-sans"
                                >Sakit</textarea>
                            </div>

                            <!-- Informasi Box -->
                            <div class="flex flex-col justify-start">
                                <div class="bg-[#e8f5ee] border border-[#a7d7b8] rounded-xl p-4 flex gap-3 mt-6">
                                    <div class="shrink-0 mt-0.5">
                                        <div class="w-5 h-5 rounded-full bg-[#1e6b45] flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-[#1e6b45] mb-1">Informasi</p>
                                        <p class="text-xs text-[#2d7a50] leading-relaxed font-medium">
                                            Setelah menyimpan data, sistem akan menganalisis pasien yang terdaftar pada jadwal tersebut.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-end gap-3 bg-gray-50/50 rounded-b-xl">
                        <a href="{{ route('dashboard') }}" class="px-5 py-2.5 text-sm font-semibold text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:border-gray-400 transition-colors">
                            Batal
                        </a>
                        <button
                            type="button"
                            onclick="goToStep2()"
                            class="flex items-center gap-2 px-5 py-2.5 bg-[#1e6b45] hover:bg-[#175438] text-white text-sm font-semibold rounded-lg transition-colors shadow-sm cursor-pointer"
                        >
                            <span>Analisis Dampak</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </div>


                <!-- STEP 2 CONTAINER (ANALSIS DAMPAK) -->
                <div id="step2-container" class="hidden bg-white rounded-xl border border-gray-100 shadow-sm transition-all">
                    <!-- Card Header -->
                    <div class="px-6 py-5 border-b border-gray-100">
                        <h2 class="text-base font-bold text-gray-900">Analisis Dampak</h2>
                        <p class="text-sm text-gray-500 mt-0.5">Berikut adalah hasil analisis pasien yang terdampak.</p>
                    </div>

                    <!-- Card Body -->
                    <div class="px-6 py-6">
                        <!-- Informasi Dokter Mini Card -->
                        <div class="bg-gray-50/70 border border-gray-200/80 rounded-xl p-4 flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center shrink-0 border border-blue-200">
                                    <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-800 leading-tight" id="step2-info-nama">dr. Andi, Sp.PD</p>
                                    <p class="text-xs text-gray-500 mt-0.5">Spesialis Penyakit Dalam</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-center gap-x-6 gap-y-2 text-sm text-gray-600">
                                <!-- Tanggal -->
                                <div class="flex items-center gap-2 font-medium">
                                    <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <div>
                                        <span class="block text-[10px] text-gray-400 font-bold uppercase leading-none mb-0.5">Tanggal</span>
                                        <span id="step2-info-tanggal">21 Juli 2026</span>
                                    </div>
                                </div>
                                <!-- Jam -->
                                <div class="flex items-center gap-2 font-medium">
                                    <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <div>
                                        <span class="block text-[10px] text-gray-400 font-bold uppercase leading-none mb-0.5">Jam Berhalangan</span>
                                        <span id="step2-info-jam">09:00 - 12:00</span>
                                    </div>
                                </div>
                                <!-- Alasan -->
                                <div class="flex items-center gap-2 font-medium">
                                    <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                    <div>
                                        <span class="block text-[10px] text-gray-400 font-bold uppercase leading-none mb-0.5">Alasan</span>
                                        <span id="step2-info-alasan">Sakit</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4 Stats Cards Grid -->
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                            <!-- Total Pasien Terdampak -->
                            <div class="bg-white rounded-xl p-5 border border-gray-200/80 shadow-sm flex flex-col justify-between">
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold mb-1">Total Pasien Terdampak</p>
                                    <p class="text-2xl font-bold text-gray-900 leading-tight">120</p>
                                </div>
                                <p class="text-xs text-gray-400 mt-2 font-medium">Pasien</p>
                            </div>

                            <!-- Nomor Valid -->
                            <div class="bg-white rounded-xl p-5 border border-gray-200/80 shadow-sm flex flex-col justify-between">
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold mb-1 font-sans">Nomor Valid</p>
                                    <p class="text-2xl font-bold text-emerald-600 leading-tight">118</p>
                                </div>
                                <p class="text-xs text-emerald-600 mt-2 font-bold">(98%)</p>
                            </div>

                            <!-- Nomor Tidak Valid -->
                            <div class="bg-white rounded-xl p-5 border border-gray-200/80 shadow-sm flex flex-col justify-between">
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold mb-1 font-sans">Nomor Tidak Valid</p>
                                    <p class="text-2xl font-bold text-rose-500 leading-tight">2</p>
                                </div>
                                <p class="text-xs text-rose-500 mt-2 font-bold">(2%)</p>
                            </div>

                            <!-- Tidak Ada WhatsApp -->
                            <div class="bg-white rounded-xl p-5 border border-gray-200/80 shadow-sm flex flex-col justify-between">
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold mb-1 font-sans">Tidak Ada WhatsApp</p>
                                    <p class="text-2xl font-bold text-emerald-600 leading-tight">0</p>
                                </div>
                                <p class="text-xs text-emerald-600 mt-2 font-bold">(0%)</p>
                            </div>
                        </div>

                        <!-- Table & Chart Section -->
                        <div class="grid grid-cols-1 md:grid-cols-[1.2fr_1fr] gap-6">
                            <!-- Table -->
                            <div class="border border-gray-200/80 rounded-xl overflow-hidden shadow-sm bg-white">
                                <table class="w-full text-left text-sm text-gray-700">
                                    <thead class="bg-gray-50 text-[10px] font-bold text-gray-500 uppercase border-b border-gray-200 tracking-wider">
                                        <tr>
                                            <th class="px-5 py-3">No.</th>
                                            <th class="px-5 py-3">Kategori</th>
                                            <th class="px-5 py-3">Jumlah</th>
                                            <th class="px-5 py-3">Persentase</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100 font-medium text-xs">
                                        <tr class="hover:bg-gray-50/50">
                                            <td class="px-5 py-3.5 text-gray-400">1</td>
                                            <td class="px-5 py-3.5 font-bold text-gray-800">Nomor Valid</td>
                                            <td class="px-5 py-3.5 text-gray-900 font-bold">118</td>
                                            <td class="px-5 py-3.5 text-emerald-600 font-bold">98%</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50/50">
                                            <td class="px-5 py-3.5 text-gray-400">2</td>
                                            <td class="px-5 py-3.5 font-bold text-gray-800">Nomor Tidak Valid</td>
                                            <td class="px-5 py-3.5 text-gray-900 font-bold">2</td>
                                            <td class="px-5 py-3.5 text-rose-500 font-bold">2%</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50/50">
                                            <td class="px-5 py-3.5 text-gray-400">3</td>
                                            <td class="px-5 py-3.5 font-bold text-gray-800">Tidak Ada WhatsApp</td>
                                            <td class="px-5 py-3.5 text-gray-900 font-bold">0</td>
                                            <td class="px-5 py-3.5 text-emerald-600 font-bold">0%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Donut Chart Card -->
                            <div class="border border-gray-200/80 rounded-xl p-5 flex flex-col sm:flex-row items-center justify-around gap-6 shadow-sm bg-white">
                                <!-- Custom SVG Donut Chart representing 120 total, 118 valid (98%), 2 invalid (2%) -->
                                <div class="relative w-36 h-36 shrink-0 flex items-center justify-center">
                                    <svg viewBox="0 0 36 36" class="w-full h-full transform -rotate-90">
                                        <!-- Gray background path for 0% (or total) -->
                                        <circle cx="18" cy="18" r="15.915" fill="none" stroke="#e2e8f0" stroke-width="3"></circle>
                                        <!-- Red invalid path: 2% of circumference (2 * 3.1415 * 15.915 = 100) -> stroke-dasharray="2 98" -->
                                        <!-- Offset = start at 98% -> offset = 98 -->
                                        <circle cx="18" cy="18" r="15.915" fill="none" stroke="#f43f5e" stroke-width="3" stroke-dasharray="2 98" stroke-dashoffset="98"></circle>
                                        <!-- Green valid path: 98% of circumference -> stroke-dasharray="98 2" -->
                                        <!-- Offset = start at 0 -> offset = 0 -->
                                        <circle cx="18" cy="18" r="15.915" fill="none" stroke="#10b981" stroke-width="3" stroke-dasharray="98 2" stroke-dashoffset="0"></circle>
                                    </svg>
                                    <!-- Inner label text -->
                                    <div class="absolute inset-0 flex flex-col items-center justify-center leading-none text-center">
                                        <span class="text-xl font-extrabold text-gray-800">120</span>
                                        <span class="text-[9px] text-gray-400 font-bold uppercase tracking-wider mt-0.5">Total Pasien</span>
                                    </div>
                                </div>

                                <!-- Legends -->
                                <div class="flex flex-col gap-2.5 text-[11px] font-bold text-gray-500">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 rounded-full bg-[#10b981] inline-block"></span>
                                        <span>Nomor Valid (98%)</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 rounded-full bg-[#f43f5e] inline-block"></span>
                                        <span>Nomor Tidak Valid (2%)</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 rounded-full bg-[#94a3b8] inline-block"></span>
                                        <span>Tidak Ada WhatsApp (0%)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-end gap-3 bg-gray-50/50 rounded-b-xl">
                        <button
                            type="button"
                            onclick="goToStep1()"
                            class="px-5 py-2.5 text-sm font-semibold text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:border-gray-400 transition-colors cursor-pointer"
                        >
                            Kembali
                        </button>
                        <button
                            type="button"
                            onclick="goToStep3()"
                            class="flex items-center gap-2 px-5 py-2.5 bg-[#1e6b45] hover:bg-[#175438] text-white text-sm font-semibold rounded-lg transition-colors shadow-sm cursor-pointer"
                        >
                            <span>Lanjut Kirim Notifikasi</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </div>


                <!-- STEP 3 CONTAINER (KONFIRMASI BROADCAST) -->
                <div id="step3-container" class="hidden bg-white rounded-xl border border-gray-100 shadow-sm transition-all">
                    <!-- Card Header -->
                    <div class="px-6 py-5 border-b border-gray-100">
                        <h2 class="text-base font-bold text-gray-900">Konfirmasi Broadcast</h2>
                        <p class="text-sm text-gray-500 mt-0.5">Periksa kembali informasi sebelum mengirim notifikasi.</p>
                    </div>

                    <!-- Card Body -->
                    <div class="px-6 py-6">
                        <!-- Summary Card Info -->
                        <div class="border border-gray-200 rounded-xl p-5 bg-gray-50/40 mb-6 grid grid-cols-1 md:grid-cols-[1.5fr_1fr_1fr_1fr] gap-6 items-center">
                            <!-- Dokter avatar & info -->
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center shrink-0 border border-blue-200">
                                    <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400 font-bold uppercase mb-0.5 leading-none">Dokter</p>
                                    <p class="text-sm font-bold text-gray-800 leading-tight" id="step3-info-nama">dr. Andi, Sp.PD</p>
                                    <p class="text-xs text-gray-500 mt-0.5">Spesialis Penyakit Dalam</p>
                                </div>
                            </div>

                            <!-- Jadwal Berhalangan -->
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase mb-0.5 leading-none">Jadwal Berhalangan</p>
                                <p class="text-sm font-bold text-gray-850" id="step3-info-jadwal">21 Juli 2026</p>
                                <p class="text-xs text-gray-500 mt-0.5 font-semibold" id="step3-info-jam">09:00 - 12:00</p>
                            </div>

                            <!-- Poli -->
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase mb-0.5 leading-none">Poli</p>
                                <p class="text-sm font-bold text-gray-850">Poli Penyakit Dalam</p>
                            </div>

                            <!-- Alasan -->
                            <div>
                                <p class="text-xs text-gray-400 font-bold uppercase mb-0.5 leading-none">Alasan</p>
                                <p class="text-sm font-bold text-gray-850" id="step3-info-alasan">Sakit</p>
                            </div>
                        </div>

                        <!-- Target Pasien & Catatan Row -->
                        <div class="grid grid-cols-1 md:grid-cols-[1fr_1.5fr] gap-6 mb-6">
                            <!-- Left: Target Pengiriman -->
                            <div class="border border-gray-200/80 rounded-xl p-5 flex flex-col justify-between shadow-sm bg-white">
                                <div>
                                    <p class="text-xs text-gray-500 font-bold uppercase mb-2 tracking-wider">Target Pengiriman Notifikasi</p>
                                    <div class="flex items-baseline gap-1">
                                        <span class="text-4xl font-extrabold text-gray-850">118</span>
                                        <span class="text-xs text-gray-400 font-semibold">Pasien</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-400 mt-3 font-semibold">Nomor valid yang akan dikirimkan notifikasi.</p>
                            </div>

                            <!-- Right: Catatan Info Box -->
                            <div class="bg-[#f0f9ff] border border-[#bae6fd] rounded-xl p-5 text-sky-850 flex gap-3">
                                <div class="shrink-0 mt-0.5">
                                    <div class="w-5 h-5 rounded-full bg-sky-500 flex items-center justify-center">
                                        <svg class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-sky-900 mb-2">Catatan</h4>
                                    <ul class="list-disc pl-4 space-y-1.5 text-xs text-sky-850 font-medium">
                                        <li>Notifikasi akan dikirim melalui WhatsApp.</li>
                                        <li>Pastikan data sudah benar sebelum mengirim.</li>
                                        <li>Proses pengiriman dapat dipantau di menu Monitoring Notifikasi.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Checkbox Confirmation -->
                        <div class="flex items-center gap-3 p-4 border border-[#a7d7b8]/40 rounded-xl bg-[#e8f5ee]/40 select-none">
                            <input
                                type="checkbox"
                                id="konfirmasi-checkbox"
                                onchange="toggleKirimBtn(this)"
                                class="w-4.5 h-4.5 border-2 border-emerald-500 rounded focus:ring-emerald-500 text-emerald-600 shrink-0 cursor-pointer"
                            >
                            <label for="konfirmasi-checkbox" class="text-xs font-bold text-emerald-800 cursor-pointer">
                                Saya telah memastikan data sudah benar dan siap mengirim notifikasi.
                            </label>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-end gap-3 bg-gray-50/50 rounded-b-xl">
                        <button
                            type="button"
                            onclick="goToStep2()"
                            class="px-5 py-2.5 text-sm font-semibold text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:border-gray-400 transition-colors cursor-pointer"
                        >
                            Kembali
                        </button>
                        <button
                            type="button"
                            id="kirim-notifikasi-btn"
                            disabled
                            onclick="submitBroadcast()"
                            class="flex items-center gap-2 px-5 py-2.5 bg-gray-300 text-gray-500 text-sm font-semibold rounded-lg shadow-sm transition-all cursor-not-allowed"
                        >
                            <!-- Send icon -->
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            <span>Kirim Notifikasi</span>
                        </button>
                    </div>
                </div>

            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-100 py-3 text-center shrink-0">
            <p class="text-xs text-gray-400">&copy; {{ date('Y') }} RSUD Kajen. Semua hak dilindungi.</p>
        </footer>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const backdrop = document.getElementById('sidebar-backdrop');
        let isSidebarOpen = false;

        function toggleSidebar() {
            isSidebarOpen = !isSidebarOpen;
            if (isSidebarOpen) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                backdrop.classList.remove('hidden');
                requestAnimationFrame(() => backdrop.classList.add('opacity-100'));
            } else {
                closeSidebar();
            }
        }

        function closeSidebar() {
            isSidebarOpen = false;
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('translate-x-0');
            backdrop.classList.remove('opacity-100');
            backdrop.classList.add('hidden');
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeSidebar();
        });
    </script>

    <!-- Wizard Steps Switch Script -->
    <script>
        const step1Indicator = document.getElementById('step1-indicator');
        const step1Circle = document.getElementById('step1-circle');
        const step1Text = document.getElementById('step1-text');
        const step1Connector = document.getElementById('step1-connector');

        const step2Indicator = document.getElementById('step2-indicator');
        const step2Circle = document.getElementById('step2-circle');
        const step2Text = document.getElementById('step2-text');
        const step2Connector = document.getElementById('step2-connector');

        const step3Indicator = document.getElementById('step3-indicator');
        const step3Circle = document.getElementById('step3-circle');
        const step3Text = document.getElementById('step3-text');

        const step1Container = document.getElementById('step1-container');
        const step2Container = document.getElementById('step2-container');
        const step3Container = document.getElementById('step3-container');

        // Form Fields references
        const inputDokter = document.getElementById('input-dokter');
        const inputTanggal = document.getElementById('tanggal');
        const inputJamMulai = document.getElementById('jam_mulai');
        const inputJamSelesai = document.getElementById('jam_selesai');
        const inputAlasan = document.getElementById('alasan');

        // Helper to format date Indonesian style
        function formatIndoDate(dateStr) {
            if (!dateStr) return '';
            const months = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];
            const date = new Date(dateStr);
            if (isNaN(date.getTime())) {
                // If it fails, split standard YYYY-MM-DD
                const parts = dateStr.split('-');
                if (parts.length === 3) {
                    return `${parseInt(parts[2])} ${months[parseInt(parts[1]) - 1]} ${parts[0]}`;
                }
                return dateStr;
            }
            return `${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()}`;
        }

        function syncFormValuesToUi() {
            const namaDokter = inputDokter.value;
            const tanggalStr = formatIndoDate(inputTanggal.value);
            const jamStr = `${inputJamMulai.value} - ${inputJamSelesai.value}`;
            const alasanStr = inputAlasan.value || '-';

            // Update Step 2 text displays
            document.querySelectorAll('#step2-info-nama').forEach(el => el.textContent = namaDokter);
            document.getElementById('step2-info-tanggal').textContent = tanggalStr;
            document.getElementById('step2-info-jam').textContent = jamStr;
            document.getElementById('step2-info-alasan').textContent = alasanStr;

            // Update Step 3 text displays
            document.querySelectorAll('#step3-info-nama').forEach(el => el.textContent = namaDokter);
            document.getElementById('step3-info-jadwal').textContent = tanggalStr;
            document.getElementById('step3-info-jam').textContent = jamStr;
            document.getElementById('step3-info-alasan').textContent = alasanStr;
        }

        function goToStep1() {
            // Container state
            step1Container.classList.remove('hidden');
            step2Container.classList.add('hidden');
            step3Container.classList.add('hidden');

            // Reset circles
            step1Circle.innerHTML = '1';
            step1Circle.className = 'w-7 h-7 rounded-full bg-[#1e6b45] flex items-center justify-center text-white text-xs font-bold shrink-0 transition-colors';
            step1Text.className = 'text-sm font-semibold text-[#1e6b45] whitespace-nowrap transition-colors';
            step1Connector.className = 'flex-1 h-[2px] border-t-2 border-dashed border-gray-200 mx-4 min-w-[40px] transition-colors';

            step2Circle.className = 'w-7 h-7 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-400 text-xs font-bold shrink-0 bg-white transition-colors';
            step2Text.className = 'text-sm font-medium text-gray-400 whitespace-nowrap transition-colors';
            step2Connector.className = 'flex-1 h-[2px] border-t-2 border-dashed border-gray-200 mx-4 min-w-[40px] transition-colors';

            step3Circle.className = 'w-7 h-7 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-400 text-xs font-bold shrink-0 bg-white transition-colors';
            step3Text.className = 'text-sm font-medium text-gray-400 whitespace-nowrap transition-colors';
        }

        function goToStep2() {
            syncFormValuesToUi();

            // Container state
            step1Container.classList.add('hidden');
            step2Container.classList.remove('hidden');
            step3Container.classList.add('hidden');

            // Step 1 to Checked
            step1Circle.innerHTML = `<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>`;
            step1Circle.className = 'w-7 h-7 rounded-full bg-[#1e6b45] flex items-center justify-center text-white text-xs font-bold shrink-0 transition-colors';
            step1Text.className = 'text-sm font-medium text-gray-500 whitespace-nowrap transition-colors';
            step1Connector.className = 'flex-1 h-[2px] border-t-2 border-dashed border-[#1e6b45] mx-4 min-w-[40px] transition-colors';

            // Step 2 to Active
            step2Circle.innerHTML = '2';
            step2Circle.className = 'w-7 h-7 rounded-full bg-[#1e6b45] flex items-center justify-center text-white text-xs font-bold shrink-0 transition-colors';
            step2Text.className = 'text-sm font-semibold text-[#1e6b45] whitespace-nowrap transition-colors';
            step2Connector.className = 'flex-1 h-[2px] border-t-2 border-dashed border-gray-200 mx-4 min-w-[40px] transition-colors';

            // Step 3 to Inactive
            step3Circle.className = 'w-7 h-7 rounded-full border-2 border-gray-300 flex items-center justify-center text-gray-400 text-xs font-bold shrink-0 bg-white transition-colors';
            step3Text.className = 'text-sm font-medium text-gray-400 whitespace-nowrap transition-colors';
        }

        function goToStep3() {
            syncFormValuesToUi();

            // Container state
            step1Container.classList.add('hidden');
            step2Container.classList.add('hidden');
            step3Container.classList.remove('hidden');

            // Step 1 Checked
            step1Circle.innerHTML = `<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>`;
            step1Circle.className = 'w-7 h-7 rounded-full bg-[#1e6b45] flex items-center justify-center text-white text-xs font-bold shrink-0 transition-colors';
            step1Text.className = 'text-sm font-medium text-gray-500 whitespace-nowrap transition-colors';
            step1Connector.className = 'flex-1 h-[2px] border-t-2 border-dashed border-[#1e6b45] mx-4 min-w-[40px] transition-colors';

            // Step 2 Checked
            step2Circle.innerHTML = `<svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>`;
            step2Circle.className = 'w-7 h-7 rounded-full bg-[#1e6b45] flex items-center justify-center text-white text-xs font-bold shrink-0 transition-colors';
            step2Text.className = 'text-sm font-medium text-gray-500 whitespace-nowrap transition-colors';
            step2Connector.className = 'flex-1 h-[2px] border-t-2 border-dashed border-[#1e6b45] mx-4 min-w-[40px] transition-colors';

            // Step 3 to Active
            step3Circle.innerHTML = '3';
            step3Circle.className = 'w-7 h-7 rounded-full bg-[#1e6b45] flex items-center justify-center text-white text-xs font-bold shrink-0 transition-colors';
            step3Text.className = 'text-sm font-semibold text-[#1e6b45] whitespace-nowrap transition-colors';
        }

        // Toggle Kirim Button based on confirmation checkbox
        function toggleKirimBtn(checkbox) {
            const btn = document.getElementById('kirim-notifikasi-btn');
            if (checkbox.checked) {
                btn.disabled = false;
                btn.className = 'flex items-center gap-2 px-5 py-2.5 bg-[#1e6b45] hover:bg-[#175438] text-white text-sm font-semibold rounded-lg shadow-sm transition-all cursor-pointer';
                btn.classList.remove('cursor-not-allowed', 'text-gray-500', 'bg-gray-300');
            } else {
                btn.disabled = true;
                btn.className = 'flex items-center gap-2 px-5 py-2.5 bg-gray-300 text-gray-500 text-sm font-semibold rounded-lg shadow-sm transition-all cursor-not-allowed';
            }
        }

        // Broadcast trigger logic
        function submitBroadcast() {
            alert('Notifikasi Broadcast berhasil dijadwalkan dan dikirim!');
            window.location.href = "{{ route('dashboard') }}";
        }
    </script>
</body>
</html>
