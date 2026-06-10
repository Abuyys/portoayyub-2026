@props(['experiences'])

<section id="experience" class="py-20 sm:py-28 bg-slate-50/50">
    <div class="container mx-auto px-6">
        
        <div class="flex flex-col items-center text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Work & Leadership Experience
            </h2>
            <div class="w-12 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded mt-4"></div>
        </div>

        <div class="max-w-3xl mx-auto relative border-l-2 border-slate-200/80 ml-4 sm:ml-6 pl-8 sm:pl-10 space-y-12">
            @foreach($experiences as $experience)
                <!-- Timeline item -->
                <div class="relative group">
                    
                    <!-- Timeline point icon/node -->
                    <span class="absolute -left-[41px] sm:-left-[49px] top-1.5 flex h-6 w-6 sm:h-8 sm:w-8 items-center justify-center rounded-full border-2 bg-white transition-colors duration-300 shadow-sm
                        {{ $experience->is_current || !$experience->end_date ? 'border-cyan-500 text-cyan-600' : 'border-slate-300 text-slate-400' }}">
                        @if($experience->is_current || !$experience->end_date)
                            <span class="w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-cyan-500 animate-pulse"></span>
                        @else
                            <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-slate-400"></span>
                        @endif
                    </span>

                    <div class="space-y-3 bg-white p-6 rounded-2xl border border-slate-100/80 shadow-sm group-hover:shadow-md transition-shadow duration-300">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div>
                                <!-- Job title -->
                                <h3 class="font-extrabold text-slate-900 text-lg sm:text-xl">
                                    {{ $experience->title }}
                                </h3>
                                
                                <!-- Company name -->
                                <p class="text-sm font-semibold text-cyan-600">
                                    {{ $experience->company }}
                                </p>
                            </div>

                            <!-- Duration badge -->
                            <div class="inline-flex items-center text-xs font-bold px-2.5 py-1 rounded-md bg-slate-50 text-slate-500 border border-slate-100 self-start sm:self-center">
                                {{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }} 
                                - 
                                @if($experience->is_current || !$experience->end_date)
                                    Present
                                @else
                                    {{ \Carbon\Carbon::parse($experience->end_date)->format('M Y') }}
                                @endif
                            </div>
                        </div>

                        <!-- Description text -->
                        <p class="text-slate-500 text-sm sm:text-base leading-relaxed">
                            {{ $experience->description }}
                        </p>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>