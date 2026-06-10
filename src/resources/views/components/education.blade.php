@props(['educations'])

<section id="education" class="py-20 sm:py-28 bg-slate-50/50">
    <div class="container mx-auto px-6">
        
        <div class="flex flex-col items-center text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Education
            </h2>
            <div class="w-12 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded mt-4"></div>
        </div>

        <div class="max-w-4xl mx-auto space-y-8">
            @foreach($educations as $education)
                <div class="bg-white rounded-3xl border border-slate-100 p-6 sm:p-8 shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        
                        <div class="space-y-2">
                            <span class="inline-block text-xs font-semibold px-2.5 py-1 rounded-md bg-blue-50 text-blue-700 border border-blue-100">
                                {{ $education->degree }}
                            </span>
                            
                            <h3 class="font-extrabold text-slate-900 text-xl sm:text-2xl">
                                {{ $education->institution }}
                            </h3>

                            <p class="text-slate-600 text-sm sm:text-base font-medium">
                                {{ $education->major }}
                            </p>
                        </div>

                        <div class="flex flex-row sm:flex-col items-start sm:items-end justify-between sm:justify-center gap-2 pt-4 sm:pt-0 border-t sm:border-t-0 border-slate-100">
                            <!-- Duration Year -->
                            <div class="flex items-center gap-1.5 text-xs sm:text-sm font-semibold text-slate-500 bg-slate-50 sm:bg-transparent px-2.5 py-1 sm:p-0 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>
                                    {{ \Carbon\Carbon::parse($education->start_date)->format('Y') }} 
                                    - 
                                    @if($education->is_current || !$education->end_date)
                                        Present
                                    @else
                                        {{ \Carbon\Carbon::parse($education->end_date)->format('Y') }}
                                    @endif
                                </span>
                            </div>

                            @if($education->gpa)
                                <div class="flex items-center gap-1 text-emerald-700 bg-emerald-50 border border-emerald-100 px-3 py-1 rounded-full text-xs font-bold">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                    <span>GPA: {{ $education->gpa }}</span>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>