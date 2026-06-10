@props(['certifications'])

<section id="certifications" class="py-20 sm:py-28 bg-slate-50/50">
    <div class="container mx-auto px-6">
        
        <div class="flex flex-col items-center text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Certifications
            </h2>
            <div class="w-12 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded mt-4"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            @foreach($certifications as $certification)
                <div class="bg-white rounded-3xl border border-slate-100 p-6 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between gap-4">
                    
                    <div class="flex items-start justify-between gap-4">
                        <div class="space-y-1">
                            <h3 class="font-extrabold text-slate-900 text-lg group-hover:text-cyan-600 transition-colors">
                                {{ $certification->name }}
                            </h3>
                            
                            <p class="text-sm font-semibold text-slate-500">
                                {{ $certification->issuer }}
                            </p>

                            @if($certification->issued_at)
                                <p class="text-xs text-slate-400">
                                    Issued: {{ \Carbon\Carbon::parse($certification->issued_at)->format('M Y') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex-shrink-0">
                            @if($certification->status === 'completed')
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-50 text-emerald-700 border border-emerald-100">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                    Completed
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-50 text-amber-700 border border-amber-100">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                                    In Progress
                                </span>
                            @endif
                        </div>
                    </div>

                    @if($certification->credential_url && $certification->credential_url !== '#')
                        <div class="pt-3 border-t border-slate-50">
                            <a href="{{ $certification->credential_url }}" target="_blank" class="inline-flex items-center gap-1.5 text-xs font-bold text-cyan-600 hover:text-cyan-700 transition-colors">
                                <span>Verify Credential</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </div>
                    @endif

                </div>
            @endforeach
        </div>

    </div>
</section>