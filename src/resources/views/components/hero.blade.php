@props(['profile'])

<section class="relative py-20 lg:py-32 overflow-hidden bg-gradient-to-b from-slate-50 via-white to-transparent">
    <!-- Glowing background accents -->
    <div class="absolute top-0 right-0 -z-10 w-96 h-96 rounded-full bg-cyan-100/40 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -z-10 w-96 h-96 rounded-full bg-blue-100/30 blur-3xl"></div>

    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Hero Text Content -->
            <div class="lg:col-span-7 text-center lg:text-left">
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold bg-cyan-50 text-cyan-700 border border-cyan-100/50">
                    <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 animate-pulse"></span>
                    {{ $profile->title }}
                </span>

                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mt-6 tracking-tight text-slate-900 leading-[1.1]">
                    Hi, I'm <br class="sm:hidden" />
                    <span class="bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent">
                        {{ $profile->name }}
                    </span>
                </h1>

                <p class="mt-6 text-base sm:text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    {{ $profile->short_description }}
                </p>

                <div class="mt-10 flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <a href="#projects" class="group relative px-6 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-medium text-sm transition-all duration-300 shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                        <span>View My Work</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    
                    <a href="mailto:{{ $profile->email }}" class="px-6 py-3 rounded-xl border border-slate-200 hover:border-slate-300 text-slate-700 hover:text-slate-900 bg-white hover:bg-slate-50 font-medium text-sm transition-all duration-300 flex items-center justify-center gap-2">
                        <span>Contact Me</span>
                    </a>
                </div>
            </div>

            <!-- Hero Image/Visual -->
            <div class="lg:col-span-5 relative flex justify-center">
                <div class="absolute inset-0 bg-gradient-to-tr from-cyan-200 to-blue-200 rounded-3xl blur-2xl opacity-30 -z-10 scale-95"></div>
                
                @if($profile->photo)
                    <div class="relative p-2 bg-white rounded-3xl border border-slate-100 shadow-xl overflow-hidden max-w-sm sm:max-w-md">
                        <img src="{{ Storage::url($profile->photo) }}" alt="{{ $profile->name }}" class="rounded-2xl object-cover aspect-square w-full">
                    </div>
                @else
                    <!-- High-quality inline SVG illustration representing code/development -->
                    <div class="w-full max-w-[400px] aspect-square flex items-center justify-center bg-white rounded-3xl border border-slate-100/80 shadow-2xl p-6 relative group hover:scale-[1.02] transition-transform duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" class="w-full h-full">
                            <!-- Background Grid Pattern -->
                            <defs>
                                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#f1f5f9" stroke-width="2"/>
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" fill="url(#grid)" rx="24" />

                            <!-- Glowing circles -->
                            <circle cx="250" cy="250" r="140" fill="none" stroke="url(#circle-grad)" stroke-width="4" stroke-dasharray="10 15" class="animate-[spin_40s_linear_infinite]" />
                            <circle cx="250" cy="250" r="110" fill="none" stroke="url(#circle-grad-reverse)" stroke-width="2" stroke-dasharray="5 5" class="animate-[spin_20s_linear_infinite]" />

                            <defs>
                                <linearGradient id="circle-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#06b6d4" />
                                    <stop offset="100%" stop-color="#3b82f6" />
                                </linearGradient>
                                <linearGradient id="circle-grad-reverse" x1="100%" y1="100%" x2="0%" y2="0%">
                                    <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.3" />
                                    <stop offset="100%" stop-color="#06b6d4" stop-opacity="0.3" />
                                </linearGradient>
                                <linearGradient id="laptop-grad" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#0f172a" />
                                    <stop offset="100%" stop-color="#1e293b" />
                                </linearGradient>
                            </defs>

                            <!-- Laptop Screen -->
                            <rect x="110" y="160" width="280" height="170" rx="12" fill="url(#laptop-grad)" filter="drop-shadow(0 20px 25px rgba(0,0,0,0.15))" />
                            <rect x="120" y="170" width="260" height="150" rx="6" fill="#020617" />
                            
                            <!-- Laptop Keyboard Base -->
                            <path d="M 80 330 L 420 330 L 440 348 C 440 354, 430 356, 420 356 L 80 356 C 70 356, 60 354, 60 348 Z" fill="#475569" />
                            <rect x="210" y="333" width="80" height="4" rx="2" fill="#334155" />
                            <rect x="225" y="340" width="50" height="12" rx="3" fill="#1e293b" />

                            <!-- Floating Code & Tech Symbols -->
                            <!-- Tag icon -->
                            <g fill="none" stroke="#06b6d4" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" transform="translate(140, 200) scale(1.2)">
                                <path d="M8 17l5-5-5-5" />
                                <path d="M13 12h8" />
                            </g>

                            <!-- Logic/DB diagram -->
                            <g fill="none" stroke="#3b82f6" stroke-width="4" stroke-linecap="round" transform="translate(280, 200) scale(1.1)">
                                <rect x="2" y="2" width="40" height="16" rx="4" fill="#1e1b4b" stroke="#3b82f6" />
                                <rect x="12" y="32" width="40" height="16" rx="4" fill="#1e1b4b" stroke="#3b82f6" />
                                <path d="M22 18 L22 25 L32 25 L32 32" />
                            </g>

                            <!-- Decorative particles -->
                            <circle cx="200" cy="120" r="10" fill="#22c55e" opacity="0.8" />
                            <circle cx="320" cy="110" r="6" fill="#eab308" opacity="0.8" />
                            <circle cx="380" cy="220" r="8" fill="#ec4899" opacity="0.8" />
                            <circle cx="100" cy="250" r="12" fill="#6366f1" opacity="0.7" />
                            
                            <!-- Curly bracket decoration -->
                            <text x="350" y="140" fill="#a78bfa" font-size="36" font-family="monospace" font-weight="bold" opacity="0.6">{ }</text>
                            <text x="90" y="150" fill="#22d3ee" font-size="30" font-family="monospace" font-weight="bold" opacity="0.6">&lt;/&gt;</text>
                        </svg>
                    </div>
                @endif
            </div>

        </div>
    </div>
</section>