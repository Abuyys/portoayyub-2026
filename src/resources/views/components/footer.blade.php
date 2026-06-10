@props(['profile'])

<footer class="bg-slate-950 text-slate-400 py-12 border-t border-slate-900/60 relative">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            
            <div class="text-center md:text-left space-y-1">
                <h3 class="font-extrabold text-white text-lg tracking-tight">
                    {{ $profile->name }}
                </h3>
                <p class="text-xs text-slate-500">
                    {{ $profile->title }} &bull; MNC University
                </p>
            </div>

            <!-- Social icons & Admin link -->
            <div class="flex items-center gap-6">
                @if($profile->linkedin && $profile->linkedin !== '#')
                    <a href="{{ $profile->linkedin }}" target="_blank" class="hover:text-white transition-colors flex items-center gap-1.5 text-sm font-semibold">
                        <span>LinkedIn</span>
                    </a>
                @endif

                @if($profile->github && $profile->github !== '#')
                    <a href="{{ $profile->github }}" target="_blank" class="hover:text-white transition-colors flex items-center gap-1.5 text-sm font-semibold">
                        <span>GitHub</span>
                    </a>
                @endif
                
                <a href="/admin/login" class="text-slate-700 hover:text-slate-500 transition-colors" title="Admin Panel">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </a>
            </div>

        </div>

        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mt-8 pt-8 border-t border-slate-900 text-xxs sm:text-xs text-slate-600">
            <p>&copy; {{ date('Y') }} {{ $profile->name }}. All rights reserved.</p>
            <p class="flex items-center gap-1">
                <span>Designed & Built systematically</span>
                <span class="text-red-500 animate-pulse">&hearts;</span>
            </p>
        </div>
    </div>
</footer>