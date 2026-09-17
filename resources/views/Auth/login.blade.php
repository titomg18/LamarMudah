@extends('layouts.auth')

@section('title', 'Masuk ke Akun - LamarMudah')

@section('content')
<div class="space-y-6">
    <!-- Brand Logo Icon top of left column -->
    <div class="flex items-center gap-2">
        <div class="w-8 h-8 bg-teal-700 rounded-lg flex items-center justify-center text-white font-extrabold text-sm">
            LM
        </div>
        <span class="font-extrabold text-lg text-teal-900 tracking-tight">
            Lamar<span class="text-[#c84b14]">Mudah</span>
        </span>
    </div>

    <!-- Tab Switcher (Masuk / Daftar Akun Baru) -->
    <div class="bg-slate-100/90 p-1.5 rounded-2xl flex items-center justify-between text-xs font-bold border border-slate-200/60 shadow-inner">
        <a href="{{ route('login') }}" class="w-1/2 bg-white text-slate-900 py-2.5 px-4 rounded-xl shadow-sm text-center border border-slate-200/50 transition-all font-bold">
            Masuk
        </a>
        <a href="{{ route('register') }}" class="w-1/2 text-slate-500 hover:text-slate-900 py-2.5 px-4 text-center transition-all font-semibold">
            Daftar Akun Baru
        </a>
    </div>

    <!-- Role Selection (PILIH TIPE PENGGUNA) -->
    <div>
        <label class="text-[10px] font-extrabold text-slate-400 tracking-wider uppercase mb-2 block">
            PILIH TIPE PENGGUNA
        </label>
        <div class="grid grid-cols-2 gap-3" id="roleSelector">
            <!-- Pencari Kerja Card (Active by default) -->
            <div onclick="selectRole('jobseeker')" id="role-jobseeker" class="role-card bg-sky-50/90 border-2 border-teal-600 text-teal-900 p-3 rounded-2xl flex items-center gap-3 cursor-pointer shadow-sm transition-all">
                <div class="w-8 h-8 bg-teal-600 text-white rounded-full flex items-center justify-center shrink-0 shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div>
                    <span class="font-bold text-xs text-slate-900 block leading-tight">Pencari Kerja</span>
                    <span class="text-[10px] text-slate-500 font-medium block">Cari & Lamar Cepat</span>
                </div>
            </div>

            <!-- Perusahaan Card -->
            <div onclick="selectRole('company')" id="role-company" class="role-card bg-white border-2 border-slate-200 text-slate-600 p-3 rounded-2xl flex items-center gap-3 cursor-pointer hover:border-slate-300 transition-all">
                <div class="w-8 h-8 bg-slate-100 text-slate-500 rounded-full flex items-center justify-center shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div>
                    <span class="font-bold text-xs text-slate-900 block leading-tight">Perusahaan</span>
                    <span class="text-[10px] text-slate-500 font-medium block">Pasang Lowongan</span>
                </div>
            </div>
        </div>
        <input type="hidden" name="user_type" id="user_type" value="jobseeker">
    </div>

    <!-- Login Form -->
    <form action="{{ route('login') }}" method="POST" class="space-y-4">
        @csrf
        
        <!-- Email Field -->
        <div>
            <label for="email" class="text-xs font-bold text-slate-700 mb-1.5 block">Alamat Email</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <input type="email" name="email" id="email" required placeholder="nama@perusahaan.com"
                       class="w-full pl-10 pr-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-teal-600 text-sm text-slate-900 placeholder-slate-400 font-medium transition-all shadow-sm bg-slate-50/50 focus:bg-white">
            </div>
        </div>

        <!-- Password Field -->
        <div>
            <div class="flex justify-between items-center mb-1.5">
                <label for="password" class="text-xs font-bold text-slate-700 block">Kata Sandi</label>
                <a href="#" class="text-xs font-bold text-[#c84b14] hover:underline">Lupa Kata Sandi?</a>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <input type="password" name="password" id="password" required placeholder="Minimal 8 karakter"
                       class="w-full pl-10 pr-10 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:border-teal-600 text-sm text-slate-900 placeholder-slate-400 font-medium transition-all shadow-sm bg-slate-50/50 focus:bg-white">
                <button type="button" onclick="togglePassword('password')" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Remember Me Checkbox -->
        <div class="flex items-center gap-2.5 pt-1">
            <input type="checkbox" id="remember" name="remember" class="w-4 h-4 rounded text-teal-700 focus:ring-teal-600 border-slate-300 cursor-pointer" checked>
            <label for="remember" class="text-xs text-slate-600 font-medium cursor-pointer">
                Ingat saya di perangkat ini selama 30 hari
            </label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-[#c84b14] hover:bg-[#a63d0f] text-white font-bold py-3.5 px-6 rounded-xl shadow-lg shadow-orange-950/15 transition-all duration-200 flex items-center justify-center gap-2 group text-sm cursor-pointer mt-2">
            <span>Masuk ke Akun</span>
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </button>
    </form>

    <!-- Social Login Separator -->
    <div class="relative flex items-center justify-center my-4">
        <div class="border-t border-slate-200 w-full"></div>
        <span class="bg-white px-3 text-[10px] font-extrabold text-slate-400 tracking-wider uppercase shrink-0">
            ATAU MASUK DENGAN
        </span>
        <div class="border-t border-slate-200 w-full"></div>
    </div>

    <!-- Social Buttons -->
    <div class="grid grid-cols-2 gap-3">
        <a href="#" class="flex items-center justify-center gap-2.5 bg-slate-50 hover:bg-slate-100 border border-slate-200/90 text-slate-700 font-bold py-2.5 px-4 rounded-xl text-xs transition-colors shadow-sm">
            <svg class="w-4 h-4" viewBox="0 0 24 24">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
            </svg>
            <span>Google</span>
        </a>

        <a href="#" class="flex items-center justify-center gap-2.5 bg-sky-50/70 hover:bg-sky-100/80 border border-sky-100 text-sky-800 font-bold py-2.5 px-4 rounded-xl text-xs transition-colors shadow-sm">
            <svg class="w-4 h-4 fill-current text-[#0A66C2]" viewBox="0 0 24 24">
                <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
            </svg>
            <span>LinkedIn</span>
        </a>
    </div>

    <!-- Terms Disclaimer -->
    <p class="text-center text-[11px] text-slate-500 leading-relaxed pt-2">
        Dengan mendaftar, Anda menyetujui <a href="#" class="font-bold text-slate-800 hover:underline">Syarat & Ketentuan</a> serta <a href="#" class="font-bold text-slate-800 hover:underline">Kebijakan Privasi</a> LamarMudah.
    </p>
</div>

<script>
    function selectRole(role) {
        document.getElementById('user_type').value = role;
        
        const jobseekerCard = document.getElementById('role-jobseeker');
        const companyCard = document.getElementById('role-company');
        
        if (role === 'jobseeker') {
            jobseekerCard.className = "role-card bg-sky-50/90 border-2 border-teal-600 text-teal-900 p-3 rounded-2xl flex items-center gap-3 cursor-pointer shadow-sm transition-all";
            companyCard.className = "role-card bg-white border-2 border-slate-200 text-slate-600 p-3 rounded-2xl flex items-center gap-3 cursor-pointer hover:border-slate-300 transition-all";
        } else {
            companyCard.className = "role-card bg-sky-50/90 border-2 border-teal-600 text-teal-900 p-3 rounded-2xl flex items-center gap-3 cursor-pointer shadow-sm transition-all";
            jobseekerCard.className = "role-card bg-white border-2 border-slate-200 text-slate-600 p-3 rounded-2xl flex items-center gap-3 cursor-pointer hover:border-slate-300 transition-all";
        }
    }
</script>
@endsection
