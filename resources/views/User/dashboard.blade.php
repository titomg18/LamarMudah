<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LamarMudah - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-slate-800 antialiased">
    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-teal-600 rounded flex items-center justify-center text-white font-bold text-xl">
                        LM
                    </div>
                    <span class="font-bold text-xl text-teal-800">Lamar<span class="text-orange-500">Mudah</span></span>
                </div>
                
                <!-- Links -->
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-teal-700 font-semibold bg-teal-50 px-4 py-2 rounded-full">Beranda</a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 px-4 py-2 font-medium">Cari Lowongan</a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 px-4 py-2 font-medium">Perusahaan</a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 px-4 py-2 font-medium">Tips Karir</a>
                </div>

                <!-- Right Menu -->
                <div class="flex items-center space-x-4">
                    <a href="#" class="bg-orange-600 hover:bg-orange-700 text-white px-5 py-2.5 rounded-full font-medium transition-colors text-sm hidden sm:block">
                        Posting Lowongan
                    </a>
                    <button class="p-2 text-gray-400 hover:text-gray-600 relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        <span class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white"></span>
                    </button>
                    <button class="flex items-center gap-2">
                        <img src="https://i.pravatar.cc/150?img=11" alt="User" class="w-10 h-10 rounded-full border-2 border-gray-200">
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Left Content -->
                <div class="space-y-8">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 text-blue-700 text-xs font-bold tracking-wide uppercase">
                        <span class="w-2 h-2 rounded-full bg-red-500"></span>
                        Platform Karir No. 1 Indonesia
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight">
                        Temukan Pekerjaan <br>
                        <span class="text-teal-700">Impianmu dengan Mudah</span>
                    </h1>
                    
                    <p class="text-gray-500 text-lg max-w-xl leading-relaxed">
                        Menghubungkan lebih dari <span class="font-bold text-gray-800">50.000+ talenta hebat</span> dengan ribuan lowongan bergaji kompetitif dari perusahaan terkemuka di seluruh Nusantara.
                    </p>

                    <!-- Search Box -->
                    <div class="bg-white p-2 rounded-2xl md:rounded-full shadow-lg shadow-gray-200/50 border border-gray-100 flex flex-col md:flex-row items-center divide-y md:divide-y-0 md:divide-x divide-gray-200">
                        <div class="flex items-center px-4 py-3 flex-1 w-full">
                            <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <div class="flex flex-col w-full">
                                <label class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1">Jabatan / Keahlian</label>
                                <input type="text" placeholder="Contoh: UI Designer" class="bg-transparent border-none outline-none text-sm text-gray-800 font-medium w-full focus:ring-0 p-0 placeholder-gray-400">
                            </div>
                        </div>
                        <div class="flex items-center px-4 py-3 flex-1 w-full">
                            <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div class="flex flex-col w-full">
                                <label class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1">Lokasi Kerja</label>
                                <select class="bg-transparent border-none outline-none text-sm text-gray-800 font-medium w-full focus:ring-0 p-0 cursor-pointer appearance-none">
                                    <option>Semua Lokasi</option>
                                    <option>Jakarta</option>
                                    <option>Bandung</option>
                                    <option>Surabaya</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex items-center px-4 py-3 flex-1 w-full">
                            <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            <div class="flex flex-col w-full">
                                <label class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1">Industri</label>
                                <select class="bg-transparent border-none outline-none text-sm text-gray-800 font-medium w-full focus:ring-0 p-0 cursor-pointer appearance-none">
                                    <option>Semua Bidang</option>
                                    <option>IT & Software</option>
                                    <option>Marketing</option>
                                    <option>Finance</option>
                                </select>
                            </div>
                        </div>
                        <div class="p-2 w-full md:w-auto">
                            <button class="w-full bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-xl md:rounded-full font-semibold transition-colors flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                <span class="md:hidden lg:inline">Cari Lowongan</span>
                                <span class="hidden md:inline lg:hidden">Cari</span>
                            </button>
                        </div>
                    </div>

                    <!-- Popular Tags -->
                    <div class="flex items-center gap-3 text-sm flex-wrap">
                        <span class="text-gray-500 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                            Populer:
                        </span>
                        <a href="#" class="text-gray-600 hover:text-teal-700 font-medium bg-white px-3 py-1 rounded-full border border-gray-200 transition-colors">UI/UX Designer</a>
                        <a href="#" class="text-gray-600 hover:text-teal-700 font-medium bg-white px-3 py-1 rounded-full border border-gray-200 transition-colors">Frontend Developer</a>
                        <a href="#" class="text-gray-600 hover:text-teal-700 font-medium bg-white px-3 py-1 rounded-full border border-gray-200 transition-colors">Digital Marketing</a>
                        <a href="#" class="text-gray-600 hover:text-teal-700 font-medium bg-white px-3 py-1 rounded-full border border-gray-200 transition-colors">Data Analyst</a>
                        <a href="#" class="text-gray-600 hover:text-teal-700 font-medium bg-white px-3 py-1 rounded-full border border-gray-200 transition-colors">Remote Kerja</a>
                    </div>
                </div>

                <!-- Right Content (Images) -->
                <div class="relative hidden lg:block h-[500px]">
                    <!-- Main image collage -->
                    <div class="absolute right-0 top-0 w-4/5 h-full rounded-3xl overflow-hidden shadow-2xl flex">
                        <div class="w-1/2 h-full">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=600&auto=format&fit=crop" alt="Professional Woman" class="w-full h-full object-cover">
                        </div>
                        <div class="w-1/2 h-full flex flex-col">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=600&auto=format&fit=crop" alt="Team Discussion" class="w-full h-1/2 object-cover">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=600&auto=format&fit=crop" alt="Colleagues" class="w-full h-1/2 object-cover">
                        </div>
                    </div>
                    
                    <!-- Floating Card 1 -->
                    <div class="absolute -left-6 top-8 bg-white p-3 rounded-2xl shadow-xl flex items-center gap-3 animate-bounce" style="animation-duration: 3s;">
                        <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center text-orange-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-500 font-bold uppercase">Proses Kilat</p>
                            <p class="font-bold text-gray-900 text-sm">1-Click Apply</p>
                        </div>
                    </div>

                    <!-- Floating Card 2 -->
                    <div class="absolute left-8 bottom-10 bg-white p-4 rounded-2xl shadow-xl flex items-center gap-4 w-[90%] border border-gray-100">
                        <div class="w-12 h-12 bg-green-100 rounded-2xl flex items-center justify-center text-green-600 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="flex-1">
                            <p class="font-bold text-gray-900 text-sm">98.4% Penempatan Kerja Terbukti</p>
                            <p class="text-[10px] text-gray-500 mt-0.5">Proses kurasi langsung dari HR terverifikasi.</p>
                        </div>
                        <div class="bg-blue-50 text-blue-700 text-[10px] font-bold px-2 py-1 rounded">Baru</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Stats Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Stat 1 -->
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900">25.840+</h3>
                        <p class="text-xs md:text-sm text-gray-500">Lowongan Aktif</p>
                    </div>
                </div>
                <!-- Stat 2 -->
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center text-teal-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900">4.250+</h3>
                        <p class="text-xs md:text-sm text-gray-500">Mitra Perusahaan</p>
                    </div>
                </div>
                <!-- Stat 3 -->
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center text-red-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900">54.000+</h3>
                        <p class="text-xs md:text-sm text-gray-500">Talenta Terdaftar</p>
                    </div>
                </div>
                <!-- Stat 4 -->
                <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4 hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center text-green-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.514"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900">98.2%</h3>
                        <p class="text-xs md:text-sm text-gray-500">Tingkat Kepuasan</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Categories Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h4 class="text-red-700 font-bold text-xs tracking-wider uppercase mb-2">EKSPLORASI INDUSTRI</h4>
                    <h2 class="text-3xl font-bold text-gray-900">Kategori Pekerjaan Populer</h2>
                </div>
                <a href="#" class="text-teal-700 font-semibold hover:text-teal-800 hidden md:flex items-center gap-1">
                    Lihat Semua 32+ Kategori 
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Category Card 1 -->
                <a href="#" class="group block p-6 rounded-2xl border border-gray-100 bg-white hover:shadow-lg transition-all duration-300 hover:border-teal-100">
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-teal-700 transition-colors">Teknologi & Software</h3>
                    <p class="text-sm text-gray-500 mb-5">Backend, Mobile, QA, DevOps</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-bold bg-blue-50 text-blue-700 px-2.5 py-1 rounded">1,420 Lowongan</span>
                        <svg class="w-5 h-5 text-gray-300 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </a>
                
                <!-- Category Card 2 -->
                <a href="#" class="group block p-6 rounded-2xl border border-gray-100 bg-white hover:shadow-lg transition-all duration-300 hover:border-teal-100">
                    <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-5 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-teal-700 transition-colors">Desain & Seni Visual</h3>
                    <p class="text-sm text-gray-500 mb-5">UI/UX, Grafis, Illustrator, 3D</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-bold bg-purple-50 text-purple-700 px-2.5 py-1 rounded">680 Lowongan</span>
                        <svg class="w-5 h-5 text-gray-300 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </a>

                <!-- Category Card 3 -->
                <a href="#" class="group block p-6 rounded-2xl border border-gray-100 bg-white hover:shadow-lg transition-all duration-300 hover:border-teal-100">
                    <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center mb-5 group-hover:bg-orange-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-teal-700 transition-colors">Pemasaran & Media</h3>
                    <p class="text-sm text-gray-500 mb-5">SEO, Content, Ads, Media Sosial</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-bold bg-orange-50 text-orange-700 px-2.5 py-1 rounded">890 Lowongan</span>
                        <svg class="w-5 h-5 text-gray-300 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </a>

                <!-- Category Card 4 -->
                <a href="#" class="group block p-6 rounded-2xl border border-gray-100 bg-white hover:shadow-lg transition-all duration-300 hover:border-teal-100">
                    <div class="w-12 h-12 bg-teal-50 text-teal-600 rounded-xl flex items-center justify-center mb-5 group-hover:bg-teal-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-teal-700 transition-colors">Keuangan & Akuntansi</h3>
                    <p class="text-sm text-gray-500 mb-5">Audit, Tax, Fintech, Analis</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-bold bg-teal-50 text-teal-700 px-2.5 py-1 rounded">510 Lowongan</span>
                        <svg class="w-5 h-5 text-gray-300 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </a>

                <!-- Category Card 5 -->
                <a href="#" class="group block p-6 rounded-2xl border border-gray-100 bg-white hover:shadow-lg transition-all duration-300 hover:border-teal-100">
                    <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-5 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-teal-700 transition-colors">Data & Analisis AI</h3>
                    <p class="text-sm text-gray-500 mb-5">Data Scientist, ML, BI Analyst</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-bold bg-indigo-50 text-indigo-700 px-2.5 py-1 rounded">415 Lowongan</span>
                        <svg class="w-5 h-5 text-gray-300 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </a>

                <!-- Category Card 6 -->
                <a href="#" class="group block p-6 rounded-2xl border border-gray-100 bg-white hover:shadow-lg transition-all duration-300 hover:border-teal-100">
                    <div class="w-12 h-12 bg-pink-50 text-pink-600 rounded-xl flex items-center justify-center mb-5 group-hover:bg-pink-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-teal-700 transition-colors">SDM & Rekrutmen</h3>
                    <p class="text-sm text-gray-500 mb-5">HR Generalist, Talent Scout</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-bold bg-pink-50 text-pink-700 px-2.5 py-1 rounded">330 Lowongan</span>
                        <svg class="w-5 h-5 text-gray-300 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </a>

                <!-- Category Card 7 -->
                <a href="#" class="group block p-6 rounded-2xl border border-gray-100 bg-white hover:shadow-lg transition-all duration-300 hover:border-teal-100">
                    <div class="w-12 h-12 bg-cyan-50 text-cyan-600 rounded-xl flex items-center justify-center mb-5 group-hover:bg-cyan-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-teal-700 transition-colors">Penjualan & Business Dev</h3>
                    <p class="text-sm text-gray-500 mb-5">B2B Account, Sales Lead, Retail</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-bold bg-cyan-50 text-cyan-700 px-2.5 py-1 rounded">970 Lowongan</span>
                        <svg class="w-5 h-5 text-gray-300 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </a>

                <!-- Category Card 8 -->
                <a href="#" class="group block p-6 rounded-2xl border border-gray-100 bg-white hover:shadow-lg transition-all duration-300 hover:border-teal-100">
                    <div class="w-12 h-12 bg-yellow-50 text-yellow-600 rounded-xl flex items-center justify-center mb-5 group-hover:bg-yellow-600 group-hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1 group-hover:text-teal-700 transition-colors">Layanan Pelanggan</h3>
                    <p class="text-sm text-gray-500 mb-5">Customer Success, Operations</p>
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-bold bg-yellow-50 text-yellow-700 px-2.5 py-1 rounded">430 Lowongan</span>
                        <svg class="w-5 h-5 text-gray-300 group-hover:text-teal-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                </a>
            </div>
            
            <div class="mt-6 md:hidden text-center">
                <a href="#" class="text-teal-700 font-semibold hover:text-teal-800 inline-flex items-center gap-1">
                    Lihat Semua 32+ Kategori 
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Jobs Section -->
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-8 gap-4">
                <div>
                    <h4 class="text-blue-700 font-bold text-xs tracking-wider uppercase mb-2">PELUANG UNGGULAN</h4>
                    <h2 class="text-3xl font-bold text-gray-900">Lowongan Terbaru & Populer</h2>
                </div>
                <div class="flex flex-wrap gap-2">
                    <button class="bg-teal-700 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-sm">Semua Jenis</button>
                    <button class="bg-white border border-gray-200 text-gray-600 hover:border-teal-700 hover:text-teal-700 px-4 py-2 rounded-full text-sm font-semibold transition-colors shadow-sm">Remote</button>
                    <button class="bg-white border border-gray-200 text-gray-600 hover:border-teal-700 hover:text-teal-700 px-4 py-2 rounded-full text-sm font-semibold transition-colors shadow-sm">Gaji Tertinggi</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <!-- Job Card 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-5">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-50 text-blue-700 rounded-xl flex items-center justify-center font-bold text-xl border border-blue-100">TD</div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 hover:text-teal-700 cursor-pointer transition-colors">Senior Frontend Engineer</h3>
                                <p class="text-sm text-gray-500 flex items-center gap-1 mt-0.5">PT Telkom Digital <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></p>
                            </div>
                        </div>
                        <button class="text-gray-300 hover:text-orange-500 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                        </button>
                    </div>
                    <div class="flex gap-2 mb-4 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs font-semibold px-2.5 py-1 rounded-md">Jakarta Selatan</span>
                        <span class="bg-blue-50 text-blue-700 text-xs font-semibold px-2.5 py-1 rounded-md">Full-time</span>
                        <span class="bg-green-50 text-green-700 text-xs font-semibold px-2.5 py-1 rounded-md">Hybrid</span>
                    </div>
                    <div class="mb-5">
                        <p class="font-bold text-teal-700 text-lg">Rp 18.000.000 - Rp 28.000.000 <span class="text-gray-400 text-sm font-normal">/ bln</span></p>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 flex items-center gap-1 font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            2 jam yang lalu
                        </span>
                        <button class="bg-orange-600 hover:bg-orange-700 text-white px-5 py-2 rounded-lg text-sm font-semibold transition-colors shadow-sm shadow-orange-600/20">Lamar Cepat</button>
                    </div>
                </div>

                <!-- Job Card 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-5">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-indigo-50 text-indigo-700 rounded-xl flex items-center justify-center font-bold text-xl border border-indigo-100">TN</div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 hover:text-teal-700 cursor-pointer transition-colors">Lead Product Designer</h3>
                                <p class="text-sm text-gray-500 flex items-center gap-1 mt-0.5">TokopediaNusantaraTech <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></p>
                            </div>
                        </div>
                        <button class="text-gray-300 hover:text-orange-500 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                        </button>
                    </div>
                    <div class="flex gap-2 mb-4 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs font-semibold px-2.5 py-1 rounded-md">Bandung</span>
                        <span class="bg-blue-50 text-blue-700 text-xs font-semibold px-2.5 py-1 rounded-md">Full-time</span>
                        <span class="bg-teal-50 text-teal-700 text-xs font-semibold px-2.5 py-1 rounded-md">Remote ID</span>
                    </div>
                    <div class="mb-5">
                        <p class="font-bold text-teal-700 text-lg">Rp 22.000.000 - Rp 35.000.000 <span class="text-gray-400 text-sm font-normal">/ bln</span></p>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 flex items-center gap-1 font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            5 jam yang lalu
                        </span>
                        <button class="bg-orange-600 hover:bg-orange-700 text-white px-5 py-2 rounded-lg text-sm font-semibold transition-colors shadow-sm shadow-orange-600/20">Lamar Cepat</button>
                    </div>
                </div>

                <!-- Job Card 3 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-5">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-red-50 text-red-700 rounded-xl flex items-center justify-center font-bold text-xl border border-red-100">GF</div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 hover:text-teal-700 cursor-pointer transition-colors">Growth Marketing Lead</h3>
                                <p class="text-sm text-gray-500 flex items-center gap-1 mt-0.5">GoFintech Asia <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></p>
                            </div>
                        </div>
                        <button class="text-gray-300 hover:text-orange-500 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                        </button>
                    </div>
                    <div class="flex gap-2 mb-4 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs font-semibold px-2.5 py-1 rounded-md">Jakarta Pusat</span>
                        <span class="bg-blue-50 text-blue-700 text-xs font-semibold px-2.5 py-1 rounded-md">Full-time</span>
                        <span class="bg-red-50 text-red-700 text-xs font-semibold px-2.5 py-1 rounded-md flex items-center gap-1"><svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg> Urgent Hiring</span>
                    </div>
                    <div class="mb-5">
                        <p class="font-bold text-teal-700 text-lg">Rp 16.000.000 - Rp 24.000.000 <span class="text-gray-400 text-sm font-normal">/ bln</span></p>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 flex items-center gap-1 font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Hari ini
                        </span>
                        <button class="bg-orange-600 hover:bg-orange-700 text-white px-5 py-2 rounded-lg text-sm font-semibold transition-colors shadow-sm shadow-orange-600/20">Lamar Cepat</button>
                    </div>
                </div>

                <!-- Job Card 4 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-5">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-purple-50 text-purple-700 rounded-xl flex items-center justify-center font-bold text-xl border border-purple-100">MV</div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 hover:text-teal-700 cursor-pointer transition-colors">DevOps & Cloud Specialist</h3>
                                <p class="text-sm text-gray-500 flex items-center gap-1 mt-0.5">Bank Mandiri Ventura <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></p>
                            </div>
                        </div>
                        <button class="text-gray-300 hover:text-orange-500 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                        </button>
                    </div>
                    <div class="flex gap-2 mb-4 flex-wrap">
                        <span class="bg-gray-100 text-gray-600 text-xs font-semibold px-2.5 py-1 rounded-md">Surabaya</span>
                        <span class="bg-blue-50 text-blue-700 text-xs font-semibold px-2.5 py-1 rounded-md">Full-time</span>
                        <span class="bg-green-50 text-green-700 text-xs font-semibold px-2.5 py-1 rounded-md">WFO</span>
                    </div>
                    <div class="mb-5">
                        <p class="font-bold text-teal-700 text-lg">Rp 19.000.000 - Rp 30.000.000 <span class="text-gray-400 text-sm font-normal">/ bln</span></p>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                        <span class="text-xs text-gray-400 flex items-center gap-1 font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            1 hari lalu
                        </span>
                        <button class="bg-orange-600 hover:bg-orange-700 text-white px-5 py-2 rounded-lg text-sm font-semibold transition-colors shadow-sm shadow-orange-600/20">Lamar Cepat</button>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <button class="bg-teal-700 hover:bg-teal-800 text-white px-8 py-3.5 rounded-full font-semibold transition-colors flex items-center gap-2 shadow-lg shadow-teal-700/30">
                    Jelajahi 25.000+ Lowongan Lainnya
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 mb-8">
        <div class="bg-teal-800 rounded-3xl p-8 md:p-12 relative overflow-hidden shadow-2xl">
            <!-- Background Decoration -->
            <div class="absolute top-0 right-0 -mr-20 -mt-20 opacity-10 pointer-events-none">
                <svg width="400" height="400" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="200" cy="200" r="200" fill="white"/>
                </svg>
            </div>
            
            <div class="relative z-10 flex flex-col lg:flex-row justify-between items-center gap-10">
                <div class="lg:w-2/3 text-white">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-teal-900/60 text-teal-100 text-[10px] font-bold tracking-wider uppercase mb-6 border border-teal-700/50">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        UNTUK RECRUITER & HR TEAM
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-5 leading-tight">Perusahaan Ingin Rekrut Talenta Terbaik?<br>Pasang Lowongan Hanya dalam 3 Menit.</h2>
                    <p class="text-teal-100/90 text-lg mb-8 max-w-2xl leading-relaxed">Dapatkan akses langsung ke ribuan kandidat terverifikasi dengan fitur pencocokan AI pintar dan sistem tracking aplikasi (ATS) terintegrasi tanpa biaya tersembunyi.</p>
                    
                    <div class="flex flex-wrap gap-x-6 gap-y-3 text-sm font-medium text-teal-50">
                        <div class="flex items-center gap-2">
                            <div class="w-5 h-5 rounded-full bg-green-500/20 flex items-center justify-center">
                                <svg class="w-3.5 h-3.5 text-green-400" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            Gratis 1 Lowongan Pertama
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-5 h-5 rounded-full bg-green-500/20 flex items-center justify-center">
                                <svg class="w-3.5 h-3.5 text-green-400" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            Dashboard ATS Lengkap
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-5 h-5 rounded-full bg-green-500/20 flex items-center justify-center">
                                <svg class="w-3.5 h-3.5 text-green-400" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            Notifikasi WhatsApp Real-time
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/3 w-full flex flex-col gap-4">
                    <button class="w-full bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-xl font-bold transition-colors flex items-center justify-center gap-2 text-lg shadow-lg shadow-orange-900/50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        Pasang Lowongan Sekarang
                    </button>
                    <button class="w-full bg-teal-800 hover:bg-teal-700 border border-teal-600 text-white px-8 py-4 rounded-xl font-bold transition-colors shadow-sm">
                        Konsultasi Rekrutmen
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-100 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12">
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 bg-teal-600 rounded flex items-center justify-center text-white font-bold text-xl">LM</div>
                        <span class="font-bold text-xl text-teal-800">Lamar<span class="text-orange-500">Mudah</span></span>
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 max-w-sm">
                        Platform pencarian kerja terdepan di Indonesia. Menghubungkan talenta profesional berbakat dengan ribuan peluang karir impian secara mudah, cepat, dan transparan.
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="w-9 h-9 bg-gray-50 rounded-full flex items-center justify-center text-gray-500 hover:bg-teal-50 hover:text-teal-600 transition-colors border border-gray-100">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-gray-50 rounded-full flex items-center justify-center text-gray-500 hover:bg-teal-50 hover:text-teal-600 transition-colors border border-gray-100">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-gray-50 rounded-full flex items-center justify-center text-gray-500 hover:bg-teal-50 hover:text-teal-600 transition-colors border border-gray-100">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900 mb-5">Navigasi Cepat</h4>
                    <ul class="space-y-3.5">
                        <li><a href="#" class="text-sm text-gray-500 hover:text-teal-600 transition-colors">Kategori Pekerjaan</a></li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-teal-600 transition-colors">Lokasi Populer</a></li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-teal-600 transition-colors">Direktori Perusahaan</a></li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-teal-600 transition-colors">Tips Karir & Resume</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900 mb-5">Dukungan & Legal</h4>
                    <ul class="space-y-3.5">
                        <li><a href="#" class="text-sm text-gray-500 hover:text-teal-600 transition-colors">Bantuan & FAQ</a></li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-teal-600 transition-colors">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-teal-600 transition-colors">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-sm text-gray-500 hover:text-teal-600 transition-colors">Hubungi Kami</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900 mb-5">Unduh Aplikasi</h4>
                    <p class="text-xs text-gray-500 mb-4">Akses lowongan lebih praktis lewat genggaman Anda.</p>
                    <div class="space-y-3">
                        <a href="#" class="flex items-center gap-3 bg-gray-900 text-white px-4 py-2 rounded-xl hover:bg-gray-800 transition-colors w-fit">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M2.569 2.054c-.339.356-.569.905-.569 1.621v16.651c0 .716.23 1.265.569 1.621l.056.055 9.429-9.429v-.194l-9.429-9.429-.056.055zm10.59 10.59l3.298 3.298-1.579.914c-1.802 1.042-3.176 1.042-4.978 0l-1.579-.914 4.838-4.838zm-4.838-5.187l1.579-.914c1.802-1.042 3.176-1.042 4.978 0l1.579.914-3.298 3.298-4.838-4.838zM17.842 10.528l1.78-1.03c.594-.343.594-.905 0-1.249l-1.78-1.03-3.411 3.411 3.411 3.411z"/></svg>
                            <div class="text-left">
                                <div class="text-[10px] leading-tight text-gray-300">GET IT ON</div>
                                <div class="font-semibold text-sm leading-tight">Google Play</div>
                            </div>
                        </a>
                        <a href="#" class="flex items-center gap-3 bg-gray-900 text-white px-4 py-2 rounded-xl hover:bg-gray-800 transition-colors w-fit">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M16.365 21.442c-1.282.887-2.618.859-3.964.032-1.341-.828-2.585-.828-3.924.032-1.554 1.002-2.915.932-3.987-.197-3.961-4.17-5.068-10.428-1.79-13.882 1.545-1.628 3.297-2.072 5.086-1.129 1.107.585 2.155.585 3.242 0 1.932-1.039 3.73-.559 5.034 1.139-2.661 1.564-3.13 5.378-.962 7.234 1.01.864 2.223 1.144 3.398 1.026-1.066 3.037-2.738 5.753-2.133 5.745zm-4.717-18.066c-.198-2.127 1.637-4.226 3.992-4.376.326 2.457-1.764 4.417-3.992 4.376z"/></svg>
                            <div class="text-left">
                                <div class="text-[10px] leading-tight text-gray-300">Download on the</div>
                                <div class="font-semibold text-sm leading-tight">App Store</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-100 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-xs text-gray-400">&copy; 2026 LamarMudah. Hak Cipta Dilindungi Undang-Undang.</p>
                <p class="text-xs text-gray-400">Dibuat dengan dedikasi untuk pencari karir Indonesia.</p>
            </div>
        </div>
    </footer>
</body>
</html>
