<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name', 'TripTogether') }}</title>
    
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
        <script src="{{ asset('build/assets/app.js') }}" defer></script>
    @endif

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="h-screen flex flex-col justify-between overflow-y-auto md:overflow-y-hidden font-['Sora',sans-serif] bg-[#fdfaff] text-[#071022] antialiased">
    
    <!-- Top Header Branding -->
    <header class="w-full max-w-7xl mx-auto px-6 py-4 flex items-center justify-between z-30 shrink-0">
        <a href="{{ Auth::check() ? route('home') : '/' }}" class="flex items-center gap-2 group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 text-party-1 transition-transform group-hover:scale-110 duration-300" fill="currentColor">
                <path d="M12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7z" stroke="none"/>
                <circle cx="12" cy="9" r="2.5" fill="white" />
            </svg>
            <span class="font-bold text-lg text-[#071022] tracking-tight group-hover:text-party-1 transition-colors">triptogether</span>
        </a>
        
        <div>
            @guest
                <a href="{{ route('login') }}" class="btn-outline px-5 py-2 rounded-full text-[#071022] font-semibold text-sm hover:bg-party-1/5 transition-all">
                    Sign In
                </a>
            @endguest
            @auth
                <a href="{{ route('home') }}" class="btn-outline px-5 py-2 rounded-full text-[#071022] font-semibold text-sm hover:bg-party-1/5 transition-all">
                    Dashboard
                </a>
            @endauth
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center px-6 py-4 relative z-10 overflow-hidden">
        <div class="relative w-full max-w-4xl my-auto">
            <!-- Glassmorphism Card (Split side-by-side) -->
            <div class="bg-white/80 backdrop-blur-xl border border-white/40 shadow-[0_20px_50px_rgba(124,58,237,0.08)] rounded-3xl p-6 sm:p-10 transition-all duration-300 hover:shadow-[0_30px_60px_rgba(124,58,237,0.12)]">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
                    
                    <!-- Left Column: Animated Illustration -->
                    <div class="flex justify-center items-center md:border-r md:border-slate-100/80 md:pr-8 py-4">
                        @yield('image')
                    </div>

                    <!-- Right Column: Details & CTAs -->
                    <div class="text-center md:text-left flex flex-col justify-center">
                        <!-- Status Code -->
                        <div class="text-6xl sm:text-7xl font-extrabold gold-shimmer mb-2 tracking-tight">
                            @yield('code')
                        </div>

                        <!-- Friendly Title -->
                        <h1 class="text-2xl sm:text-3xl font-extrabold text-[#071022] mb-3 tracking-tight leading-tight">
                            @yield('title-text')
                        </h1>

                        <!-- Help Message -->
                        <p class="text-slate-600 text-xs sm:text-sm mb-6 leading-relaxed max-w-md mx-auto md:mx-0">
                            @yield('message')
                        </p>

                        <!-- Call to Actions -->
                        <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-start">
                            <a href="{{ Auth::check() ? route('home') : '/' }}" class="btn-primary w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl text-[#071022] font-bold text-sm sm:text-base hover:shadow-lg transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-5 sm:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                Fly Back Home
                            </a>
                            
                            <button onclick="history.back()" class="btn-outline w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl text-[#071022] font-semibold text-sm sm:text-base hover:bg-party-1/5 cursor-pointer transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-5 sm:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                Previous Stop
                            </button>
                        </div>

                        <!-- Quick Navigation Links inside the Details block -->
                        <div class="mt-8 pt-6 border-t border-slate-100/80 flex flex-wrap justify-center md:justify-start gap-x-5 gap-y-2 text-xs sm:text-sm text-slate-500 font-medium">
                            @guest
                                <a href="{{ route('login') }}" class="hover:text-party-1 transition-colors">Sign In</a>
                                <a href="{{ route('pricing') }}" class="hover:text-party-1 transition-colors">Pricing</a>
                            @endguest
                            @auth
                                <a href="{{ route('trips.index') }}" class="hover:text-party-1 transition-colors">My Trips</a>
                                <a href="{{ route('ai.planner') }}" class="hover:text-party-1 transition-colors">AI Planner</a>
                            @endauth
                            <a href="https://vaibhav5860.vercel.app" target="_blank" rel="noopener" class="hover:text-party-1 transition-colors flex items-center gap-1">
                                Contact Support
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <!-- Simple Footer -->
    <footer class="w-full text-center py-4 text-xs text-slate-400 font-medium z-10 shrink-0">
        &copy; {{ date('Y') }} TripTogether. All rights reserved.
    </footer>

    <!-- Background decoration matching default app design patterns -->
    <div class="fixed top-0 right-0 w-[600px] sm:w-[800px] height-[600px] sm:height-[800px] bg-gradient-to-br from-[rgba(225,207,255,0.15)] to-[rgba(253,147,198,0.15)] rounded-full blur-[120px] pointer-events-none -z-10"></div>
    <div class="fixed bottom-0 left-0 w-[400px] sm:w-[600px] height-[400px] sm:height-[600px] bg-gradient-to-tr from-[rgba(252,217,136,0.15)] to-[rgba(255,109,182,0.15)] rounded-full blur-[100px] pointer-events-none -z-10"></div>
</body>
</html>
