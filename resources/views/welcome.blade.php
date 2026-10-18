@extends('layouts.app')

@section('content')

<!-- ================= HEADER / NAVBAR ================= -->
<header class="sticky top-0 z-50 bg-white/85 backdrop-blur-xl border-b border-zinc-100">
    <div class="max-w-[1200px] mx-auto px-5 md:px-8 h-[68px] flex items-center justify-between gap-4">
        <!-- Logo -->

        <button class="flex items-center gap-3 shrink-0" @click="activePage = 'beranda'" aria-label="Ke Beranda" fdprocessedid="ilk83m">
            <div class="w-9 h-9 rounded-xl bg-[#4F46E5] flex items-center justify-center text-white shadow-lg shadow-indigo-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap w-5 h-5">
                    <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                </svg>
            </div>
            <div class="text-left leading-none">
                <p class="display font-extrabold text-[15px] tracking-tight">PKBM MANDIRI</p>
                <p class="text-[10px] font-bold tracking-[0.18em] text-[#4F46E5]">BANJARAN</p>
            </div>
        </button>

        <!-- Navigation Menu -->
        <nav class="hidden lg:flex items-center gap-7 text-[14px] font-medium text-zinc-600 space-x-2">
            <a href="#beranda" @click.prevent="activePage = 'beranda'" :class="activePage === 'beranda' ? 'text-gray-900 font-bold' : 'hover:text-gray-900'">Beranda</a>
            <a href="#program" @click.prevent="activePage = 'beranda'; setTimeout(() => document.getElementById('program').scrollIntoView({behavior: 'smooth'}), 100)" class="hover:text-gray-900">Program</a>
            <a href="#alur" @click.prevent="activePage = 'beranda'; setTimeout(() => document.getElementById('alur').scrollIntoView({behavior: 'smooth'}), 100)" class="hover:text-gray-900">Alur Daftar</a>
            <a href="#testimoni" @click.prevent="activePage = 'beranda'; setTimeout(() => document.getElementById('testimoni').scrollIntoView({behavior: 'smooth'}), 100)" class="hover:text-gray-900">Testimoni</a>
            <a href="#kontak" @click.prevent="activePage = 'beranda'; setTimeout(() => document.getElementById('kontak').scrollIntoView({behavior: 'smooth'}), 100)" class="hover:text-gray-900">Kontak</a>
            <!-- Menu Cek Status Berpindah Halaman SPA -->
            <button @click="activePage = 'cek-status'" :class="activePage === 'cek-status' ? 'text-indigo-600 font-bold' : 'hover:text-indigo-600'" class="transition">Cek Status</button>
        </nav>

        <!-- Action Buttons -->
        <div class="hidden lg:flex items-center gap-3">
            <button @click="activePage = 'masuk-sekarang'" class="h-9 px-4 rounded-full border border-zinc-200 text-[13px] font-semibold hover:bg-zinc-50 transition">Masuk</button>
            <button @click="activePage = 'daftar-sekarang'" class="h-9 px-5 rounded-full bg-[#4F46E5] text-white text-[13px] font-semibold shadow-[0_8px_20px_-8px_#4F46E5] hover:bg-[#4338CA] transition flex items-center gap-1.5">
                Daftar Sekarang 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
            </button>
        </div>
    </div>
</header>


<!-- ================= PAGE 1: BERANDA & LANDING CONTENT ================= -->
<main x-show="activePage === 'beranda'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">

    <!-- HERO SECTION -->
    <section class="max-w-[1200px] mx-auto px-5 md:px-8 pt-10 md:pt-16 pb-10 grid grid-cols-1 lg:grid-cols-[1.15fr_0.85fr] gap-10 items-center">
        <!-- Kolom Kiri: Teks & Aksi -->
        <div>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-50 border border-indigo-100 text-[11px] font-bold tracking-wide text-[#4F46E5]">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> 
                TERAKREDITASI B — DAPODIK 2026
            </div>
            
            <h1 class="display mt-5 text-[32px] sm:text-[42px] md:text-[56px] leading-[1.1] md:leading-[0.95] font-extrabold tracking-[-0.03em]">
                Pendidikan <span class="text-[#4F46E5]">Kesetaraan</span> untuk Semua, <br class="hidden md:block"> Kapanpun Dimanapun
            </h1>
            
            <p class="mt-5 text-[15px] md:text-[17px] leading-7 text-zinc-500 max-w-[520px]">
                Paket A / B / C diakui negara, terdata <b class="text-zinc-900">Dapodik Kemendikbud</b>. Ijazah resmi bisa untuk kerja, kuliah, &amp; daftar CPNS. Belajar fleksibel sambil kerja di Banjaran.
            </p>
            
            <div class="mt-7 flex flex-wrap gap-3">
                <button @click="activePage = 'daftar-sekarang'" class="h-[48px] px-7 rounded-full bg-[#4F46E5] text-white font-semibold shadow-[0_12px_30px_-10px_#4F46E5] hover:bg-[#4338CA] flex items-center gap-2 transition">
                    Daftar Gratis 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                </button>
                
                <button class="h-[48px] px-7 rounded-full bg-white border border-zinc-200 font-semibold hover:bg-zinc-50 transition flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg> 
                    Lihat Program
                </button>
            </div>
            
            <div class="mt-6 flex flex-wrap items-center gap-4 text-[12px] text-zinc-500">
                <span class="flex items-center gap-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-emerald-500"><path d="M20 6 9 17l-5-5"></path></svg> 
                    Tanpa biaya daftar
                </span>
                <span class="flex items-center gap-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-emerald-500"><path d="M20 6 9 17l-5-5"></path></svg> 
                    Verifikasi 24 jam
                </span>
            </div>
        </div>

        <!-- Kolom Kanan: Ilustrasi & Floating Cards -->
        <div class="relative w-full max-w-[520px] mx-auto lg:mx-0 pt-6 lg:pt-0">
            <div class="relative aspect-[4/3.6] rounded-[32px] bg-gradient-to-br from-indigo-50 via-white to-violet-50 border border-indigo-100 overflow-hidden shadow-[0_30px_80px_-20px_rgba(79,70,229,0.25)] p-4 sm:p-6">
                <!-- Background Glow Elements -->
                <div class="absolute -top-20 -right-20 w-[320px] h-[320px] rounded-full bg-gradient-to-br from-indigo-200 to-violet-200 blur-[40px] opacity-70"></div>
                <div class="absolute -bottom-20 -left-20 w-[300px] h-[300px] rounded-full bg-gradient-to-br from-amber-100 to-orange-100 blur-[35px] opacity-70"></div>
                
                <!-- Main Inner Card -->
                <div class="absolute inset-0 grid place-items-center p-4">
                    <div class="w-[85%] sm:w-[68%] aspect-[3/4] rounded-[24px] bg-white border border-zinc-100 shadow-[0_20px_60px_-20px_rgba(0,0,0,0.2)] p-4 sm:p-5 flex flex-col">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-zinc-900 text-white grid place-items-center font-bold shrink-0">S</div>
                            <div class="min-w-0">
                                <p class="text-[13px] font-bold leading-none truncate">Siti Aminah</p>
                                <p class="text-[11px] text-zinc-500 truncate">Paket C • Kelas 12</p>
                            </div>
                            <div class="ml-auto w-7 h-7 rounded-full bg-emerald-50 grid place-items-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-emerald-600"><path d="M20 6 9 17l-5-5"></path></svg>
                            </div>
                        </div>
                        
                        <div class="mt-4 sm:mt-5 space-y-3">
                            <div class="h-3 rounded-full bg-zinc-100"></div>
                            <div class="h-3 rounded-full bg-zinc-100 w-[80%]"></div>
                            
                            <div class="mt-4 grid grid-cols-3 gap-2">
                                <div class="rounded-xl bg-zinc-50 border border-zinc-100 p-2">
                                    <div class="h-1.5 rounded-full bg-zinc-200 overflow-hidden"><div class="h-full bg-[#4F46E5]" style="width: 60%;"></div></div>
                                    <p class="mt-2 text-[9px] sm:text-[10px] font-semibold">Mapel 1</p>
                                </div>
                                <div class="rounded-xl bg-zinc-50 border border-zinc-100 p-2">
                                    <div class="h-1.5 rounded-full bg-zinc-200 overflow-hidden"><div class="h-full bg-[#4F46E5]" style="width: 40%;"></div></div>
                                    <p class="mt-2 text-[9px] sm:text-[10px] font-semibold">Mapel 2</p>
                                </div>
                                <div class="rounded-xl bg-zinc-50 border border-zinc-100 p-2">
                                    <div class="h-1.5 rounded-full bg-zinc-200 overflow-hidden"><div class="h-full bg-[#4F46E5]" style="width: 80%;"></div></div>
                                    <p class="mt-2 text-[9px] sm:text-[10px] font-semibold">Mapel 3</p>
                                </div>
                            </div>
                            
                            <div class="mt-4 rounded-xl bg-[#4F46E5] text-white p-3 flex items-center justify-between">
                                <p class="text-[10px] sm:text-[11px] font-semibold">Kelas Hari Ini 10:00</p>
                                <span class="text-[9px] sm:text-[10px] bg-white/20 px-2 py-0.5 rounded-full">Live</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Badge 1 -->
                <div class="warga-belajar absolute top-[15%] left-[2%] sm:left-[3%] bg-white/90 backdrop-blur rounded-2xl shadow-[0_12px_30px_-12px_rgba(0,0,0,0.2)] border border-zinc-100 px-2.5 py-2 flex items-center gap-2 max-w-[150px] sm:max-w-[170px]">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-xl bg-indigo-50 grid place-items-center text-[13px] sm:text-[15px] shrink-0">👩‍🎓</div>
                    <div class="min-w-0">
                        <p class="text-[12px] sm:text-[14px] font-extrabold leading-none">187</p>
                        <p class="text-[9px] sm:text-[10px] text-zinc-500 truncate">Warga Belajar Aktif</p>
                    </div>
                </div>
                
                <!-- Floating Badge 2 -->
                <div class="tutor-ahli absolute top-[44%] right-[2%] sm:right-[3%] bg-white/90 backdrop-blur rounded-2xl shadow-[0_12px_30px_-12px_rgba(0,0,0,0.2)] border border-zinc-100 px-2.5 py-2 flex items-center gap-2 max-w-[150px] sm:max-w-[170px]">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-xl bg-amber-50 grid place-items-center text-[13px] sm:text-[15px] shrink-0">👨‍🏫</div>
                    <div class="min-w-0">
                        <p class="text-[12px] sm:text-[14px] font-extrabold leading-none">8</p>
                        <p class="text-[9px] sm:text-[10px] text-zinc-500 truncate">Tutor Berpengalaman</p>
                    </div>
                </div>
                
                <!-- Floating Badge 3 -->
                <div class="kelulusana absolute bottom-[14%] left-[4%] sm:left-[8%] bg-white/90 backdrop-blur rounded-2xl shadow-[0_12px_30px_-12px_rgba(0,0,0,0.2)] border border-zinc-100 px-2.5 py-2 flex items-center gap-2 max-w-[140px] sm:max-w-[150px]">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 rounded-xl bg-emerald-50 grid place-items-center text-[13px] sm:text-[15px] shrink-0">🎯</div>
                    <div class="min-w-0">
                        <p class="text-[12px] sm:text-[14px] font-extrabold leading-none">92%</p>
                        <p class="text-[9px] sm:text-[10px] text-zinc-500 truncate">Kelulusan 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS SECTION -->
    <section class="border-y border-zinc-100 bg-white">
        <div class="max-w-[1200px] mx-auto px-5 md:px-8 py-5 grid grid-cols-3 divide-x divide-zinc-100">
            <div class="px-2 sm:px-4 md:px-10 py-1">
                <p class="display font-extrabold text-[16px] sm:text-[18px] md:text-[22px] tracking-tight">10 Tahun</p>
                <p class="text-[11px] sm:text-[12px] md:text-[13px] text-zinc-500 truncate">Mengabdi di Banjaran</p>
            </div>
            <div class="px-2 sm:px-4 md:px-10 py-1">
                <p class="display font-extrabold text-[16px] sm:text-[18px] md:text-[22px] tracking-tight">650+ Alumni</p>
                <p class="text-[11px] sm:text-[12px] md:text-[13px] text-zinc-500 truncate">Telah Lulus &amp; Bekerja</p>
            </div>
            <div class="px-2 sm:px-4 md:px-10 py-1">
                <p class="display font-extrabold text-[16px] sm:text-[18px] md:text-[22px] tracking-tight">100% Resmi</p>
                <p class="text-[11px] sm:text-[12px] md:text-[13px] text-zinc-500 truncate">Terdata Dapodik</p>
            </div>
        </div>
    </section>
    
    <!-- SECTION PROGRAM -->
    <section id="program" class="max-w-[1200px] mx-auto px-5 md:px-8 pt-16 md:pt-24">
        <!-- Header Section -->
        <div class="flex flex-wrap items-end justify-between gap-4">
            <div>
                <p class="text-[12px] font-bold tracking-[0.18em] text-[#4F46E5]">PROGRAM UNGGULAN</p>
                <h2 class="display mt-2 text-[28px] sm:text-[32px] md:text-[40px] font-extrabold leading-[1.1] md:leading-[0.95] tracking-tight">
                    Pilih Jalur Pendidikanmu
                </h2>
            </div>
            <p class="max-w-[360px] text-[14px] leading-6 text-zinc-500">
                Semua program terakreditasi B, gratis BOS untuk Paket A/B/C, dan bisa sambil kerja.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">
            
            <!-- Paket A -->
            <div class="group rounded-[24px] bg-white border border-zinc-100 shadow-[0_8px_30px_-18px_rgba(0,0,0,0.15)] p-5 flex flex-col hover:shadow-[0_18px_50px_-20px_rgba(0,0,0,0.2)] hover:-translate-y-1 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-amber-400 to-orange-500 text-white grid place-items-center text-[22px] shadow-lg">📚</div>
                <h3 class="mt-4 font-bold text-[16px] leading-tight">Paket A</h3>
                <p class="text-[12px] text-zinc-500">Setara SD</p>
                <p class="mt-3 text-[12px] leading-5 text-zinc-600">Untuk yang belum tamat SD. Ijazah resmi.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="px-2.5 py-1 rounded-full bg-zinc-50 border border-zinc-100 text-[10px] font-semibold">2-3 Tahun</span>
                    <span class="px-2.5 py-1 rounded-full bg-indigo-50 border border-indigo-100 text-[10px] font-bold text-[#4F46E5]">Gratis BOS</span>
                </div>
                <button class="mt-auto pt-5 text-[13px] font-semibold flex items-center gap-1 text-zinc-900 group-hover:gap-2 transition-all">
                    Detail 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m9 18 6-6-6-6"></path></svg>
                </button>
            </div>

            <!-- Paket B -->
            <div class="group rounded-[24px] bg-white border border-zinc-100 shadow-[0_8px_30px_-18px_rgba(0,0,0,0.15)] p-5 flex flex-col hover:shadow-[0_18px_50px_-20px_rgba(0,0,0,0.2)] hover:-translate-y-1 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-emerald-400 to-teal-500 text-white grid place-items-center text-[22px] shadow-lg">📖</div>
                <h3 class="mt-4 font-bold text-[16px] leading-tight">Paket B</h3>
                <p class="text-[12px] text-zinc-500">Setara SMP</p>
                <p class="mt-3 text-[12px] leading-5 text-zinc-600">Lanjutan Paket A. Persiapan ke SMA.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="px-2.5 py-1 rounded-full bg-zinc-50 border border-zinc-100 text-[10px] font-semibold">2-3 Tahun</span>
                    <span class="px-2.5 py-1 rounded-full bg-indigo-50 border border-indigo-100 text-[10px] font-bold text-[#4F46E5]">Gratis BOS</span>
                </div>
                <button class="mt-auto pt-5 text-[13px] font-semibold flex items-center gap-1 text-zinc-900 group-hover:gap-2 transition-all">
                    Detail 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m9 18 6-6-6-6"></path></svg>
                </button>
            </div>

            <!-- Paket C -->
            <div class="group rounded-[24px] bg-white border border-zinc-100 shadow-[0_8px_30px_-18px_rgba(0,0,0,0.15)] p-5 flex flex-col hover:shadow-[0_18px_50px_-20px_rgba(0,0,0,0.2)] hover:-translate-y-1 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-indigo-500 to-violet-600 text-white grid place-items-center text-[22px] shadow-lg">🎓</div>
                <h3 class="mt-4 font-bold text-[16px] leading-tight">Paket C</h3>
                <p class="text-[12px] text-zinc-500">Setara SMA</p>
                <p class="mt-3 text-[12px] leading-5 text-zinc-600">Paling populer. Bisa kuliah &amp; kerja.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="px-2.5 py-1 rounded-full bg-zinc-50 border border-zinc-100 text-[10px] font-semibold">3 Tahun</span>
                    <span class="px-2.5 py-1 rounded-full bg-indigo-50 border border-indigo-100 text-[10px] font-bold text-[#4F46E5]">Gratis BOS</span>
                </div>
                <button class="mt-auto pt-5 text-[13px] font-semibold flex items-center gap-1 text-zinc-900 group-hover:gap-2 transition-all">
                    Detail 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m9 18 6-6-6-6"></path></svg>
                </button>
            </div>

            <!-- PAUD & Keaksaraan -->
            <div class="group rounded-[24px] bg-white border border-zinc-100 shadow-[0_8px_30px_-18px_rgba(0,0,0,0.15)] p-5 flex flex-col hover:shadow-[0_18px_50px_-20px_rgba(0,0,0,0.2)] hover:-translate-y-1 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-pink-400 to-rose-500 text-white grid place-items-center text-[22px] shadow-lg">🌈</div>
                <h3 class="mt-4 font-bold text-[16px] leading-tight">PAUD &amp; Keaksaraan</h3>
                <p class="text-[12px] text-zinc-500">Usia Dini</p>
                <p class="mt-3 text-[12px] leading-5 text-zinc-600">Buta aksara &amp; pendidikan anak.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="px-2.5 py-1 rounded-full bg-zinc-50 border border-zinc-100 text-[10px] font-semibold">1 Tahun</span>
                    <span class="px-2.5 py-1 rounded-full bg-indigo-50 border border-indigo-100 text-[10px] font-bold text-[#4F46E5]">Gratis</span>
                </div>
                <button class="mt-auto pt-5 text-[13px] font-semibold flex items-center gap-1 text-zinc-900 group-hover:gap-2 transition-all">
                    Detail 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m9 18 6-6-6-6"></path></svg>
                </button>
            </div>

            <!-- Kursus Keterampilan -->
            <div class="group rounded-[24px] bg-white border border-zinc-100 shadow-[0_8px_30px_-18px_rgba(0,0,0,0.15)] p-5 flex flex-col hover:shadow-[0_18px_50px_-20px_rgba(0,0,0,0.2)] hover:-translate-y-1 transition-all">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-slate-700 to-zinc-800 text-white grid place-items-center text-[22px] shadow-lg">🛠️</div>
                <h3 class="mt-4 font-bold text-[16px] leading-tight">Kursus Keterampilan</h3>
                <p class="text-[12px] text-zinc-500">Vokasi</p>
                <p class="mt-3 text-[12px] leading-5 text-zinc-600">Komputer, Otomotif, Tata Boga.</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="px-2.5 py-1 rounded-full bg-zinc-50 border border-zinc-100 text-[10px] font-semibold">3-6 Bulan</span>
                    <span class="px-2.5 py-1 rounded-full bg-indigo-50 border border-indigo-100 text-[10px] font-bold text-[#4F46E5]">Rp 150rb/bln</span>
                </div>
                <button class="mt-auto pt-5 text-[13px] font-semibold flex items-center gap-1 text-zinc-900 group-hover:gap-2 transition-all">
                    Detail 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m9 18 6-6-6-6"></path></svg>
                </button>
            </div>

        </div>
    </section>

    <!-- SECTION KEUNGGULAN -->
    <section class="max-w-[1200px] mx-auto px-5 md:px-8 pt-16 md:pt-24">
        <div class="rounded-[32px] bg-zinc-900 text-white p-7 md:p-12 relative overflow-hidden">
            <div class="absolute -top-32 -right-32 w-[420px] h-[420px] rounded-full bg-[#4F46E5] blur-[80px] opacity-40"></div>
            
            <div class="relative grid lg:grid-cols-[0.9fr_1.1fr] gap-10 items-start">
                <!-- Left Info -->
                <div>
                    <p class="text-[12px] font-bold tracking-[0.18em] text-indigo-300">KENAPA 2026 BEDA</p>
                    <h2 class="display mt-3 text-[28px] sm:text-[32px] md:text-[44px] font-extrabold leading-[1.1] md:leading-[0.9] tracking-tight">
                        Keunggulan Belajar di PKBM Mandiri Banjaran
                    </h2>
                    <p class="mt-4 text-[14px] leading-6 text-zinc-400 max-w-[420px]">
                        Kami gabungkan fleksibilitas PKBM dengan teknologi LMS modern ala Ruangguru. Belajar tetap dekat rumah.
                    </p>
                    <button class="mt-6 h-11 px-6 rounded-full bg-white text-zinc-900 font-semibold hover:bg-zinc-100 transition text-sm">
                        Daftar Sekarang
                    </button>
                </div>

                <!-- Right Grid Features -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="rounded-[20px] bg-white/5 border border-white/10 p-5 hover:bg-white/[0.08] transition">
                        <div class="w-10 h-10 rounded-xl bg-white text-zinc-900 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <h4 class="mt-4 font-bold text-[14px]">Belajar Fleksibel</h4>
                        <p class="mt-1 text-[12px] leading-5 text-zinc-400">Kelas malam &amp; weekend, cocok pekerja.</p>
                    </div>

                    <div class="rounded-[20px] bg-white/5 border border-white/10 p-5 hover:bg-white/[0.08] transition">
                        <div class="w-10 h-10 rounded-xl bg-white text-zinc-900 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg>
                        </div>
                        <h4 class="mt-4 font-bold text-[14px]">Ijazah Resmi Kemendikbud</h4>
                        <p class="mt-1 text-[12px] leading-5 text-zinc-400">Terdata Dapodik, diakui negara 100%.</p>
                    </div>

                    <div class="rounded-[20px] bg-white/5 border border-white/10 p-5 hover:bg-white/[0.08] transition">
                        <div class="w-10 h-10 rounded-xl bg-white text-zinc-900 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                        </div>
                        <h4 class="mt-4 font-bold text-[14px]">Gratis BOS</h4>
                        <p class="mt-1 text-[12px] leading-5 text-zinc-400">Paket A/B/C gratis bantuan pemerintah.</p>
                    </div>

                    <div class="rounded-[20px] bg-white/5 border border-white/10 p-5 hover:bg-white/[0.08] transition">
                        <div class="w-10 h-10 rounded-xl bg-white text-zinc-900 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path><rect x="2" y="6" width="14" height="12" rx="2"></rect></svg>
                        </div>
                        <h4 class="mt-4 font-bold text-[14px]">LMS &amp; Video</h4>
                        <p class="mt-1 text-[12px] leading-5 text-zinc-400">Belajar online via video &amp; modul digital.</p>
                    </div>

                    <div class="rounded-[20px] bg-white/5 border border-white/10 p-5 hover:bg-white/[0.08] transition">
                        <div class="w-10 h-10 rounded-xl bg-white text-zinc-900 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        </div>
                        <h4 class="mt-4 font-bold text-[14px]">Tutor UPI &amp; Berpengalaman</h4>
                        <p class="mt-1 text-[12px] leading-5 text-zinc-400">8 tutor lulusan pendidikan berpengalaman.</p>
                    </div>

                    <div class="rounded-[20px] bg-white/5 border border-white/10 p-5 hover:bg-white/[0.08] transition">
                        <div class="w-10 h-10 rounded-xl bg-white text-zinc-900 grid place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16"></path></svg>
                        </div>
                        <h4 class="mt-4 font-bold text-[14px]">Bisa Sambil Kerja</h4>
                        <p class="mt-1 text-[12px] leading-5 text-zinc-400">Jadwal tidak bentrok dengan kerja utama.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION ALUR DAFTAR -->
    <section id="alur" class="max-w-[1200px] mx-auto px-5 md:px-8 pt-16 md:pt-24">
        <!-- Header Section -->
        <div class="text-center max-w-xl mx-auto">
            <h2 class="display text-[28px] md:text-[36px] font-extrabold tracking-tight">
                Alur Pendaftaran 2026
            </h2>
            <p class="text-[14px] text-zinc-500 mt-2">
                4 langkah cepat, tidak ribet
            </p>
        </div>

        <!-- Steps Container -->
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 relative">
            <!-- Garis Penghubung Desktop (Hidden di Mobile/Tablet Kecil) -->
            <div class="hidden md:block absolute top-[44px] left-[12%] right-[12%] h-[2px] bg-gradient-to-r from-zinc-100 via-indigo-200 to-zinc-100 z-0"></div>

            <!-- Langkah 01 -->
            <div class="relative z-10 rounded-[20px] bg-white border border-zinc-100 shadow-[0_8px_30px_-18px_rgba(0,0,0,0.1)] p-6 text-center hover:-translate-y-1 transition-all">
                <div class="mx-auto w-11 h-11 rounded-full bg-[#4F46E5] text-white grid place-items-center font-extrabold text-[13px] shadow-[0_8px_20px_-8px_#4F46E5]">
                    01
                </div>
                <h4 class="mt-4 font-bold text-[15px]">Daftar Online</h4>
                <p class="mt-1 text-[12px] text-zinc-500">Isi form 3 menit</p>
            </div>

            <!-- Langkah 02 -->
            <div class="relative z-10 rounded-[20px] bg-white border border-zinc-100 shadow-[0_8px_30px_-18px_rgba(0,0,0,0.1)] p-6 text-center hover:-translate-y-1 transition-all">
                <div class="mx-auto w-11 h-11 rounded-full bg-[#4F46E5] text-white grid place-items-center font-extrabold text-[13px] shadow-[0_8px_20px_-8px_#4F46E5]">
                    02
                </div>
                <h4 class="mt-4 font-bold text-[15px]">Verifikasi Berkas</h4>
                <p class="mt-1 text-[12px] text-zinc-500">Tim cek 1x24 jam</p>
            </div>

            <!-- Langkah 03 -->
            <div class="relative z-10 rounded-[20px] bg-white border border-zinc-100 shadow-[0_8px_30px_-18px_rgba(0,0,0,0.1)] p-6 text-center hover:-translate-y-1 transition-all">
                <div class="mx-auto w-11 h-11 rounded-full bg-[#4F46E5] text-white grid place-items-center font-extrabold text-[13px] shadow-[0_8px_20px_-8px_#4F46E5]">
                    03
                </div>
                <h4 class="mt-4 font-bold text-[15px]">Tes Penempatan</h4>
                <p class="mt-1 text-[12px] text-zinc-500">Online, 30 menit</p>
            </div>

            <!-- Langkah 04 -->
            <div class="relative z-10 rounded-[20px] bg-white border border-zinc-100 shadow-[0_8px_30px_-18px_rgba(0,0,0,0.1)] p-6 text-center hover:-translate-y-1 transition-all">
                <div class="mx-auto w-11 h-11 rounded-full bg-[#4F46E5] text-white grid place-items-center font-extrabold text-[13px] shadow-[0_8px_20px_-8px_#4F46E5]">
                    04
                </div>
                <h4 class="mt-4 font-bold text-[15px]">Mulai Belajar</h4>
                <p class="mt-1 text-[12px] text-zinc-500">Dapat akun LMS</p>
            </div>
        </div>
    </section>

    <!-- SECTION TESTIMONI (Menggantikan Galeri) -->
    <section id="testimoni" class="max-w-[1200px] mx-auto px-5 md:px-8 pt-16 md:pt-24">
        <!-- Header Section -->
        <div class="flex items-end justify-between gap-4">
            <h2 class="display text-[28px] md:text-[36px] font-extrabold tracking-tight leading-[1.1] md:leading-[0.95]">
                Alumni kami sudah <br class="hidden sm:block">kuliah &amp; kerja
            </h2>
            <span class="inline-flex items-center gap-2 text-[12px] font-semibold px-3 py-1.5 rounded-full bg-amber-50 border border-amber-100 text-amber-700 shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 fill-amber-400 text-amber-400"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 
                4.9/5 Kepuasan
            </span>
        </div>

        <!-- Cards Testimoni Grid -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-5">
            
            <!-- Testimoni 1 -->
            <div class="rounded-[24px] bg-white border border-zinc-100 p-6 shadow-[0_8px_30px_-20px_rgba(0,0,0,0.2)] flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-full bg-zinc-100 grid place-items-center text-[20px] shrink-0">👩‍🎓</div>
                        <div class="min-w-0">
                            <p class="font-bold text-[14px] truncate">Rina Marlina</p>
                            <p class="text-[11px] text-zinc-500 truncate">Paket C 2023 • Mahasiswi UPI PGSD</p>
                        </div>
                    </div>
                    <p class="mt-4 text-[13px] leading-6 text-zinc-600">
                        "Dulu putus sekolah kelas 2 SMA. Di PKBM Mandiri belajarnya enak, malam setelah kerja. Sekarang sudah semester 4!"
                    </p>
                </div>
                <div class="mt-6 flex gap-1 text-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                </div>
            </div>

            <!-- Testimoni 2 -->
            <div class="rounded-[24px] bg-white border border-zinc-100 p-6 shadow-[0_8px_30px_-20px_rgba(0,0,0,0.2)] flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-full bg-zinc-100 grid place-items-center text-[20px] shrink-0">👨‍💼</div>
                        <div class="min-w-0">
                            <p class="font-bold text-[14px] truncate">Deden Hermawan</p>
                            <p class="text-[11px] text-zinc-500 truncate">Paket C 2022 • Staff Admin Desa Banjaran</p>
                        </div>
                    </div>
                    <p class="mt-4 text-[13px] leading-6 text-zinc-600">
                        "Ijazah Paket C diterima untuk perangkat desa. Tutornya sabar banget, materi mudah dipahami."
                    </p>
                </div>
                <div class="mt-6 flex gap-1 text-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                </div>
            </div>

            <!-- Testimoni 3 -->
            <div class="rounded-[24px] bg-white border border-zinc-100 p-6 shadow-[0_8px_30px_-20px_rgba(0,0,0,0.2)] flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3">
                        <div class="w-11 h-11 rounded-full bg-zinc-100 grid place-items-center text-[20px] shrink-0">👩‍🍳</div>
                        <div class="min-w-0">
                            <p class="font-bold text-[14px] truncate">Santi Agustina</p>
                            <p class="text-[11px] text-zinc-500 truncate">Paket B &amp; C 2021-2024 • Wirausaha</p>
                        </div>
                    </div>
                    <p class="mt-4 text-[13px] leading-6 text-zinc-600">
                        "Ambil kursus tata boga + Paket C. Sekarang punya usaha kue. PKBM beneran sumber solusi optimal!"
                    </p>
                </div>
                <div class="mt-6 flex gap-1 text-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                </div>
            </div>
        </div>

        <!-- Sub-Galeri Chips Grid -->
        <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-3">
            <div class="aspect-[4/3] rounded-2xl bg-gradient-to-br from-zinc-50 to-zinc-100 border border-zinc-100 grid place-items-center text-[12px] font-semibold text-zinc-600 text-center p-3 hover:bg-zinc-100 transition">Kegiatan Belajar 📚</div>
            <div class="aspect-[4/3] rounded-2xl bg-gradient-to-br from-zinc-50 to-zinc-100 border border-zinc-100 grid place-items-center text-[12px] font-semibold text-zinc-600 text-center p-3 hover:bg-zinc-100 transition">Ujian Kesetaraan 📝</div>
            <div class="aspect-[4/3] rounded-2xl bg-gradient-to-br from-zinc-50 to-zinc-100 border border-zinc-100 grid place-items-center text-[12px] font-semibold text-zinc-600 text-center p-3 hover:bg-zinc-100 transition">Praktik Komputer 💻</div>
            <div class="aspect-[4/3] rounded-2xl bg-gradient-to-br from-zinc-50 to-zinc-100 border border-zinc-100 grid place-items-center text-[12px] font-semibold text-zinc-600 text-center p-3 hover:bg-zinc-100 transition">Praktik Otomotif 🔧</div>
            <div class="aspect-[4/3] rounded-2xl bg-gradient-to-br from-zinc-50 to-zinc-100 border border-zinc-100 grid place-items-center text-[12px] font-semibold text-zinc-600 text-center p-3 hover:bg-zinc-100 transition">Wisuda 2025 🎓</div>
            <div class="aspect-[4/3] rounded-2xl bg-gradient-to-br from-zinc-50 to-zinc-100 border border-zinc-100 grid place-items-center text-[12px] font-semibold text-zinc-600 text-center p-3 hover:bg-zinc-100 transition">Tutor UPI 👨‍🏫</div>
        </div>
    </section>
    
    <!-- SECTION KONTAK -->
    <section id="kontak" class="max-w-[1200px] mx-auto px-5 md:px-8 pt-16 pb-10">
        <div class="rounded-[32px] bg-[#4F46E5] p-8 md:p-12 text-white relative overflow-hidden">
            <!-- Background Glow Effect -->
            <div class="absolute -bottom-20 -right-20 w-[400px] h-[400px] rounded-full bg-white/10 blur-[30px] pointer-events-none"></div>
            
            <div class="relative grid grid-cols-1 lg:grid-cols-[1.2fr_0.8fr] gap-8 items-center">
                <!-- Left Info & CTA -->
                <div>
                    <h2 class="display text-[28px] sm:text-[34px] md:text-[44px] font-extrabold leading-[1.1] md:leading-[0.9] tracking-tight">
                        Siap lanjut sekolah lagi? Daftar hari ini, gratis.
                    </h2>
                    <p class="mt-4 text-[14px] leading-6 text-indigo-100 max-w-[520px]">
                        Kuota 2026: 120 warga belajar. Sudah 187 pendaftar aktif. Amankan kursimu sekarang, verifikasi 24 jam.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <button @click="activePage = 'daftar-sekarang'" class="h-12 px-7 rounded-full bg-white text-[#4F46E5] font-bold hover:bg-zinc-100 transition text-sm shadow-md">
                            Daftar Sekarang &mdash; Gratis
                        </button>
                        <button class="h-12 px-6 rounded-full bg-white/10 border border-white/20 font-semibold hover:bg-white/15 transition text-sm">
                            Cek Status
                        </button>
                    </div>
                </div>

                <!-- Right Detail Alamat & Kontak -->
                <div class="rounded-[20px] bg-white/10 border border-white/15 p-5 backdrop-blur">
                    <p class="text-[12px] font-bold tracking-wide text-indigo-200 uppercase">ALAMAT PUSAT BELAJAR</p>
                    <p class="mt-2 font-semibold text-sm leading-6">
                        Jl. Raya Banjaran No. 187, Desa Banjaran Wetan, Kec. Banjaran, Kab. Bandung 40377
                    </p>
                    
                    <div class="mt-4 space-y-2.5 text-[13px] text-indigo-100">
                        <p class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 shrink-0"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> 
                            WA: 0821-1870-2026 (Bu Lilis)
                        </p>
                        <p class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 shrink-0"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg> 
                            pkbm.mandiri.banjaran@mail.id
                        </p>
                        <p class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 shrink-0"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg> 
                            Buka: Senin-Sabtu 08.00-20.00
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<!-- ================= PAGE 2: CEK STATUS PENDAFTARAN (SPA PAGE) ================= -->
<main x-show="activePage === 'cek-status'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="min-h-[calc(100vh-68px)] bg-white">
    <div class="max-w-[560px] mx-auto px-5 md:px-8 py-12">
        <button  @click="activePage = 'beranda'" class="text-[13px] text-zinc-500 hover:text-zinc-900 flex items-center gap-1" fdprocessedid="18x3zo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4 rotate-180"><path d="m9 18 6-6-6-6"></path></svg> 
            Beranda
        </button>
        <h1 class="mt-6 display text-[30px] font-extrabold tracking-tight">Cek Status Pendaftaran</h1>
        <p class="mt-2 text-[13px] text-zinc-500">Masukkan No Pendaftaran dan NIK untuk melihat status verifikasi.</p>
        <div class="mt-8 rounded-[24px] border border-zinc-100 p-6 shadow-[0_12px_40px_-20px_rgba(0,0,0,0.15)]">
            <div class="grid gap-4">
                <div><p class="text-[12px] font-semibold mb-2">No Pendaftaran</p><input placeholder="PKBM-2026-0187" class="w-full h-11 rounded-xl border border-zinc-200 bg-white px-4 text-[13px] outline-none focus:border-[#4F46E5] focus:ring-4 focus:ring-indigo-50 transition" type="text" value="" fdprocessedid="x2wphm"></div>
                <div><p class="text-[12px] font-semibold mb-2">NIK</p><input placeholder="3204xxxxxxxxxxxx" class="w-full h-11 rounded-xl border border-zinc-200 bg-white px-4 text-[13px] outline-none focus:border-[#4F46E5] focus:ring-4 focus:ring-indigo-50 transition" type="text" value="" fdprocessedid="u49lp"></div>
                <button class="mt-2 h-11 rounded-full bg-[#4F46E5] text-white font-semibold hover:bg-[#4338CA] transition" fdprocessedid="78kll">Cek Sekarang</button></div><div class="mt-6 text-[11px] text-zinc-400 leading-5">Contoh demo: No <span class="font-mono font-bold text-zinc-700">PKBM-2026-0187</span> • NIK bebas.</div>
            </div>
        </div>
</main>

<main x-show="activePage === 'daftar-sekarang'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="min-h-[calc(100vh-68px)] bg-white">
    <div class="max-w-[760px] mx-auto px-5 md:px-8 py-8 md:py-12"><button @click="activePage = 'beranda'" class="text-[13px] font-medium text-zinc-500 hover:text-zinc-900 flex items-center gap-1" fdprocessedid="d4n5yy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4 rotate-180"><path d="m9 18 6-6-6-6"></path></svg> Kembali ke Beranda</button><div class="mt-6 rounded-[28px] bg-white border border-zinc-100 shadow-[0_20px_60px_-24px_rgba(0,0,0,0.15)] overflow-hidden"><div class="p-7 md:p-9"><div class="flex items-start justify-between gap-4"><div><h1 class="display text-[26px] md:text-[32px] font-extrabold tracking-tight leading-[0.95]">PPDB Online 2026</h1><p class="mt-2 text-[13px] text-zinc-500">Pendaftaran Paket A/B/C, PAUD &amp; Kursus • Gratis biaya daftar</p></div><span class="px-3 py-1 rounded-full bg-emerald-50 border border-emerald-100 text-[11px] font-bold text-emerald-700">Kuota 73% terisi</span></div><div class="mt-8 flex items-center gap-3"><div class="flex items-center gap-3 flex-1"><div class="w-8 h-8 rounded-full grid place-items-center text-[12px] font-bold border transition bg-[#4F46E5] text-white border-[#4F46E5] shadow-[0_6px_16px_-6px_#4F46E5]">1</div><div class="flex-1 h-1 rounded-full bg-zinc-100"></div></div><div class="flex items-center gap-3 flex-1"><div class="w-8 h-8 rounded-full grid place-items-center text-[12px] font-bold border transition bg-white text-zinc-400 border-zinc-200">2</div><div class="flex-1 h-1 rounded-full bg-zinc-100"></div></div><div class="flex items-center gap-3 flex-1"><div class="w-8 h-8 rounded-full grid place-items-center text-[12px] font-bold border transition bg-white text-zinc-400 border-zinc-200">3</div><div class="flex-1 h-1 rounded-full bg-zinc-100"></div></div><div class="w-8 h-8 rounded-full grid place-items-center text-[12px] font-bold border bg-white text-zinc-400 border-zinc-200">✓</div></div><div class="mt-3 grid grid-cols-3 text-[11px] font-semibold text-zinc-500"><span class="text-[#4F46E5]">Data Diri</span><span class="">Program &amp; Berkas</span><span class="">Konfirmasi</span></div><div class="mt-8 grid gap-4"><div class="grid md:grid-cols-2 gap-4"><div><p class="text-[12px] font-semibold mb-2">Nama Lengkap (sesuai KK)</p><input placeholder="Siti Aminah" class="w-full h-11 rounded-xl border border-zinc-200 bg-white px-4 text-[13px] outline-none focus:border-[#4F46E5] focus:ring-4 focus:ring-indigo-50 transition" type="text" value="" fdprocessedid="t9a18k"></div><div><p class="text-[12px] font-semibold mb-2">NIK 16 Digit</p><input placeholder="3204xxxxxxxxxxxx" class="w-full h-11 rounded-xl border border-zinc-200 bg-white px-4 text-[13px] outline-none focus:border-[#4F46E5] focus:ring-4 focus:ring-indigo-50 transition" type="text" value="" fdprocessedid="hhv4q9"></div></div><div class="grid md:grid-cols-2 gap-4"><div><p class="text-[12px] font-semibold mb-2">Tempat Lahir</p><input placeholder="Bandung" class="w-full h-11 rounded-xl border border-zinc-200 bg-white px-4 text-[13px] outline-none focus:border-[#4F46E5] focus:ring-4 focus:ring-indigo-50 transition" type="text" value="" fdprocessedid="3s2yga"></div><div><p class="text-[12px] font-semibold mb-2">Tanggal Lahir</p><input class="w-full h-11 rounded-xl border border-zinc-200 bg-white px-4 text-[13px] outline-none focus:border-[#4F46E5] focus:ring-4 focus:ring-indigo-50 transition" type="date" value=""></div></div><div class="grid md:grid-cols-2 gap-4"><div><p class="text-[12px] font-semibold mb-2">No HP / WA Aktif</p><input placeholder="0821xxxxxxx" class="w-full h-11 rounded-xl border border-zinc-200 bg-white px-4 text-[13px] outline-none focus:border-[#4F46E5] focus:ring-4 focus:ring-indigo-50 transition" type="text" value="" fdprocessedid="w04glh"></div><div><p class="text-[12px] font-semibold mb-2">Alamat di Banjaran</p><input placeholder="Kp. Cikareo RT 02 RW 05" class="w-full h-11 rounded-xl border border-zinc-200 bg-white px-4 text-[13px] outline-none focus:border-[#4F46E5] focus:ring-4 focus:ring-indigo-50 transition" type="text" value="" fdprocessedid="35nnor"></div></div><div class="mt-2 flex justify-end"><button class="h-11 px-6 rounded-full bg-[#4F46E5] text-white font-semibold hover:bg-[#4338CA] transition flex items-center gap-2" fdprocessedid="hepc0l">Lanjut <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button></div></div></div><div class="bg-[#4F46E5] text-white px-7 md:px-9 py-4 flex items-center justify-between text-[12px]"><span class="flex items-center gap-2"><span class="w-5 h-5 rounded-full bg-white/20 grid place-items-center">🔒</span> Data aman &amp; terenkripsi</span><span class="hidden md:inline text-indigo-100">Butuh bantuan? WA 0821-1870-2026</span></div></div></div>
</main>

<!-- HALAMAN SPA: MASUK / PORTAL WARGA BELAJAR -->
<main x-show="activePage === 'masuk-sekarang'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="min-h-[calc(100vh-68px)] bg-white flex items-center justify-center">
    <div class="max-w-[420px] mx-auto w-full px-5 py-10 md:py-16">
        
        <!-- Login Card Box -->
        <div class="rounded-[28px] bg-white border border-zinc-100 shadow-[0_20px_60px_-24px_rgba(0,0,0,0.18)] p-7 md:p-8">
            
            <!-- Icon Header -->
            <div class="w-12 h-12 rounded-2xl bg-[#4F46E5] text-white grid place-items-center shadow-[0_10px_20px_-10px_#4F46E5]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" x2="3" y1="12" y2="12"></line></svg>
            </div>
            
            <!-- Title & Desc -->
            <h1 class="mt-5 display text-[24px] sm:text-[26px] font-extrabold tracking-tight leading-tight">
                Portal Warga Belajar
            </h1>
            <p class="mt-2 text-[13px] text-zinc-500">
                Masuk untuk akses materi, tugas, dan rapor digital.
            </p>
            
            <!-- Form Fields -->
            <div class="mt-7 grid gap-4">
                <div>
                    <p class="text-[12px] font-semibold mb-2 text-zinc-700">NISN / NIK</p>
                    <input placeholder="0051234567 atau 3204xxxx" class="w-full h-11 rounded-xl border border-zinc-200 bg-white px-4 text-[13px] outline-none focus:border-[#4F46E5] focus:ring-4 focus:ring-indigo-50 transition" type="text">
                </div>
                
                <div>
                    <p class="text-[12px] font-semibold mb-2 text-zinc-700">Password</p>
                    <input placeholder="••••••••" class="w-full h-11 rounded-xl border border-zinc-200 bg-white px-4 text-[13px] outline-none focus:border-[#4F46E5] focus:ring-4 focus:ring-indigo-50 transition" type="password">
                </div>
                
                <button @click="activePage ='halaman-user'" class="h-12 rounded-full bg-[#4F46E5] text-white font-semibold shadow-[0_12px_24px_-12px_#4F46E5] hover:bg-[#4338CA] transition text-sm">
                    Masuk
                </button>
                
                <!-- Demo Quick Login Button -->
                <button class="h-11 rounded-full bg-zinc-900 text-white font-semibold flex items-center justify-center gap-2 hover:bg-black transition text-xs px-4">
                    <span class="w-6 h-6 rounded-full bg-white text-zinc-900 grid place-items-center text-[11px] font-bold shrink-0">S</span> 
                    <span class="truncate">Demo 1-klik sebagai Siti Aminah — Paket C 12</span>
                </button>
                
                <p class="text-center text-[11px] text-zinc-400 pt-1">
                    Lupa password? Hubungi tutor via WA 0821-1870-2026
                </p>
            </div>
        </div>
        
        <!-- Back Button -->
        <button @click="activePage = 'beranda'" class="mt-6 w-full text-center text-[13px] font-semibold text-zinc-500 hover:text-zinc-900 transition">
            &larr; Kembali ke website publik
        </button>
        
    </div>
</main>

<main x-show="activePage === 'halaman-user'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="min-h-[calc(100vh-68px)] bg-white flex items-center justify-center">
    <div class="max-w-[1200px] mx-auto lg:grid lg:grid-cols-[1fr_360px] gap-0 min-h-[calc(100vh-68px)]">
       <!-- PORTAL DASHBOARD / DASHBOAR WARGA BELAJAR -->
        <div class="px-5 md:px-8 py-6 pb-[90px] lg:pb-6 max-w-[1200px] mx-auto">
            
            <!-- Top Greeting & Profile Header -->
            <div class="flex items-start justify-between gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-full bg-zinc-900 text-white grid place-items-center font-bold shrink-0">S</div>
                    <div>
                        <p class="text-[13px] text-zinc-500">Halo, selamat pagi</p>
                        <p class="font-bold leading-tight text-sm md:text-base">Siti Aminah • Paket C Kelas 12</p>
                        <div class="mt-1.5 flex items-center gap-2">
                            <div class="w-[96px] h-1.5 rounded-full bg-zinc-200 overflow-hidden">
                                <div class="h-full bg-[#4F46E5]" style="width: 78%;"></div>
                            </div>
                            <span class="text-[11px] font-bold text-[#4F46E5]">78% progres</span>
                        </div>
                    </div>
                </div>
                <button class="h-8 px-3 rounded-full border border-zinc-200 text-[11px] font-semibold bg-white hover:bg-zinc-50 transition shrink-0">
                    Keluar
                </button>
            </div>

            <!-- Attendance Card Widget -->
            <div class="mt-6 rounded-[20px] bg-white border border-zinc-100 p-5 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 shadow-[0_8px_30px_-20px_rgba(0,0,0,0.2)]">
                <div class="flex items-center gap-4">
                    <div class="w-11 h-11 rounded-2xl grid place-items-center bg-indigo-50 text-[#4F46E5] shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><rect width="5" height="5" x="3" y="3" rx="1"></rect><rect width="5" height="5" x="16" y="3" rx="1"></rect><rect width="5" height="5" x="3" y="16" rx="1"></rect><path d="M21 16h-3a2 2 0 0 0-2 2v3"></path><path d="M21 21v.01"></path><path d="M12 7v3a2 2 0 0 1-2 2H7"></path><path d="M3 12h.01"></path><path d="M12 3h.01"></path><path d="M12 16v.01"></path><path d="M16 12h1"></path><path d="M21 12v.01"></path><path d="M12 21v-1"></path></svg>
                    </div>
                    <div>
                        <p class="font-bold text-[14px]">Absensi Hari Ini</p>
                        <p class="text-[12px] text-zinc-500">Belum absen • Kelas 10:00 B.Indonesia</p>
                    </div>
                </div>
                <button class="w-full sm:w-auto h-9 px-4 rounded-full font-semibold text-[13px] transition bg-[#4F46E5] text-white shadow-[0_8px_16px_-10px_#4F46E5] hover:bg-[#4338CA]">
                    Absen QR
                </button>
            </div>

            <!-- Quick Navigation Menu Grid (4 Icons) -->
            <div class="mt-6 grid grid-cols-2 sm:grid-cols-4 gap-3">
                <button class="rounded-[18px] bg-white border border-zinc-100 p-3 text-center shadow-[0_6px_20px_-16px_rgba(0,0,0,0.2)] hover:shadow-[0_10px_24px_-16px_rgba(0,0,0,0.25)] hover:-translate-y-0.5 transition">
                    <div class="mx-auto w-10 h-10 rounded-xl grid place-items-center bg-violet-50 text-violet-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                    </div>
                    <p class="mt-2 text-[11px] font-bold text-zinc-700">Materi</p>
                </button>

                <button class="rounded-[18px] bg-white border border-zinc-100 p-3 text-center shadow-[0_6px_20px_-16px_rgba(0,0,0,0.2)] hover:shadow-[0_10px_24px_-16px_rgba(0,0,0,0.25)] hover:-translate-y-0.5 transition">
                    <div class="mx-auto w-10 h-10 rounded-xl grid place-items-center bg-amber-50 text-amber-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M12 11h4"></path><path d="M12 16h4"></path><path d="M8 11h.01"></path><path d="M8 16h.01"></path></svg>
                    </div>
                    <p class="mt-2 text-[11px] font-bold text-zinc-700">Tugas</p>
                </button>

                <button class="rounded-[18px] bg-white border border-zinc-100 p-3 text-center shadow-[0_6px_20px_-16px_rgba(0,0,0,0.2)] hover:shadow-[0_10px_24px_-16px_rgba(0,0,0,0.25)] hover:-translate-y-0.5 transition">
                    <div class="mx-auto w-10 h-10 rounded-xl grid place-items-center bg-emerald-50 text-emerald-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg>
                    </div>
                    <p class="mt-2 text-[11px] font-bold text-zinc-700">Jadwal</p>
                </button>

                <button class="rounded-[18px] bg-white border border-zinc-100 p-3 text-center shadow-[0_6px_20px_-16px_rgba(0,0,0,0.2)] hover:shadow-[0_10px_24px_-16px_rgba(0,0,0,0.25)] hover:-translate-y-0.5 transition">
                    <div class="mx-auto w-10 h-10 rounded-xl grid place-items-center bg-indigo-50 text-[#4F46E5]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M3 3v18h18"></path><path d="M18 17V9"></path><path d="M13 17V5"></path><path d="M8 17v-3"></path></svg>
                    </div>
                    <p class="mt-2 text-[11px] font-bold text-zinc-700">Rapor</p>
                </button>
            </div>

            <!-- Section: Materi Saya -->
            <div class="mt-7">
                <div class="flex items-center justify-between">
                    <h3 class="font-bold text-base">Materi Saya</h3>
                    <button class="text-[12px] font-semibold text-[#4F46E5] hover:underline">Lihat semua</button>
                </div>
                
                <div class="mt-3 grid gap-3">
                    <!-- Materi 1 -->
                    <div class="rounded-[18px] bg-white border border-zinc-100 p-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-zinc-900 text-white grid place-items-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
                            </div>
                            <div class="min-w-0">
                                <p class="font-semibold text-[13px] leading-tight truncate">Matematika — Bab 3: Persamaan Linear</p>
                                <p class="mt-1 text-[11px] text-zinc-500">Pak Andi UPI • 12 menit • 60%</p>
                                <div class="mt-2 h-1.5 rounded-full bg-zinc-100 overflow-hidden w-full max-w-[200px]">
                                    <div class="h-full bg-[#4F46E5]" style="width: 60%;"></div>
                                </div>
                            </div>
                        </div>
                        <button class="h-8 px-4 rounded-full bg-zinc-900 text-white text-[11px] font-semibold hover:bg-black transition self-end sm:self-center shrink-0">
                            Lanjutkan
                        </button>
                    </div>

                    <!-- Materi 2 -->
                    <div class="rounded-[18px] bg-white border border-zinc-100 p-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-zinc-900 text-white grid place-items-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
                            </div>
                            <div class="min-w-0">
                                <p class="font-semibold text-[13px] leading-tight truncate">B. Indonesia — Teks Laporan Hasil Observasi</p>
                                <p class="mt-1 text-[11px] text-zinc-500">Bu Lilis • 18 menit • 30%</p>
                                <div class="mt-2 h-1.5 rounded-full bg-zinc-100 overflow-hidden w-full max-w-[200px]">
                                    <div class="h-full bg-[#4F46E5]" style="width: 30%;"></div>
                                </div>
                            </div>
                        </div>
                        <button class="h-8 px-4 rounded-full bg-zinc-900 text-white text-[11px] font-semibold hover:bg-black transition self-end sm:self-center shrink-0">
                            Lanjutkan
                        </button>
                    </div>

                    <!-- Materi 3 -->
                    <div class="rounded-[18px] bg-white border border-zinc-100 p-4 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-zinc-900 text-white grid place-items-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
                            </div>
                            <div class="min-w-0">
                                <p class="font-semibold text-[13px] leading-tight truncate">IPA — Sistem Pencernaan</p>
                                <p class="mt-1 text-[11px] text-zinc-500">Bu Sari • 10 menit • 90%</p>
                                <div class="mt-2 h-1.5 rounded-full bg-zinc-100 overflow-hidden w-full max-w-[200px]">
                                    <div class="h-full bg-[#4F46E5]" style="width: 90%;"></div>
                                </div>
                            </div>
                        </div>
                        <button class="h-8 px-4 rounded-full bg-zinc-900 text-white text-[11px] font-semibold hover:bg-black transition self-end sm:self-center shrink-0">
                            Lanjutkan
                        </button>
                    </div>
                </div>
            </div>

            <!-- Section: Tugas & Jadwal Hari Ini (2 Columns Grid) -->
            <div class="mt-7 grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <!-- Kolom Kiri: Tugas Belum Dikumpulkan -->
                <div class="rounded-[18px] bg-white border border-zinc-100 p-5">
                    <h4 class="font-bold text-[14px]">Tugas belum dikumpulkan (2)</h4>
                    <div class="mt-3 space-y-3">
                        <div class="rounded-xl bg-amber-50 border border-amber-100 p-3 flex justify-between items-center gap-3">
                            <div>
                                <p class="text-[12px] font-bold text-zinc-800">Esai B. Indonesia — Observasi Pasar</p>
                                <p class="text-[11px] text-zinc-600">Deadline: besok 23:59</p>
                            </div>
                            <span class="text-[10px] font-bold px-2 py-1 rounded-full bg-amber-400 text-zinc-900 shrink-0">2 hari</span>
                        </div>
                        
                        <div class="rounded-xl bg-zinc-50 border border-zinc-100 p-3 flex justify-between items-center gap-3">
                            <div>
                                <p class="text-[12px] font-bold text-zinc-800">Latihan Matematika Bab 3</p>
                                <p class="text-[11px] text-zinc-600">Deadline: 3 hari</p>
                            </div>
                            <button class="h-7 px-3 rounded-full bg-[#4F46E5] text-white text-[11px] font-semibold hover:bg-[#4338CA] transition shrink-0">
                                Kerjakan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Jadwal Hari Ini -->
                <div class="rounded-[18px] bg-white border border-zinc-100 p-5">
                    <h4 class="font-bold text-[14px]">Jadwal Hari Ini</h4>
                    <div class="mt-3 rounded-xl border border-zinc-100 p-3 flex gap-3 items-center">
                        <div class="w-14 rounded-xl bg-[#4F46E5] text-white grid place-items-center p-2 shrink-0">
                            <p class="text-[10px] font-extrabold leading-none">10:00</p>
                            <p class="text-[10px]">WIB</p>
                        </div>
                        <div class="min-w-0">
                            <p class="text-[13px] font-bold text-zinc-800 truncate">B. Indonesia — Bu Lilis</p>
                            <p class="text-[11px] text-zinc-500 truncate">Ruang 1 • Offline + Live Zoom</p>
                            <div class="mt-2 inline-flex items-center gap-1 text-[10px] font-bold px-2 py-0.5 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">
                                ● Live sekarang
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ================= DESKTOP SIDEBAR (Progres & Rapor) ================= -->
        <div class="hidden lg:block border-l border-zinc-100 bg-white p-6">
            
            <!-- Progress Card Widget -->
            <div class="rounded-[20px] bg-zinc-900 text-white p-5 shadow-lg">
                <p class="text-[12px] text-zinc-400 font-bold tracking-wide uppercase">PROGRES KELULUSAN</p>
                <p class="mt-2 text-[28px] font-extrabold leading-none">78%</p>
                <div class="mt-4 h-2 rounded-full bg-white/15 overflow-hidden">
                    <div class="h-full bg-white transition-all duration-500" style="width: 78%;"></div>
                </div>
                <p class="mt-3 text-[12px] text-zinc-300">12 dari 18 modul selesai. Pertahankan!</p>
            </div>

            <!-- Rapor Semester Section -->
            <div class="mt-6">
                <p class="font-bold text-[14px] text-zinc-800">Rapor Semester</p>
                <div class="mt-3 space-y-2">
                    <div class="flex items-center justify-between rounded-xl bg-zinc-50 border border-zinc-100 px-4 py-2.5">
                        <span class="text-[13px] font-medium text-zinc-700">B. Indonesia</span>
                        <span class="text-[12px] font-bold px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">85</span>
                    </div>
                    <div class="flex items-center justify-between rounded-xl bg-zinc-50 border border-zinc-100 px-4 py-2.5">
                        <span class="text-[13px] font-medium text-zinc-700">Matematika</span>
                        <span class="text-[12px] font-bold px-2.5 py-1 rounded-full bg-amber-50 text-amber-700 border border-amber-100">78</span>
                    </div>
                    <div class="flex items-center justify-between rounded-xl bg-zinc-50 border border-zinc-100 px-4 py-2.5">
                        <span class="text-[13px] font-medium text-zinc-700">IPA</span>
                        <span class="text-[12px] font-bold px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">88</span>
                    </div>
                    <div class="flex items-center justify-between rounded-xl bg-zinc-50 border border-zinc-100 px-4 py-2.5">
                        <span class="text-[13px] font-medium text-zinc-700">IPS</span>
                        <span class="text-[12px] font-bold px-2.5 py-1 rounded-full bg-amber-50 text-amber-700 border border-amber-100">82</span>
                    </div>
                </div>
            </div>

            <!-- Tutor Online Info Box -->
            <div class="mt-6 rounded-[16px] bg-indigo-50 border border-indigo-100 p-4">
                <p class="text-[12px] font-bold text-[#4F46E5]">Tutor Online</p>
                <p class="mt-1 text-[12px] leading-5 text-zinc-600">
                    Butuh bantuan tugas? Chat Bu Lilis di jam 19.00-21.00 via WhatsApp grup kelas.
                </p>
            </div>

        </div>

        <!-- ================= MOBILE BOTTOM NAVIGATION BAR ================= -->
        <div class="lg:hidden fixed bottom-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-xl border-t border-zinc-100 px-6 h-[72px] flex items-center justify-between shadow-[0_-10px_25px_-5px_rgba(0,0,0,0.05)]">
            
            <!-- Nav item: Beranda (Active State) -->
            <button class="flex flex-col items-center gap-1 text-[#4F46E5] transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 fill-indigo-50"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                <span class="text-[10px] font-bold">Beranda</span>
            </button>
            
            <!-- Nav item: Belajar -->
            <button class="flex flex-col items-center gap-1 text-zinc-400 hover:text-zinc-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                <span class="text-[10px] font-bold">Belajar</span>
            </button>
            
            <!-- Nav item: Absen -->
            <button class="flex flex-col items-center gap-1 text-zinc-400 hover:text-zinc-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><rect width="5" height="5" x="3" y="3" rx="1"></rect><rect width="5" height="5" x="16" y="3" rx="1"></rect><rect width="5" height="5" x="3" y="16" rx="1"></rect><path d="M21 16h-3a2 2 0 0 0-2 2v3"></path><path d="M21 21v.01"></path><path d="M12 7v3a2 2 0 0 1-2 2H7"></path><path d="M3 12h.01"></path><path d="M12 3h.01"></path><path d="M12 16v.01"></path><path d="M16 12h1"></path><path d="M21 12v.01"></path><path d="M12 21v-1"></path></svg>
                <span class="text-[10px] font-bold">Absen</span>
            </button>
            
            <!-- Nav item: Profil -->
            <button class="flex flex-col items-center gap-1 text-zinc-400 hover:text-zinc-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <span class="text-[10px] font-bold">Profil</span>
            </button>

        </div>
    </div>
</main>


<!-- ================= FOOTER ================= -->
<footer class="border-t border-zinc-100 bg-white">
    <div class="max-w-[1200px] mx-auto px-5 md:px-8 py-10 grid md:grid-cols-[1.2fr_0.8fr_0.8fr] gap-8 text-[13px]">
        <div>
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-zinc-900 text-white grid place-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap w-5 h-5"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg>
            </div><p class="font-extrabold display">PKBM MANDIRI BANJARAN</p>
        </div><p class="mt-3 leading-6 text-zinc-500 max-w-[360px]">Sumber Solusi Optimal — Pendidikan Kesetaraan Paket A/B/C, PAUD, dan Kursus Vokasi. Terakreditasi B, NPSN: P9991870.</p>
    </div>
    <div>
        <p class="font-bold">Bantuan</p>
        <div class="mt-3 space-y-2 text-zinc-500">
            <p>Cara Daftar</p>
            <p>Biaya &amp; BOS</p>
            <p>Jadwal Belajar</p>
            <p class="cursor-pointer hover:text-zinc-900">Cek Status PPDB</p>
        </div>
    </div>
    <div>
        <p class="font-bold">Kontak Resmi</p>
        <div class="mt-3 space-y-2 text-zinc-500">
            <p>Jl. Raya Banjaran 187</p>
            <p>Kab. Bandung 40377</p>
            <p>IG: @pkbm.mandiri.banjaran</p>
        </div>
    </div>
</div>
<div class="border-t border-zinc-100 py-4 text-center text-[11px] text-zinc-400">© 2026 PKBM Mandiri Banjaran. Ijazah resmi Kemendikbudristek. Dibuat untuk warga Banjaran.</div>
</footer>

@endsection