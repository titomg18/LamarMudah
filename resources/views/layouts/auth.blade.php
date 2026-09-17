<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LamarMudah - Portal Lowongan Kerja')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col justify-between antialiased">

    <!-- Top Navigation Bar -->
    <header class="bg-white border-b border-slate-200/80 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 sm:h-20">
                <!-- Brand Logo -->
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 bg-teal-700 rounded-xl flex items-center justify-center text-white shadow-md shadow-teal-700/20 group-hover:bg-teal-800 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-extrabold text-xl text-teal-900 tracking-tight leading-none">
                            Lamar<span class="text-[#c84b14]">Mudah</span>
                        </span>
                        <span class="text-[9px] font-bold text-slate-400 tracking-widest uppercase mt-0.5">Portal Lowongan Kerja</span>
                    </div>
                </a>

                <!-- Navigation Links -->
                <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="{{ route('dashboard') }}" class="text-sky-900 font-bold bg-sky-100/90 px-4 py-2 rounded-xl text-sm transition-colors">Beranda</a>
                    <a href="#" class="text-slate-600 hover:text-slate-900 font-semibold px-4 py-2 rounded-xl text-sm transition-colors">Cari Lowongan</a>
                    <a href="#" class="text-slate-600 hover:text-slate-900 font-semibold px-4 py-2 rounded-xl text-sm transition-colors">Perusahaan</a>
                    <a href="#" class="text-slate-600 hover:text-slate-900 font-semibold px-4 py-2 rounded-xl text-sm transition-colors">Tips Karir</a>
                </nav>

                <!-- Right Actions -->
                <div class="flex items-center space-x-3 sm:space-x-4">
                    <a href="#" class="bg-[#c84b14] hover:bg-[#a63d0f] text-white px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs sm:text-sm shadow-md shadow-orange-900/10 transition-all flex items-center gap-2">
                        <span>Posting Lowongan</span>
                    </a>
                    <button type="button" class="p-2 text-slate-500 hover:text-slate-700 hover:bg-slate-100 rounded-xl relative transition-colors" title="Notifikasi">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                        <span class="absolute top-2 right-2 w-2.5 h-2.5 bg-red-500 rounded-full ring-2 ring-white"></span>
                    </button>
                    <div class="flex items-center gap-1.5 cursor-pointer pl-1">
                        <img src="{{ asset('assets/images/rizky_avatar.jpg') }}" alt="User Profile" class="w-9 h-9 rounded-full border-2 border-slate-200 object-cover shadow-sm">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Container -->
    <main class="flex-grow py-8 sm:py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Auth Main Split Card -->
            <div class="bg-white rounded-3xl shadow-2xl shadow-slate-200/60 border border-slate-200/60 overflow-hidden grid grid-cols-1 lg:grid-cols-12">
                
                <!-- Left Form Section (5 cols) -->
                <div class="lg:col-span-5 p-6 sm:p-8 md:p-10 flex flex-col justify-between">
                    @yield('content')
                </div>

                <!-- Right Hero Banner Panel (7 cols) -->
                <div class="lg:col-span-7 bg-[#046674] p-6 sm:p-8 lg:p-10 text-white flex flex-col justify-between relative overflow-hidden">
                    <!-- Decorative Background Gradients -->
                    <div class="absolute -top-24 -right-24 w-96 h-96 bg-teal-400/10 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>

                    <div class="relative z-10">
                        <!-- Top Badges Row -->
                        <div class="flex items-center justify-between gap-3 mb-6">
                            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-teal-950/40 backdrop-blur-md text-xs font-semibold text-white border border-teal-400/20 shadow-sm">
                                <span class="relative flex h-2.5 w-2.5">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-red-500"></span>
                                </span>
                                <span>3.450+ Lowongan Aktif Hari Ini</span>
                            </div>
                            <div class="flex items-center gap-1.5 text-xs text-teal-100 font-medium">
                                <svg class="w-4 h-4 text-teal-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Terverifikasi Kemenaker</span>
                            </div>
                        </div>

                        <!-- Central Image Banner Container -->
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10 my-4 group">
                            <img src="{{ asset('assets/images/office_hero.jpg') }}" alt="Tim LamarMudah" class="w-full h-56 sm:h-64 object-cover object-center group-hover:scale-105 transition-transform duration-700">
                            
                            <!-- Overlay Badge at bottom of image -->
                            <div class="absolute bottom-3 left-3 right-3 bg-slate-950/85 backdrop-blur-md p-3.5 rounded-xl border border-white/15 text-white flex items-center justify-between shadow-xl">
                                <div>
                                    <span class="text-[10px] font-extrabold tracking-widest text-teal-400 uppercase block mb-0.5">PELUANG EMAS</span>
                                    <p class="text-xs sm:text-sm font-bold text-white leading-tight">Koneksi Langsung ke HRD Top BUMN & Tech Unicorn</p>
                                </div>
                                <div class="w-9 h-9 bg-teal-500/20 text-teal-300 rounded-lg flex items-center justify-center shrink-0 border border-teal-400/30">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Main Heading & Subtitle -->
                        <div class="mt-6 mb-6">
                            <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight leading-tight mb-3">
                                Temukan Pekerjaan Impianmu Sekarang
                            </h2>
                            <p class="text-teal-100 text-xs sm:text-sm leading-relaxed">
                                Bergabunglah dengan jutaan talenta profesional di seluruh Indonesia dan raih karir masa depan impianmu dengan proses lamaran cepat, aman, dan transparan.
                            </p>
                        </div>

                        <!-- Testimonial Frosted Glass Card -->
                        <div class="bg-white/15 backdrop-blur-md border border-white/20 rounded-2xl p-4 sm:p-5 text-white shadow-lg mb-6">
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('assets/images/rizky_avatar.jpg') }}" alt="Rizky Pratama" class="w-10 h-10 rounded-full object-cover border-2 border-white/40 shadow-sm">
                                    <div class="flex items-center text-amber-400 gap-0.5">
                                        ★★★★★
                                    </div>
                                </div>
                            </div>
                            <p class="text-xs sm:text-sm text-teal-50 italic leading-relaxed mb-3">
                                "Berkat LamarMudah, saya diterima kerja di unicorn dalam 2 minggu! Prosesnya simpel tanpa ribet unggah ulang data."
                            </p>
                            <div class="flex items-center justify-between border-t border-white/10 pt-2.5">
                                <span class="font-bold text-xs sm:text-sm text-white">Rizky Pratama</span>
                                <span class="text-xs text-teal-200">Software Engineer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Metrics Bar -->
                    <div class="relative z-10 grid grid-cols-3 gap-2 pt-4 border-t border-teal-500/30 text-center">
                        <div>
                            <div class="text-xl sm:text-2xl font-extrabold text-white tracking-tight">98%</div>
                            <div class="text-[11px] text-teal-100 font-medium">Respon Cepat</div>
                        </div>
                        <div class="border-x border-teal-500/30 px-2">
                            <div class="text-xl sm:text-2xl font-extrabold text-white tracking-tight">12.5k+</div>
                            <div class="text-[11px] text-teal-100 font-medium">Perusahaan Mitra</div>
                        </div>
                        <div>
                            <div class="text-xl sm:text-2xl font-extrabold text-white tracking-tight">1Click</div>
                            <div class="text-[11px] text-teal-100 font-medium">Lamar Cepat</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Feature Highlight Cards (3 Cards) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-sky-50 text-sky-600 rounded-xl flex items-center justify-center shrink-0 border border-sky-100">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm">Lowongan Anti-Penipuan</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Verifikasi legalitas dokumen PT & CV ketat.</p>
                    </div>
                </div>

                <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex items-center justify-center shrink-0 border border-amber-100">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm">Status Real-time</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Pantau langsung progres review HRD.</p>
                    </div>
                </div>

                <div class="bg-white p-4 sm:p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-teal-50 text-teal-600 rounded-xl flex items-center justify-center shrink-0 border border-teal-100">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm">Data Pribadi Aman</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Enkripsi data standar perbankan nasional.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-white border-t border-slate-200 pt-12 pb-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 pb-10 border-b border-slate-200">
                <!-- Brand Info -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                        <div class="w-9 h-9 bg-teal-700 rounded-xl flex items-center justify-center text-white font-bold text-lg">
                            LM
                        </div>
                        <span class="font-extrabold text-xl text-teal-900">Lamar<span class="text-[#c84b14]">Mudah</span></span>
                    </a>
                    <p class="text-xs text-slate-500 leading-relaxed max-w-sm">
                        Platform pencarian kerja terdepan di Indonesia. Menghubungkan talenta profesional berbakat dengan ribuan peluang karir impian secara mudah, cepat, dan transparan.
                    </p>
                    <div class="flex items-center space-x-3 pt-2 text-slate-400">
                        <a href="#" class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center hover:bg-teal-700 hover:text-white transition-colors">🌐</a>
                        <a href="#" class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center hover:bg-teal-700 hover:text-white transition-colors">✉️</a>
                        <a href="#" class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center hover:bg-teal-700 hover:text-white transition-colors">🎧</a>
                    </div>
                </div>

                <!-- Column 1: Navigasi Cepat -->
                <div>
                    <h5 class="font-bold text-sm text-slate-900 mb-4">Navigasi Cepat</h5>
                    <ul class="space-y-2.5 text-xs text-slate-600">
                        <li><a href="#" class="hover:text-teal-700 transition-colors">Kategori Pekerjaan</a></li>
                        <li><a href="#" class="hover:text-teal-700 transition-colors">Lokasi Populer</a></li>
                        <li><a href="#" class="hover:text-teal-700 transition-colors">Direktori Perusahaan</a></li>
                        <li><a href="#" class="hover:text-teal-700 transition-colors">Tips Karir & Resume</a></li>
                    </ul>
                </div>

                <!-- Column 2: Dukungan & Legal -->
                <div>
                    <h5 class="font-bold text-sm text-slate-900 mb-4">Dukungan & Legal</h5>
                    <ul class="space-y-2.5 text-xs text-slate-600">
                        <li><a href="#" class="hover:text-teal-700 transition-colors">Bantuan & FAQ</a></li>
                        <li><a href="#" class="hover:text-teal-700 transition-colors">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-teal-700 transition-colors">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-teal-700 transition-colors">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Column 3: Unduh Aplikasi -->
                <div>
                    <h5 class="font-bold text-sm text-slate-900 mb-4">Unduh Aplikasi</h5>
                    <p class="text-xs text-slate-500 mb-3">Akses lowongan lebih praktis lewat genggaman Anda.</p>
                    <div class="space-y-2">
                        <a href="#" class="flex items-center gap-3 bg-slate-100 hover:bg-slate-200 text-slate-800 p-2.5 rounded-xl transition-colors">
                            <span class="text-xl">▶</span>
                            <div>
                                <span class="text-[9px] uppercase font-bold text-slate-500 block">GET IT ON</span>
                                <span class="font-bold text-xs text-slate-900">Google Play</span>
                            </div>
                        </a>
                        <a href="#" class="flex items-center gap-3 bg-slate-100 hover:bg-slate-200 text-slate-800 p-2.5 rounded-xl transition-colors">
                            <span class="text-xl">🍏</span>
                            <div>
                                <span class="text-[9px] uppercase font-bold text-slate-500 block">DOWNLOAD ON</span>
                                <span class="font-bold text-xs text-slate-900">App Store</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-between items-center pt-6 text-xs text-slate-400 gap-2">
                <p>© 2025 LamarMudah. Hak Cipta Dilindungi Undang-Undang.</p>
                <p>Dibuat dengan dedikasi untuk pencari karir Indonesia.</p>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts -->
    <script>
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            if (input.type === 'password') {
                input.type = 'text';
            } else {
                input.type = 'password';
            }
        }
    </script>
</body>
</html>
