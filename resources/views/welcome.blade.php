<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portal RSUD Kajen</title>

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
    <body class="relative min-h-screen font-sans overflow-x-hidden flex flex-col justify-between text-white selection:bg-[#0071BC]/30 selection:text-white">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img 
                src="{{ asset('bg-hospital.png') }}" 
                alt="RSUD Kajen Building" 
                class="w-full h-full object-cover object-center filter brightness-[0.4] blur-[1px]"
            >
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/40 to-slate-950/80"></div>
            <!-- Ambient colorful glows matching logo -->
            <div class="absolute -top-40 -left-40 w-96 h-96 bg-[#0071BC]/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-[#8CC63F]/15 rounded-full blur-3xl pointer-events-none"></div>
        </div>

        <!-- Top Navigation -->
        <header class="relative z-10 w-full px-6 py-4 lg:px-12 flex items-center justify-between border-b border-white/10 backdrop-blur-md bg-slate-950/20">
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <img src="{{ asset('logo.png') }}" alt="Logo RSUD Kajen" class="h-12 w-auto transition-transform group-hover:scale-105 duration-300">
            </a>

            @if (Route::has('login'))
                <nav class="flex items-center gap-4">
                    @auth
                        <span class="text-sm text-slate-300 hidden sm:inline">
                            Halo, <strong class="text-white font-semibold">{{ Auth::user()->name }}</strong>
                        </span>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-white/10 hover:bg-white/20 border border-white/15 hover:border-white/20 rounded-xl text-sm font-medium transition-all cursor-pointer">
                                Log out
                            </button>
                        </form>
                    @else
                        <a 
                            href="{{ route('login') }}" 
                            class="px-4 py-2 text-slate-200 hover:text-white text-sm font-medium transition-colors"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a 
                                href="{{ route('register') }}" 
                                class="px-4 py-2 bg-[#0071BC] hover:bg-[#005c9a] border border-transparent rounded-xl text-sm font-medium transition-all shadow-[0px_2px_8px_rgba(0,113,188,0.3)] cursor-pointer"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <!-- Main Content (Hero Section) -->
        <main class="relative z-10 flex-grow flex items-center justify-center px-6 py-12 lg:px-12">
            <div class="w-full max-w-4xl flex flex-col items-center text-center gap-8">
                
                <!-- Success Alert -->
                @if (session('success'))
                    <div class="flex items-center gap-3 px-5 py-3.5 bg-emerald-500/25 border border-emerald-500/30 text-emerald-200 rounded-2xl text-sm leading-normal backdrop-blur-md shadow-lg max-w-md animate-pulse">
                        <svg class="w-5 h-5 shrink-0 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-left font-medium">{{ session('success') }}</p>
                    </div>
                @endif

                <!-- Center Glassmorphism Welcome Card -->
                <div class="w-full max-w-2xl bg-white/5 border border-white/10 rounded-3xl p-8 lg:p-12 backdrop-blur-xl shadow-2xl flex flex-col gap-6 items-center">
                    <img src="{{ asset('logo.png') }}" alt="Logo RSUD Kajen Large" class="h-20 w-auto mb-2 pointer-events-none">
                    
                    <div class="flex flex-col gap-2">
                        <h1 class="text-3xl lg:text-4xl font-bold tracking-tight text-white">
                            Portal Informasi Jadwal Dokter
                        </h1>
                        <p class="text-slate-300 text-sm lg:text-base max-w-lg mx-auto leading-relaxed">
                            Selamat datang di RSUD Kajen Kabupaten Pekalongan. Mengelola informasi dokter yang berhalangan praktik serta mengirimkan notifikasi kepada pasien secara cepat, akurat, dan terintegrasi.
                        </p>
                    </div>

                    <div class="w-full h-px bg-white/10 my-2"></div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="relative z-10 w-full py-6 text-center border-t border-white/5 bg-slate-950/35">
            <p class="text-xs text-slate-400">
                &copy; {{ date('Y') }} RSUD Kajen Kabupaten Pekalongan. Melayani dengan hati.
            </p>
        </footer>
    </body>
</html>
