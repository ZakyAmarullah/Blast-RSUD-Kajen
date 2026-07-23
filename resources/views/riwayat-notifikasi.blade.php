<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Notifikasi - RSUD Kajen</title>

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
                <!-- Kirim Notifikasi -->
                <li>
                    <a href="{{ route('dokter-berhalangan') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/80 hover:bg-white/10 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                        Kirim Notifikasi
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
                <!-- Riwayat Notifikasi Active -->
                <li>
                    <a href="{{ route('riwayat-notifikasi') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-white/20 text-white text-sm font-semibold">
                        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
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

            <!-- Page Title on Navbar Left -->
            <h1 class="text-base font-bold text-gray-800">Riwayat Notifikasi</h1>

            <!-- Controls Group on Navbar Right -->
            <div class="ml-auto flex items-center gap-3 flex-wrap">

               <div class="flex items-center gap-2 px-3 py-1.5 border border-[#1e6b45]/30 rounded-lg bg-[#1e6b45]/5 text-[#1e6b45] text-sm font-medium cursor-pointer hover:bg-[#1e6b45]/10 transition-colors">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Poli Penyakit Dalam
                    <svg class="w-3.5 h-3.5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>

                <!-- Date Range Filters -->
                <div class="flex items-center gap-4">
                    <!-- Start Date -->
                    <div class="relative">
                        <input
                            type="date"
                            id="tanggal"
                            name="tanggal"
                            value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                            class="w-28 border border-gray-300 rounded-lg px-3 py-1.5 text-xs text-gray-700 bg-white font-medium focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/30 focus:border-[#1e6b45] transition-colors pr-8 cursor-pointer"
                        >
                       
                    </div>

                    <span class="text-xs text-gray-500 font-medium">s.d.</span>

                    <!-- End Date -->
                    <div class="relative">
                        <input
                            type="date"
                            value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                            class="w-28 border border-gray-300 rounded-lg px-3 py-1.5 text-xs text-gray-700 bg-white font-medium focus:outline-none focus:ring-2 focus:ring-[#1e6b45]/30 focus:border-[#1e6b45] transition-colors pr-8 cursor-pointer"
                        >
                    </div>

                    <!-- Filter Button -->
                    <button class="px-4 py-1.5 bg-[#1e6b45] hover:bg-[#175438] text-white text-xs font-semibold rounded-lg transition-colors shadow-sm cursor-pointer ml-1">
                        Filter
                    </button>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-y-auto bg-gray-50 p-6 pt-8">

            <!-- Main Content Card -->
            <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6 space-y-6">

                <!-- Table Section -->
                <div class="w-full overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm text-gray-700">
                            <thead class="bg-gray-50/70 border-b border-gray-200/80 text-[11px] font-bold text-gray-700 tracking-wider">
                                <tr>
                                    <th class="px-5 py-3.5 w-14">No.</th>
                                    <th class="px-5 py-3.5">Tanggal</th>
                                    <th class="px-5 py-3.5">Dokter</th>
                                    <th class="px-5 py-3.5">Poli</th>
                                    <th class="px-5 py-3.5">Target</th>
                                    <th class="px-5 py-3.5">Berhasil</th>
                                    <th class="px-5 py-3.5">Retry</th>
                                    <th class="px-5 py-3.5">Gagal</th>
                                    <th class="px-5 py-3.5 text-center w-24">Detail</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 font-medium text-gray-800 text-xs">
                                <tr class="hover:bg-gray-50/60 transition-colors">
                                    <td class="px-5 py-3.5 text-gray-400">1</td>
                                    <td class="px-5 py-3.5 font-bold text-gray-800">21/07/2026</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">dr. Andi, Sp.PD</td>
                                    <td class="px-5 py-3.5 text-gray-600">Penyakit Dalam</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">120</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">118</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">2</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">0</td>
                                    <td class="px-5 py-3.5 text-center">
                                        <button class="px-3 py-1 text-xs font-semibold text-[#1e6b45] border border-[#1e6b45]/30 rounded-lg hover:bg-[#1e6b45]/10 transition-colors cursor-pointer">
                                            Lihat
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50/60 transition-colors">
                                    <td class="px-5 py-3.5 text-gray-400">2</td>
                                    <td class="px-5 py-3.5 font-bold text-gray-800">20/07/2026</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">dr. Rina, Sp.A</td>
                                    <td class="px-5 py-3.5 text-gray-600">Anak</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">80</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">78</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">1</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">1</td>
                                    <td class="px-5 py-3.5 text-center">
                                        <button class="px-3 py-1 text-xs font-semibold text-[#1e6b45] border border-[#1e6b45]/30 rounded-lg hover:bg-[#1e6b45]/10 transition-colors cursor-pointer">
                                            Lihat
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50/60 transition-colors">
                                    <td class="px-5 py-3.5 text-gray-400">3</td>
                                    <td class="px-5 py-3.5 font-bold text-gray-800">19/07/2026</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">dr. Budi, Sp.B</td>
                                    <td class="px-5 py-3.5 text-gray-600">Bedah</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">65</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">64</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">1</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">0</td>
                                    <td class="px-5 py-3.5 text-center">
                                        <button class="px-3 py-1 text-xs font-semibold text-[#1e6b45] border border-[#1e6b45]/30 rounded-lg hover:bg-[#1e6b45]/10 transition-colors cursor-pointer">
                                            Lihat
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50/60 transition-colors">
                                    <td class="px-5 py-3.5 text-gray-400">4</td>
                                    <td class="px-5 py-3.5 font-bold text-gray-800">18/07/2026</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">dr. Sinta, Sp.M</td>
                                    <td class="px-5 py-3.5 text-gray-600">Mata</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">50</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">50</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">0</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">0</td>
                                    <td class="px-5 py-3.5 text-center">
                                        <button class="px-3 py-1 text-xs font-semibold text-[#1e6b45] border border-[#1e6b45]/30 rounded-lg hover:bg-[#1e6b45]/10 transition-colors cursor-pointer">
                                            Lihat
                                        </button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50/60 transition-colors">
                                    <td class="px-5 py-3.5 text-gray-400">5</td>
                                    <td class="px-5 py-3.5 font-bold text-gray-800">17/07/2026</td>
                                    <td class="px-5 py-3.5 font-semibold text-gray-800">dr. Arif, Sp.OG</td>
                                    <td class="px-5 py-3.5 text-gray-600">Kandungan</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">70</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">69</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">1</td>
                                    <td class="px-5 py-3.5 text-gray-800 font-semibold">0</td>
                                    <td class="px-5 py-3.5 text-center">
                                        <button class="px-3 py-1 text-xs font-semibold text-[#1e6b45] border border-[#1e6b45]/30 rounded-lg hover:bg-[#1e6b45]/10 transition-colors cursor-pointer">
                                            Lihat
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Table Footer / Pagination -->
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 font-medium text-xs text-gray-500 pt-1">
                    <p>Menampilkan 1 - 5 dari 45 data</p>

                    <div class="flex items-center gap-1 bg-white border border-gray-200 rounded-lg p-1 shadow-sm select-none">
                        <!-- Prev -->
                        <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-gray-100 text-gray-400 transition-colors cursor-pointer">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <!-- Page 1 Active -->
                        <button class="w-8 h-8 flex items-center justify-center rounded-md bg-[#1e6b45] text-white font-bold cursor-pointer">1</button>
                        <!-- Page 2 -->
                        <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-gray-100 transition-colors cursor-pointer">2</button>
                        <!-- Page 3 -->
                        <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-gray-100 transition-colors cursor-pointer">3</button>
                        <!-- Dots -->
                        <span class="w-8 h-8 flex items-center justify-center text-gray-400">...</span>
                        <!-- Page 9 -->
                        <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-gray-100 transition-colors cursor-pointer">9</button>
                        <!-- Next -->
                        <button class="w-8 h-8 flex items-center justify-center rounded-md hover:bg-gray-100 text-gray-400 transition-colors cursor-pointer">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
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

</body>
</html>
