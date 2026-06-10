<header class="sticky top-0 z-50 backdrop-blur-md bg-white/70 border-b border-slate-100/80 transition-all duration-300">
    <div class="container mx-auto px-6 h-16 flex items-center justify-between">
        <a href="#" class="flex items-center gap-2">
            <span class="font-extrabold text-2xl tracking-tight bg-gradient-to-r from-cyan-600 to-blue-600 bg-clip-text text-transparent">
                Ayyub.
            </span>
        </a>

        <nav class="hidden md:flex items-center gap-8">
            <a href="#about" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">About</a>
            <a href="#education" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Education</a>
            <a href="#projects" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Projects</a>
            <a href="#experience" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Experience</a>
            <a href="#skills" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Skills</a>
            <a href="#certifications" class="text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">Certifications</a>
        </nav>

        <div class="flex items-center gap-4">
            @auth
                <a href="{{ route('filament.admin.pages.dashboard') }}" class="text-xs font-semibold px-4 py-2 rounded-full text-white bg-slate-900 hover:bg-slate-800 transition-all shadow-sm">
                    Dashboard
                </a>
            @else
                <a href="/admin/login" class="text-xs font-semibold px-4 py-2 rounded-full text-slate-700 bg-slate-100 hover:bg-slate-200 transition-all">
                    Admin Access
                </a>
            @endauth
        </div>
    </div>
</header>