<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Informasi Jadwal Dokter - RSUD Kajen</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body { font-family: 'Instrument Sans', sans-serif; }
        </style>
    @endif
</head>
<body class="bg-[#fafcfb] text-gray-800 font-sans h-screen overflow-hidden flex flex-col justify-between relative selection:bg-[#1e6b45]/20 selection:text-[#1e6b45]">

    <!-- Ambient Background Decorations -->
    <div class="fixed top-0 left-0 w-96 h-96 bg-emerald-100/40 rounded-full blur-3xl pointer-events-none -z-10 -translate-x-1/3 -translate-y-1/3"></div>
    <div class="fixed top-1/4 right-0 w-[500px] h-[500px] bg-emerald-50/60 rounded-full blur-3xl pointer-events-none -z-10 translate-x-1/3"></div>
    <div class="fixed bottom-0 left-1/3 w-96 h-96 bg-emerald-100/30 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <!-- ======================== HEADER NAVBAR ======================== -->
    <header class="w-full px-6 lg:px-12 py-3 flex items-center justify-between bg-white/80 backdrop-blur-md border-b border-gray-100 shrink-0 z-40">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ asset('logo.png') }}" alt="Logo RSUD Kajen" class="h-9 w-auto" onerror="this.src='https://ui-avatars.com/api/?name=RSUD+Kajen&background=1e6b45&color=fff'">
            <div class="leading-tight">
                <p class="font-bold text-base text-[#1e6b45] leading-none tracking-tight">RSUD Kajen</p>
                <p class="text-gray-500 text-[10px] mt-0.5 font-normal">Melayani dengan Hati</p>
            </div>
        </a>

        <!-- Auth Navigation -->
        <div class="flex items-center gap-3">
            @auth
                <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-[#1e6b45] hover:bg-[#165234] text-white text-xs font-semibold rounded-xl transition-all shadow-2xs cursor-pointer">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 01-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>
            @else
                <!-- Login Button -->
                <a href="{{ route('login') }}" class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-white border border-[#1e6b45] text-[#1e6b45] hover:bg-emerald-50 text-xs font-semibold rounded-xl transition-all shadow-2xs cursor-pointer">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    Login
                </a>

                <!-- Register Button -->
                <a href="{{ route('register') }}" class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-[#1e6b45] hover:bg-[#165234] text-white text-xs font-semibold rounded-xl transition-all shadow-2xs cursor-pointer">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                    Register
                </a>
            @endauth
        </div>
    </header>

    <!-- ======================== MAIN HERO SECTION ======================== -->
    <main class="flex-1 flex flex-col justify-evenly px-6 lg:px-12 py-2 lg:py-3 max-w-7xl mx-auto w-full overflow-hidden">
        
        <!-- Hero Grid Section -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center">
            
            <!-- Left Column Text Content -->
            <div class="lg:col-span-6 space-y-3.5">
                
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#1e6b45]/10 text-[#1e6b45] border border-[#1e6b45]/20 text-[11px] font-semibold">
                    <svg class="w-3.5 h-3.5 text-[#1e6b45]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    Sistem Informasi Terintegrasi
                </div>

                <!-- Main Heading -->
                <div class="space-y-0.5">
                    <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight">
                        Portal Informasi
                    </h1>
                    <h1 class="text-3xl lg:text-4xl font-extrabold text-[#1e6b45] tracking-tight leading-tight">
                        Jadwal Dokter
                    </h1>
                </div>

                <!-- Subtitle Description -->
                <p class="text-gray-600 text-xs lg:text-sm leading-relaxed max-w-xl font-normal">
                    Kelola informasi dokter yang berhalangan praktik dan kirimkan notifikasi kepada pasien secara cepat, akurat, dan terintegrasi melalui sistem yang modern dan terpercaya.
                </p>

                <!-- Bullet Feature Tags -->
                <div class="flex flex-wrap items-center gap-2 text-xs font-semibold text-gray-700 pt-1">
                    <div class="w-5 h-5 rounded-full bg-[#1e6b45] text-white flex items-center justify-center shrink-0">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <span>Akurat</span>
                    <span class="text-gray-400">•</span>
                    <span>Cepat</span>
                    <span class="text-gray-400">•</span>
                    <span>Terpercaya</span>
                    <span class="text-gray-400">•</span>
                    <span>Terintegrasi</span>
                </div>

            </div>

            <!-- Right Column Hospital Building Image -->
            <div class="lg:col-span-6 relative">
                <!-- Background Blob Glow -->
                <div class="w-72 h-72 bg-emerald-200/50 rounded-full blur-3xl absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

                <!-- Building Photo Card -->
                <div class="relative rounded-2xl overflow-hidden shadow-xl border-4 border-white bg-white group">
                    <img 
                        src="{{ asset('bg-hospital.png') }}" 
                        alt="Gedung RSUD Kajen" 
                        class="w-full h-[260px] lg:h-[300px] object-cover object-center transform group-hover:scale-105 transition-transform duration-700"
                    >
                    
                    <!-- Soft Glass Overlay Badge on Photo -->
                    <!-- <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-xl shadow-md border border-white/40 flex items-center gap-2">
                        <img src="{{ asset('logo.png') }}" alt="Logo Icon" class="h-5 w-auto">
                        <span class="text-[11px] font-bold text-[#1e6b45]">RSUD Kajen</span>
                    </div> -->
                </div>
            </div>

        </div>

        <!-- ======================== 4 FEATURE CARDS ======================== -->
        <div class="relative mt-2 lg:mt-3">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 relative z-10">

                <!-- Card 1: Informasi Akurat -->
                <div class="bg-white/90 backdrop-blur-md rounded-2xl p-4 border border-gray-100 shadow-2xs flex flex-col justify-between gap-2.5 border-b-4 border-b-emerald-500 hover:shadow-xs transition-all">
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-bold text-gray-900 text-sm">Informasi Akurat</h3>
                        <p class="text-[11px] text-gray-500 leading-tight">
                            Data dokter berhalangan disajikan secara akurat dan real-time.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Notifikasi Cepat -->
                <div class="bg-white/90 backdrop-blur-md rounded-2xl p-4 border border-gray-100 shadow-2xs flex flex-col justify-between gap-2.5 border-b-4 border-b-blue-500 hover:shadow-xs transition-all">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-500 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-bold text-gray-900 text-sm">Notifikasi Cepat</h3>
                        <p class="text-[11px] text-gray-500 leading-tight">
                            Pasien menerima notifikasi secara cepat melalui WhatsApp.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Terpercaya -->
                <div class="bg-white/90 backdrop-blur-md rounded-2xl p-4 border border-gray-100 shadow-2xs flex flex-col justify-between gap-2.5 border-b-4 border-b-emerald-500 hover:shadow-xs transition-all">
                    <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-bold text-gray-900 text-sm">Terpercaya</h3>
                        <p class="text-[11px] text-gray-500 leading-tight">
                            Sistem terpercaya dengan keamanan data sesuai standar.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Terintegrasi -->
                <div class="bg-white/90 backdrop-blur-md rounded-2xl p-4 border border-gray-100 shadow-2xs flex flex-col justify-between gap-2.5 border-b-4 border-b-amber-400 hover:shadow-xs transition-all">
                    <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-500 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-bold text-gray-900 text-sm">Terintegrasi</h3>
                        <p class="text-[11px] text-gray-500 leading-tight">
                            Terintegrasi dengan sistem rumah sakit untuk pelayanan yang lebih baik.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Action Button (Masuk ke Dashboard) -->
        <div class="flex justify-center mt-2 lg:mt-3">
            <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-[#1e6b45] hover:bg-[#165234] text-white text-xs sm:text-sm font-semibold rounded-xl shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5 cursor-pointer">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                </svg>
                Masuk ke Dashboard
            </a>
        </div>

    </main>

    <!-- ======================== FOOTER ======================== -->
    <footer class="w-full py-2.5 text-center border-t border-gray-100 shrink-0 bg-white/40 backdrop-blur-xs">
        <p class="text-[11px] text-gray-500 font-medium">
            &copy; 2026 RSUD Kajen Kabupaten Pekalongan. Semua hak dilindungi.
        </p>
    </footer>

</body>
</html>
