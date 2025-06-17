<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm'In</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .agricultural-bg {
            background: linear-gradient(135deg, #4ade80 0%, #22c55e 25%, #16a34a 75%, #15803d 100%);
        }
        
        .earth-gradient {
            background: linear-gradient(135deg, #92400e 0%, #a16207 25%, #ca8a04 75%, #eab308 100%);
        }
        
        .plant-card {
            backdrop-filter: blur(10px) saturate(180%);
            -webkit-backdrop-filter: blur(10px) saturate(180%);
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.9), rgba(240, 253, 244, 0.8));
            border: 2px solid rgba(34, 197, 94, 0.2);
            box-shadow: 0 8px 32px rgba(22, 163, 74, 0.1);
        }
        
        .plant-card:hover {
            background: linear-gradient(145deg, rgba(240, 253, 244, 0.95), rgba(220, 252, 231, 0.9));
            border-color: rgba(34, 197, 94, 0.4);
            transform: translateY(-8px) scale(1.02);
        }
        
        .farm-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .farm-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(22, 163, 74, 0.3);
        }
        
        .grain-pattern {
            background-image: 
                radial-gradient(circle at 20px 20px, rgba(34, 197, 94, 0.1) 2px, transparent 0),
                radial-gradient(circle at 60px 60px, rgba(22, 163, 74, 0.08) 1px, transparent 0);
            background-size: 80px 80px;
        }
        
        .leaf-bounce {
            animation: leaf-bounce 3s ease-in-out infinite;
        }
        
        .leaf-bounce-delay {
            animation: leaf-bounce 3s ease-in-out infinite;
            animation-delay: -1.5s;
        }
        
        @keyframes leaf-bounce {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-15px) rotate(2deg); }
            75% { transform: translateY(-5px) rotate(-1deg); }
        }
        
        .agricultural-text {
            background: linear-gradient(135deg, #15803d 0%, #16a34a 50%, #22c55e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .crop-glow {
            animation: crop-glow 3s infinite;
        }
        
        @keyframes crop-glow {
            0%, 100% { box-shadow: 0 0 30px rgba(34, 197, 94, 0.3); }
            50% { box-shadow: 0 0 50px rgba(34, 197, 94, 0.5); }
        }
        
        .wheat-wave {
            animation: wheat-wave 4s ease-in-out infinite;
        }
        
        @keyframes wheat-wave {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(3deg); }
            75% { transform: rotate(-2deg); }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-50 via-emerald-50 to-lime-50">
    
    <header class="bg-[#A8E6A3] h-[70px] flex items-center justify-between px-6 shadow-lg relative z-10">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('img/logo_farm\'in.png') }}" alt="logo farm'in" class="w-10 h-10">
            <h1 class="text-[#2E7D32] text-2xl font-bold">Farm'In</h1>
        </div>

        <div class="flex-grow text-center">
            
        </div>

        <div class="flex items-center space-x-6">
            <a href="{{ route('login') }}" class="px-4 py-2 rounded-full bg-[#2E7D32] text-white hover:bg-green-800 transition duration-300">Login</a>
            <a href="{{ route('register') }}" class="px-4 py-2 rounded-full border border-[#2E7D32] text-[#2E7D32] hover:bg-green-100 transition duration-300">Register</a>
        </div>
    </header>

   
    <div class="bg-cover bg-center h-[600px] flex items-center justify-center relative grain-pattern" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('img/background2.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-r from-green-900/30 to-emerald-900/30"></div>
        
     
        <div class="absolute top-20 left-20 leaf-bounce">
            <div class="w-16 h-16 bg-green-500/20 rounded-full flex items-center justify-center">
                <svg class="w-8 h-8 text-green-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                </svg>
            </div>
        </div>
        
        <div class="absolute top-32 right-32 leaf-bounce-delay">
            <div class="w-12 h-12 bg-yellow-500/20 rounded-full flex items-center justify-center wheat-wave">
                <svg class="w-6 h-6 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12,2A3,3 0 0,1 15,5V11A3,3 0 0,1 12,14A3,3 0 0,1 9,11V5A3,3 0 0,1 12,2M12,4A1,1 0 0,0 11,5V11A1,1 0 0,0 12,12A1,1 0 0,0 13,11V5A1,1 0 0,0 12,4M12,15A1,1 0 0,1 13,16V20H14A1,1 0 0,1 15,21A1,1 0 0,1 14,22H10A1,1 0 0,1 9,21A1,1 0 0,1 10,20H11V16A1,1 0 0,1 12,15Z"/>
                </svg>
            </div>
        </div>

        <article class="text-center flex flex-col items-center max-w-4xl text-white relative z-10 px-6">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 drop-shadow-lg">
                SELAMAT DATANG DI <span class="text-green-300">FARM'IN</span>
            </h1>
            <p class="text-xl md:text-2xl max-w-3xl leading-relaxed drop-shadow-md">
                Platform digital terdepan yang menghubungkan petani dengan teknologi modern untuk pertanian yang lebih produktif dan berkelanjutan
            </p>
            
        </article>
    </div>

   
    <div class="py-20 bg-gradient-to-br from-green-50 to-emerald-100 grain-pattern">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Fitur <span class="agricultural-text">Pertanian Digital</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Teknologi inovatif untuk mendukung produktivitas dan kesejahteraan petani Indonesia
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
              
                <div class="plant-card rounded-3xl p-8 farm-hover group">
                    <div class="mb-6">
                        <div class="w-20 h-20 agricultural-bg rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 crop-glow">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-green-800 mb-4">📊 Harga Pasar Terkini</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Pantau harga komoditas pertanian secara real-time dari berbagai pasar tradisional dan modern. 
                        Dapatkan insight terbaik untuk waktu penjualan yang menguntungkan.
                    </p>
                    <div class="mt-6 flex items-center text-green-600 font-semibold">
                        <span>🌾 Update setiap 5 menit</span>
                    </div>
                </div>

                
                <div class="plant-card rounded-3xl p-8 farm-hover group">
                    <div class="mb-6">
                        <div class="w-20 h-20 earth-gradient rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 crop-glow">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-green-800 mb-4">🚚 Pemesanan Pupuk & Bibit</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Pesan pupuk berkualitas dan bibit unggul langsung dari distributor terpercaya. 
                        Sistem pembayaran fleksibel dengan pengiriman hingga ke lahan Anda.
                    </p>
                    <div class="mt-6 flex items-center text-amber-600 font-semibold">
                        <span>🌱 Garansi kualitas 100%</span>
                    </div>
                </div>

               
                <div class="plant-card rounded-3xl p-8 farm-hover group">
                    <div class="mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 crop-glow">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-green-800 mb-4">👥 Komunitas Petani</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Bergabung dengan ribuan petani Indonesia. Berbagi pengalaman, tips budidaya, 
                        dan dapatkan konsultasi langsung dari para ahli pertanian berpengalaman.
                    </p>
                    <div class="mt-6 flex items-center text-emerald-600 font-semibold">
                        <span>🤝 15,000+ petani aktif</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Farm'In Section -->
    <div class="py-20 bg-gradient-to-br from-amber-50 via-yellow-50 to-green-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Mengapa Memilih <span class="agricultural-text">Farm'In?</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Solusi komprehensif untuk modernisasi pertanian Indonesia dengan teknologi terdepan
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Advantage 1 -->
                <div class="text-center group">
                    <div class="relative inline-block mb-8">
                        <div class="w-40 h-40 agricultural-bg rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-2xl crop-glow">
                            <svg class="w-20 h-20 text-white wheat-wave" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <div class="absolute -top-4 -right-4 w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center animate-pulse">
                            <span class="text-2xl">🌾</span>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-green-800 mb-4">Data Pertanian Akurat</h3>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Informasi harga komoditas yang diperbarui setiap 5 menit dengan data dari 200+ pasar di seluruh Indonesia. 
                        Akurasi 99% untuk keputusan bisnis yang tepat.
                    </p>
                </div>

         
                <div class="text-center group">
                    <div class="relative inline-block mb-8">
                        <div class="w-40 h-40 earth-gradient rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-2xl crop-glow">
                            <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <div class="absolute -top-4 -right-4 w-12 h-12 bg-green-400 rounded-full flex items-center justify-center animate-pulse">
                            <span class="text-2xl">📦</span>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-green-800 mb-4">Distribusi Terpercaya</h3>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Jaringan distribusi ke 34 provinsi dengan 500+ mitra supplier. Pengiriman express dalam 24 jam 
                        dengan sistem tracking real-time dan garansi uang kembali.
                    </p>
                </div>

                <div class="text-center group">
                    <div class="relative inline-block mb-8">
                        <div class="w-40 h-40 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300 shadow-2xl crop-glow">
                            <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div class="absolute -top-4 -right-4 w-12 h-12 bg-blue-400 rounded-full flex items-center justify-center animate-pulse">
                            <span class="text-2xl">🎓</span>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-green-800 mb-4">Edukasi & Konsultasi</h3>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Program pelatihan gratis dengan 50+ ahli pertanian tersertifikasi. 
                        Webinar mingguan, panduan praktis, dan konsultasi 24/7 untuk meningkatkan hasil panen.
                    </p>
                </div>
            </div>

            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-green-600 mb-2">15,000+</div>
                    <div class="text-gray-600 font-medium">Petani Bergabung</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-amber-600 mb-2">200+</div>
                    <div class="text-gray-600 font-medium">Pasar Terintegrasi</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-emerald-600 mb-2">500+</div>
                    <div class="text-gray-600 font-medium">Supplier Terpercaya</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-teal-600 mb-2">98%</div>
                    <div class="text-gray-600 font-medium">Kepuasan Pengguna</div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-20 agricultural-bg">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Siap Bergabung dengan Revolusi Pertanian Digital?
            </h2>
            <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto">
                Mulai perjalanan Anda menuju pertanian yang lebih modern, produktif, dan menguntungkan bersama Farm'In
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="px-10 py-4 bg-white text-green-600 font-bold text-lg rounded-full hover:bg-green-50 transition-all duration-300 transform hover:scale-105">
                    Daftar Sekarang - Gratis!
                </a>
                <a href="{{ route('register') }}" class="px-10 py-4 border-2 border-white text-white font-bold text-lg rounded-full hover:bg-white hover:text-green-600 transition-all duration-300">
                    Hubungi Tim Kami
                </a>
            </div>
        </div>
    </div>

    <script>
    
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
          
            const animatedElements = document.querySelectorAll('.plant-card, .farm-hover');
            animatedElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(50px)';
                element.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                observer.observe(element);
            });

           
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll('.leaf-bounce, .leaf-bounce-delay');
                
                parallaxElements.forEach(element => {
                    const speed = 0.5;
                    element.style.transform = `translateY(${scrolled * speed}px)`;
                });
            });
        });
    </script>
</body>
</html>