<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* Fallback if assets are not compiled */
                body {
                    font-family: 'Instrument Sans', sans-serif;
                }
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] flex items-center justify-center min-h-screen p-6 font-sans">
        <div class="w-full max-w-[440px] flex flex-col gap-6">
            <!-- Brand / Logo Link -->
            <div class="flex items-center justify-center">
                <a href="{{ route('home') }}" class="group flex flex-col items-center">
                    <img src="{{ asset('logo.png') }}" alt="Logo RSUD Kajen" class="h-20 w-auto transition-transform group-hover:scale-105 duration-300">
                </a>
            </div>

            <!-- Success Notification Alert -->
            @if (session('success'))
                <div class="flex items-start gap-3 p-4 bg-emerald-50 dark:bg-emerald-950/30 border border-emerald-500/30 dark:border-emerald-500/20 text-emerald-800 dark:text-emerald-300 rounded-xl text-sm leading-normal shadow-[0px_1px_2px_0px_rgba(0,0,0,0.03)]">
                    <svg class="w-5 h-5 shrink-0 text-emerald-600 dark:text-emerald-400 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div>
                        <span class="font-semibold">Sukses!</span> {{ session('success') }}
                    </div>
                </div>
            @endif

            <!-- Main Login Card -->
            <div class="bg-white dark:bg-[#161615] rounded-2xl shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06),0px_8px_16px_-4px_rgba(0,0,0,0.04)] border border-[#19140015] dark:border-[#3E3E3A] p-8 relative overflow-hidden transition-all duration-300 hover:shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_4px_8px_0px_rgba(0,0,0,0.04),0px_16px_32px_-8px_rgba(0,0,0,0.08)]">
                <!-- Background ambient glows -->
                <div class="absolute -top-24 -right-24 w-48 h-48 bg-[#0071BC]/5 dark:bg-[#0071BC]/10 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-[#8CC63F]/5 dark:bg-[#8CC63F]/10 rounded-full blur-3xl pointer-events-none"></div>

                <div class="relative">
                    <h2 class="text-2xl font-semibold tracking-tight text-[#1b1b18] dark:text-white mb-1">
                        Selamat Datang Kembali
                    </h2>
                    <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mb-6">
                        Silakan masuk ke akun Anda dengan mengisi email dan password.
                    </p>

                    <form action="{{ route('login.submit') }}" method="POST" class="flex flex-col gap-4">
                        @csrf

                        <!-- Email Field -->
                        <div class="flex flex-col gap-1.5">
                            <label for="email" class="text-xs font-semibold text-[#1b1b18]/80 dark:text-white/80 uppercase tracking-wider">
                                Email
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                value="{{ old('email') }}" 
                                placeholder="nama@email.com"
                                class="w-full px-4 py-2.5 bg-[#FDFDFC] dark:bg-[#1C1C1A] border border-[#19140020] dark:border-[#3E3E3A] rounded-xl text-sm transition-all focus:outline-none focus:border-[#0071BC] dark:focus:border-[#0071BC] focus:ring-2 focus:ring-[#0071BC]/10 dark:focus:ring-[#0071BC]/10 text-[#1b1b18] dark:text-white placeholder-[#706f6c]/50 dark:placeholder-[#A1A09A]/45 @error('email') border-red-500 focus:border-red-500 focus:ring-red-500/10 @enderror"
                                required
                                autofocus
                            >
                            @error('email')
                                <span class="text-xs text-red-500 font-medium mt-1 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="flex flex-col gap-1.5">
                            <label for="password" class="text-xs font-semibold text-[#1b1b18]/80 dark:text-white/80 uppercase tracking-wider">
                                Password
                            </label>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                placeholder="Masukkan password Anda"
                                class="w-full px-4 py-2.5 bg-[#FDFDFC] dark:bg-[#1C1C1A] border border-[#19140020] dark:border-[#3E3E3A] rounded-xl text-sm transition-all focus:outline-none focus:border-[#0071BC] dark:focus:border-[#0071BC] focus:ring-2 focus:ring-[#0071BC]/10 dark:focus:ring-[#0071BC]/10 text-[#1b1b18] dark:text-white placeholder-[#706f6c]/50 dark:placeholder-[#A1A09A]/45 @error('password') border-red-500 focus:border-red-500 focus:ring-red-500/10 @enderror"
                                required
                            >
                            @error('password')
                                <span class="text-xs text-red-500 font-medium mt-1 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                    </svg>
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <!-- Remember Me checkbox -->
                        <div class="flex items-center justify-between mt-1">
                            <label class="flex items-center gap-2 text-sm text-[#706f6c] dark:text-[#A1A09A] cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="remember" 
                                    class="rounded border-[#19140020] dark:border-[#3E3E3A] text-[#0071BC] focus:ring-[#0071BC]"
                                >
                                Ingat saya
                            </label>
                        </div>

                        <!-- Login Button -->
                        <button 
                            type="submit" 
                            class="w-full mt-2 px-5 py-3 bg-[#0071BC] hover:bg-[#005c9a] text-white dark:text-white font-medium rounded-xl text-sm transition-all shadow-[0px_1px_2px_0px_rgba(0,0,0,0.05)] cursor-pointer"
                        >
                            Masuk
                        </button>
                        <a href="{{ route('register') }}" class="text-sm font-medium text-[#0071BC] dark:text-[#38bdf8] hover:underline">
                            Belum punya akun?
                        </a>
                    </form>
                </div>
            </div>

            <!-- Footer / Copyright -->
            <!-- <p class="text-center text-xs text-[#706f6c]/70 dark:text-[#A1A09A]/60">
                &copy; {{ date('Y') }} blastRSUD. All rights reserved.
            </p> -->
        </div>
    </body>
</html>
