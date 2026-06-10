@props(['skills'])

@php
    $categories = [
        'language' => [
            'label' => 'Programming Languages', 
            'colorClass' => 'bg-indigo-50 border-indigo-100 text-indigo-800', 
            'badgeClass' => 'bg-indigo-100/80 text-indigo-800 hover:bg-indigo-200/50',
            'icon' => '<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>'
        ],
        'framework' => [
            'label' => 'Frameworks & Libraries', 
            'colorClass' => 'bg-cyan-50 border-cyan-100 text-cyan-800',
            'badgeClass' => 'bg-cyan-100/80 text-cyan-800 hover:bg-cyan-200/50',
            'icon' => '<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>'
        ],
        'database' => [
            'label' => 'Databases', 
            'colorClass' => 'bg-emerald-50 border-emerald-100 text-emerald-800',
            'badgeClass' => 'bg-emerald-100/80 text-emerald-800 hover:bg-emerald-200/50',
            'icon' => '<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.58 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.58 4 8 4s8-1.79 8-4M4 7c0-2.21 3.58-4 8-4s8 1.79 8 4m0 5c0 2.21-3.58 4-8 4s-8-1.79-8-4"/></svg>'
        ],
        'design' => [
            'label' => 'Design & Creative', 
            'colorClass' => 'bg-rose-50 border-rose-100 text-rose-800',
            'badgeClass' => 'bg-rose-100/80 text-rose-800 hover:bg-rose-200/50',
            'icon' => '<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>'
        ],
        'other' => [
            'label' => 'Other Technologies', 
            'colorClass' => 'bg-slate-50 border-slate-100 text-slate-800',
            'badgeClass' => 'bg-slate-100/85 text-slate-800 hover:bg-slate-200/50',
            'icon' => '<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 113.536 0V21h2v-2.757a5 5 0 013.536 0z"/></svg>'
        ]
    ];
@endphp

<section id="skills" class="py-20 sm:py-28 bg-white">
    <div class="container mx-auto px-6">
        
        <div class="flex flex-col items-center text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Technical Skills
            </h2>
            <div class="w-12 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded mt-4"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            @foreach($categories as $key => $cat)
                @php
                    $filteredSkills = $skills->where('category', $key);
                @endphp

                @if($filteredSkills->count() > 0)
                    <div class="flex flex-col bg-white border border-slate-100 rounded-3xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-50">
                            <span class="flex-shrink-0 w-9 h-9 rounded-lg flex items-center justify-center {!! explode(' ', $cat['colorClass'])[0] !!} {!! explode(' ', $cat['colorClass'])[2] !!}">
                                {!! $cat['icon'] !!}
                            </span>
                            <h3 class="font-extrabold text-slate-850 text-base sm:text-lg">
                                {{ $cat['label'] }}
                            </h3>
                        </div>

                        <div class="flex flex-wrap gap-2.5">
                            @foreach($filteredSkills as $skill)
                                <span class="text-xs sm:text-sm font-semibold px-4 py-2 rounded-xl border border-transparent transition-all duration-300 cursor-default {!! $cat['badgeClass'] !!}">
                                    {{ $skill->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
</section>