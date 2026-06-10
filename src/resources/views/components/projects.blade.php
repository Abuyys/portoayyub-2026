@props(['projects'])

<section id="projects" class="py-20 sm:py-28 bg-white">
    <div class="container mx-auto px-6">
        
        <div class="flex flex-col items-center text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Featured Projects
            </h2>
            <div class="w-12 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded mt-4"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="group flex flex-col bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    
                    <!-- Image container / SVG Placeholder -->
                    <div class="w-full h-52 overflow-hidden bg-slate-50 relative border-b border-slate-100 flex items-center justify-center">
                        @if($project->image)
                            <img 
                                src="{{ Storage::url($project->image) }}" 
                                alt="{{ $project->title }}" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            >
                        @else
                            <!-- Custom matching vector illustrations instead of broken images -->
                            @if(Str::contains(Str::lower($project->title), 'library'))
                                <!-- Library Management illustration -->
                                <svg class="w-full h-full" viewBox="0 0 400 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="100%" height="100%" fill="url(#proj1-grad)"/>
                                    <defs>
                                        <linearGradient id="proj1-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#4f46e5" />
                                            <stop offset="100%" stop-color="#312e81" />
                                        </linearGradient>
                                    </defs>
                                    <circle cx="200" cy="110" r="60" fill="white" fill-opacity="0.1" />
                                    <!-- Books stack -->
                                    <rect x="170" y="70" width="60" height="80" rx="4" transform="rotate(-10 200 110)" fill="white" fill-opacity="0.9" />
                                    <rect x="185" y="75" width="40" height="70" rx="2" transform="rotate(5 200 110)" fill="#a5b4fc" />
                                    <path d="M160 160 H240" stroke="white" stroke-width="4" stroke-linecap="round"/>
                                </svg>
                            @elseif(Str::contains(Str::lower($project->title), 'portfolio'))
                                <!-- Portfolio illustration -->
                                <svg class="w-full h-full" viewBox="0 0 400 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="100%" height="100%" fill="url(#proj2-grad)"/>
                                    <defs>
                                        <linearGradient id="proj2-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#0891b2" />
                                            <stop offset="100%" stop-color="#164e63" />
                                        </linearGradient>
                                    </defs>
                                    <circle cx="200" cy="110" r="60" fill="white" fill-opacity="0.1" />
                                    <!-- Screen outline -->
                                    <rect x="140" y="65" width="120" height="80" rx="6" fill="white" fill-opacity="0.9" />
                                    <rect x="148" y="73" width="104" height="52" rx="3" fill="#155e75" />
                                    <rect x="190" y="145" width="20" height="15" fill="white" fill-opacity="0.8" />
                                    <rect x="175" y="157" width="50" height="5" rx="2.5" fill="white" fill-opacity="0.9" />
                                </svg>
                            @elseif(Str::contains(Str::lower($project->title), 'studymate'))
                                <!-- StudyMate illustration -->
                                <svg class="w-full h-full" viewBox="0 0 400 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="100%" height="100%" fill="url(#proj3-grad)"/>
                                    <defs>
                                        <linearGradient id="proj3-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#db2777" />
                                            <stop offset="100%" stop-color="#701a75" />
                                        </linearGradient>
                                    </defs>
                                    <circle cx="200" cy="110" r="60" fill="white" fill-opacity="0.1" />
                                    <!-- Calendar/Users vector -->
                                    <rect x="150" y="65" width="100" height="80" rx="8" fill="white" fill-opacity="0.9" />
                                    <circle cx="180" cy="100" r="15" fill="#fbcfe8" />
                                    <circle cx="220" cy="100" r="15" fill="#f472b6" />
                                    <rect x="165" y="125" width="70" height="8" rx="4" fill="#db2777" />
                                    <rect x="175" y="55" width="8" height="15" rx="4" fill="#701a75" />
                                    <rect x="217" y="55" width="8" height="15" rx="4" fill="#701a75" />
                                </svg>
                            @else
                                <!-- Generic Code illustration -->
                                <svg class="w-full h-full" viewBox="0 0 400 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="100%" height="100%" fill="url(#projdef-grad)"/>
                                    <defs>
                                        <linearGradient id="projdef-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#475569" />
                                            <stop offset="100%" stop-color="#1e293b" />
                                        </linearGradient>
                                    </defs>
                                    <circle cx="200" cy="110" r="60" fill="white" fill-opacity="0.05" />
                                    <path d="M170 95 L145 110 L170 125 M230 95 L255 110 L230 125" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M210 90 L190 130" stroke="#06b6d4" stroke-width="6" stroke-linecap="round"/>
                                </svg>
                            @endif
                        @endif
                    </div>

                    <!-- Project Content -->
                    <div class="p-6 flex flex-col flex-grow">
                        <!-- Project Title -->
                        <h3 class="font-bold text-slate-900 text-lg sm:text-xl group-hover:text-cyan-600 transition-colors">
                            {{ $project->title }}
                        </h3>

                        <!-- Project Description -->
                        <p class="mt-3 text-sm text-slate-500 leading-relaxed flex-grow">
                            {{ $project->description }}
                        </p>

                        <!-- Technologies Tags -->
                        @if($project->technologies->count() > 0)
                            <div class="flex flex-wrap gap-2 mt-5">
                                @foreach($project->technologies as $tech)
                                    <span class="inline-block text-[11px] font-semibold px-2 py-0.5 rounded-md bg-slate-50 border border-slate-100 text-slate-600">
                                        {{ $tech->name }}
                                    </span>
                                @endforeach
                            </div>
                        @endif

                        <!-- Action Links -->
                        <div class="flex items-center gap-4 mt-6 pt-4 border-t border-slate-50 text-slate-700 font-semibold text-xs sm:text-sm">
                            @if($project->github_url && $project->github_url !== '#')
                                <a href="{{ $project->github_url }}" class="flex items-center gap-1.5 hover:text-slate-950 transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Code</span>
                                </a>
                            @endif

                            @if($project->demo_url && $project->demo_url !== '#')
                                <a href="{{ $project->demo_url }}" class="flex items-center gap-1.5 hover:text-cyan-600 transition-colors ml-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    <span>Live Preview</span>
                                </a>
                            @endif
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>