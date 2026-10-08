<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Naditia - Game Developer & Web Enthusiast</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Inter & Press Start 2P (Gamer vibe) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Press+Start+2P&display=swap" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <!-- AOS (Animate On Scroll) Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .font-pixel {
            font-family: 'Press Start 2P', cursive;
        }
        /* Custom Gradient Background Animation */
        .animated-gradient {
            background: linear-gradient(-45deg, #0f172a, #1e1b4b, #312e81, #0f172a);
            background-size: 400% 400%;
            animation: gradientBG 12s ease infinite;
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        /* Glowing Card Effect */
        .glow-card:hover {
            box-shadow: 0 0 25px rgba(99, 102, 241, 0.4);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 overflow-x-hidden">

    <!-- Navbar Minimalis & Sticky -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-slate-900/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold tracking-wider text-indigo-400 hover:text-indigo-300 transition-all duration-300">
                &lt;Naditia /&gt;
            </a>
            <div class="space-x-6 text-sm font-medium">
                <a href="#tentang" class="hover:text-indigo-400 transition-colors">Tentang</a>
                <a href="#proyek" class="hover:text-indigo-400 transition-colors">Proyek</a>
                <a href="#kontak" class="bg-indigo-600 hover:bg-indigo-500 text-white px-4 py-2 rounded-full transition-all duration-300 shadow-lg shadow-indigo-600/30">Hubungi Saya</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="animated-gradient min-h-screen flex items-center justify-center text-center px-6 pt-20 relative">
        <div class="max-w-3xl animate__animated animate__fadeInDown">
            <span class="inline-block px-4 py-1.5 mb-6 text-xs font-pixel text-indigo-300 bg-indigo-950/80 border border-indigo-500/30 rounded-full animate__animated animate__pulse animate__infinite">
                Level 1: Game & Web Dev
            </span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white via-slate-200 to-indigo-300">
                Halo, Saya <span class="text-indigo-400 inline-block hover:scale-105 transition-transform cursor-pointer">Naditia</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 mb-8 leading-relaxed font-light">
                Game Programmer <span class="text-indigo-400 font-semibold">(GML Code)</span> & Web Enthusiast <span class="text-red-400 font-semibold">(Laravel)</span> dari Indonesia.
            </p>
            <div class="flex justify-center gap-4 animate__animated animate__fadeInUp animate__delay-1s">
                <a href="#proyek" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-6 py-3 rounded-xl transition-all duration-300 hover:scale-105 shadow-lg shadow-indigo-600/30">
                    Lihat Karya
                </a>
                <a href="#kontak" class="border border-slate-700 hover:border-indigo-500 text-slate-300 hover:text-white font-semibold px-6 py-3 rounded-xl transition-all duration-300 hover:bg-slate-800">
                    Diskusi Proyek
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce opacity-60">
            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto px-6 py-20 space-y-24">
        
        <!-- Tentang Saya -->
        <section id="tentang" data-aos="fade-up" class="bg-slate-900/50 border border-slate-800/80 p-8 md:p-12 rounded-3xl backdrop-blur-sm glow-card transition-all duration-500">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-3 h-8 bg-indigo-500 rounded-full"></div>
                <h2 class="text-3xl font-bold">Tentang Saya</h2>
            </div>
            <p class="text-slate-300 text-lg leading-relaxed">
                Halo! Saya Naditia, seorang pengembang game asal Indonesia yang berfokus pada pembuatan mekanik dan sistem permainan interaktif menggunakan 
                <strong class="text-indigo-400 font-semibold">GML (GameMaker Language)</strong>. Selain dunia game development, saya juga aktif mengeksplorasi ekosistem web modern menggunakan 
                <strong class="text-red-400 font-semibold">Laravel</strong> untuk membangun aplikasi yang scalable dan cepat.
            </p>
        </section>

        <!-- Proyek Saya -->
        <section id="proyek" class="space-y-8">
            <div data-aos="fade-up" class="flex items-center gap-3 mb-6">
                <div class="w-3 h-8 bg-indigo-500 rounded-full"></div>
                <h2 class="text-3xl font-bold">Proyek Pilihan</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Proyek 1: Game Maker -->
                <div data-aos="fade-right" data-aos-delay="100" class="group bg-slate-900 border border-slate-800 p-8 rounded-3xl hover:border-indigo-500/50 transition-all duration-500 hover:-translate-y-2 glow-card relative overflow-hidden">
                    <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-indigo-600/10 rounded-full blur-2xl group-hover:bg-indigo-600/20 transition-all"></div>
                    <div class="text-3xl mb-4 text-indigo-400">🎮</div>
                    <h3 class="font-bold text-2xl text-white group-hover:text-indigo-400 transition-colors mb-3">Game 2D Berbasis GML</h3>
                    <p class="text-slate-400 leading-relaxed text-sm">
                        Pengembangan logika permainan, AI sistem musuh, serta mekanik kontrol pemain yang responsif menggunakan GameMaker Language (GML).
                    </p>
                    <div class="mt-6 flex gap-2">
                        <span class="text-xs bg-indigo-950 text-indigo-300 px-3 py-1 rounded-full border border-indigo-800/40">GML</span>
                        <span class="text-xs bg-slate-800 text-slate-300 px-3 py-1 rounded-full">GameMaker</span>
                    </div>
                </div>

                <!-- Proyek 2: Laravel -->
                <div data-aos="fade-left" data-aos-delay="200" class="group bg-slate-900 border border-slate-800 p-8 rounded-3xl hover:border-red-500/50 transition-all duration-500 hover:-translate-y-2 glow-card relative overflow-hidden">
                    <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-red-600/10 rounded-full blur-2xl group-hover:bg-red-600/20 transition-all"></div>
                    <div class="text-3xl mb-4 text-red-400">🚀</div>
                    <h3 class="font-bold text-2xl text-white group-hover:text-red-400 transition-colors mb-3">Portofolio Web Laravel</h3>
                    <p class="text-slate-400 leading-relaxed text-sm">
                        Website portofolio pribadi responsif yang dibangun menggunakan framework Laravel, Blade Templates, dan Tailwind CSS.
                    </p>
                    <div class="mt-6 flex gap-2">
                        <span class="text-xs bg-red-950 text-red-300 px-3 py-1 rounded-full border border-red-800/40">Laravel</span>
                        <span class="text-xs bg-slate-800 text-slate-300 px-3 py-1 rounded-full">Tailwind CSS</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kontak -->
        <section id="kontak" data-aos="zoom-in" class="bg-gradient-to-br from-indigo-950/60 to-slate-900 border border-indigo-800/30 p-10 md:p-16 rounded-3xl text-center relative overflow-hidden shadow-2xl">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Mulai Kolaborasi?</h2>
            <p class="text-slate-300 max-w-xl mx-auto mb-8 text-lg font-light">
                Tertarik berkolaborasi dalam proyek pengembangan game 2D atau aplikasi web berbasis Laravel? Mari terhubung!
            </p>
            <a href="mailto:email-anda@example.com" class="inline-block bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-8 py-4 rounded-2xl transition-all duration-300 hover:scale-110 shadow-xl shadow-indigo-600/40">
                📩 Hubungi via Email
            </a>
        </section>

    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800 py-8 text-center text-sm text-slate-500">
        <p>&copy; 2026 Naditia. Dibuat dengan Blade & Tailwind CSS.</p>
    </footer>

    <!-- AOS JS Library Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi library animasi AOS
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out'
        });
    </script>
</body>
</html>