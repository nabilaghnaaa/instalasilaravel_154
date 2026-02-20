<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tugas Praktikum 1 - Regina Rana Nabila</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700,800" rel="stylesheet" />

        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
                background-color: #fcfcfc;
            }
            .laravel-gradient {
                background: linear-gradient(135deg, #FF2D20 0%, #b91c1c 100%);
            }
            .card-shadow {
                box-shadow: 0 20px 50px -12px rgba(0, 0, 0, 0.08);
            }
            .floating-anim {
                animation: floating 4s ease-in-out infinite;
            }
            @keyframes floating {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-15px); }
            }
        </style>
    </head>
    <body class="antialiased flex items-center justify-center min-h-screen bg-slate-50/50 p-6">
        
        <main class="max-w-5xl w-full grid grid-cols-1 lg:grid-cols-2 bg-white card-shadow rounded-[2.5rem] overflow-hidden border border-slate-100">
            
            <div class="p-10 md:p-16 flex flex-col justify-center">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-50 border border-red-100 text-red-600 text-[10px] font-bold uppercase tracking-wider mb-6 w-fit">
                    <span class="w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span>
                    Completed Task: Laravel 12 Installation
                </div>

                <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight mb-4">
                    Instalasi <br><span class="text-red-600">Laravel 12</span> Berhasil!
                </h1>
                
                <p class="text-slate-500 leading-relaxed mb-8">
                    Proyek startup Laravel telah berhasil dikonfigurasi menggunakan lingkungan XAMPP. Halaman ini dimodifikasi sebagai bukti penyelesaian tugas praktikum.
                </p>

                <div class="space-y-3">
                    <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-red-200 transition-colors group">
                        <div class="w-12 h-12 rounded-xl laravel-gradient flex items-center justify-center text-white shadow-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-400 font-bold uppercase">Nama Mahasiswa</p>
                            <p class="text-lg font-bold text-slate-800">Regina Rana Nabila</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-red-200 transition-colors group">
                        <div class="w-12 h-12 rounded-xl bg-slate-800 flex items-center justify-center text-white shadow-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-400 font-bold uppercase">Nomor Induk Mahasiswa</p>
                            <p class="text-lg font-bold text-slate-800">20230140154</p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 flex items-center gap-6">
                    <a href="https://laravel.com/docs" class="text-sm font-bold text-slate-900 border-b-2 border-red-500 pb-1 hover:text-red-600 transition-colors italic">
                        Informatics UMY • 2026
                    </a>
                </div>
            </div>

            <div class="laravel-gradient relative flex items-center justify-center p-12 overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-20 -mt-20 blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-black/10 rounded-full -ml-10 -mb-10 blur-2xl"></div>

                <div class="relative z-10 floating-anim flex flex-col items-center">
                    <svg class="w-32 h-32 text-white drop-shadow-2xl" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M60.1 16.3L32.6 1.4C31.2 0.6 29.5 0.6 28.1 1.4L0.6 16.3C-0.2 16.8 -0.2 17.9 0.6 18.4L28.1 33.3C29.5 34.1 31.2 34.1 32.6 33.3L60.1 18.4C60.9 17.9 60.9 16.8 60.1 16.3Z" fill="white"/>
                        <path opacity="0.5" d="M30.4 36.3L2.9 21.4C2.1 20.9 1.1 21.5 1.1 22.4V52.2C1.1 53.6 1.9 54.9 3.2 55.6L30.7 70.5C32.1 71.3 33.8 71.3 35.2 70.5L62.7 55.6C64 54.9 64.8 53.6 64.8 52.2V22.4C64.8 21.5 63.8 20.9 63 21.4L35.5 36.3C34 37.1 32 37.1 30.4 36.3Z" fill="white"/>
                    </svg>
                    
                    <div class="mt-6 text-center text-white/90">
                        <span class="text-7xl font-black block leading-none">12</span>
                        <span class="text-xs font-bold uppercase tracking-[0.4em] opacity-60">Version Engine</span>
                    </div>
                </div>

                <div class="absolute bottom-8 text-white/40 text-[10px] font-mono tracking-tighter text-center w-full uppercase">
                    Regina Rana 
                </div>
            </div>
        </main>

    </body>
</html>