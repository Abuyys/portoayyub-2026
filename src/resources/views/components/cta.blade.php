@props(['profile'])

<section id="cta" class="py-20 sm:py-28 bg-white relative overflow-hidden">
    <!-- Glow effect behind content -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 -z-10 w-[600px] h-[300px] rounded-full bg-cyan-500/10 blur-[100px]"></div>

    <div class="container mx-auto px-6">
        <div class="relative bg-gradient-to-tr from-slate-900 via-slate-950 to-slate-900 text-white rounded-[2.5rem] p-10 sm:p-16 text-center border border-slate-800 shadow-2xl overflow-hidden group">
            
            <!-- Diagonal stripes background pattern -->
            <div class="absolute inset-0 opacity-5 -z-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:16px_16px]"></div>

            <div class="relative z-10 max-w-3xl mx-auto space-y-6">
                <span class="inline-block text-xs font-semibold px-3 py-1.5 rounded-full bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 uppercase tracking-widest">
                    Get In Touch
                </span>
                
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                    Let's build something <br class="sm:hidden" />
                    <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">
                        systematic and impactful.
                    </span>
                </h2>

                <p class="text-sm sm:text-base text-slate-400 leading-relaxed max-w-xl mx-auto">
                    I'm always open to discussing software projects, academic collaborations, internship opportunities, or just having a chat about computer science and systems development.
                </p>

                <div class="pt-6">
                    <a 
                        href="mailto:{{ $profile->email }}" 
                        class="px-8 py-3.5 bg-white text-slate-950 font-bold text-sm sm:text-base rounded-xl inline-flex items-center gap-2 shadow-lg hover:shadow-cyan-500/20 hover:scale-[1.03] transition-all duration-300"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-slate-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Send an Email</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>