@props(['profile'])

<section id="about" class="py-20 sm:py-28 bg-white">
    <div class="container mx-auto px-6">
        
        <div class="flex flex-col items-center text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                About Me
            </h2>
            <div class="w-12 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded mt-4"></div>
        </div>

        <div class="grid md:grid-cols-12 gap-10 md:gap-16 items-start">
            
            <!-- Bio text -->
            <div class="md:col-span-7 space-y-6">
                <h3 class="text-xl sm:text-2xl font-bold text-slate-800">
                    My Journey in Technology
                </h3>
                <div class="text-slate-600 leading-relaxed text-base sm:text-lg space-y-4">
                    {!! nl2br(e($profile->about)) !!}
                </div>
            </div>

            <!-- Quick stats card -->
            <div class="md:col-span-5 bg-slate-50 border border-slate-100 rounded-3xl p-6 sm:p-8 shadow-sm">
                <h3 class="text-lg font-bold text-slate-950 mb-6 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Quick Facts</span>
                </h3>

                <div class="space-y-6">
                    <!-- University -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Institution</span>
                            <span class="font-bold text-slate-800 text-sm sm:text-base">{{ $profile->university }}</span>
                        </div>
                    </div>

                    <!-- Major -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">Major</span>
                            <span class="font-bold text-slate-800 text-sm sm:text-base">{{ $profile->major }}</span>
                        </div>
                    </div>

                    <!-- GPA -->
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">GPA Status</span>
                            <span class="font-bold text-slate-800 text-sm sm:text-base">
                                {{ $profile->gpa }} <span class="text-xs font-normal text-slate-500">/ 4.00</span>
                            </span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>