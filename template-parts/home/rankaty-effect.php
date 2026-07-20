<!-- The Rankaty Effect Graph -->
    <section id="rankaty-effect" class="py-16 md:py-32 container mx-auto px-6 relative z-10">
        <div class="text-center mb-16 gsap-reveal">
            <span class="text-blue-500 text-sm font-bold uppercase tracking-widest">تأثير Rankaty</span>
            <h2 class="text-4xl md:text-5xl font-bold mt-4 mb-4 text-white">من الركود إلى النمو المتسارع</h2>
            <p class="text-slate-400">إحصائيات لتحليل أداء المواقع والمتاجر الإلكترونية قبل وبعد تطبيق إستراتيجيتنا.</p>
        </div>

        <div id="graph-container" class="glass-card gsap-reveal p-8 md:p-12 relative overflow-visible mt-8 md:mt-12">
            <div class="w-full h-64 md:h-96 relative border-l-2 border-b-2 border-slate-700/50 mt-10" dir="ltr">
                <div class="absolute -left-12 top-0 h-full flex flex-col justify-between text-slate-500 text-[10px] md:text-xs font-bold font-sans pb-4">
                    <span>100K</span>
                    <span>75K</span>
                    <span>50K</span>
                    <span>25K</span>
                    <span>0</span>
                </div>

                <div class="absolute -bottom-8 left-0 w-full flex justify-between text-slate-500 text-[10px] md:text-xs font-bold uppercase font-sans px-2">
                    <span>Jan</span>
                    <span>Feb</span>
                    <span>Mar</span>
                    <span class="text-blue-500">Rankaty</span>
                    <span>May</span>
                    <span>Jun</span>
                </div>

                <svg class="w-full h-full overflow-visible" preserveAspectRatio="none" viewBox="0 0 1000 400">
                    <path d="M0,80 L1000,80 M0,160 L1000,160 M0,240 L1000,240 M0,320 L1000,320" stroke="rgba(255,255,255,0.03)" stroke-width="1" />
                    <line class="graph-milestone opacity-0" x1="400" y1="0" x2="400" y2="400" stroke="rgba(59, 130, 246, 0.3)" stroke-width="2" stroke-dasharray="8,8" />
                    <path class="graph-area opacity-0" d="M400,320 L450,300 L500,310 L600,200 L700,220 L800,100 L900,120 L1000,40 L1000,400 L400,400 Z" fill="url(#blue-gradient)" />
                    <defs>
                        <linearGradient id="blue-gradient" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="rgba(59, 130, 246, 0.4)" />
                            <stop offset="100%" stop-color="rgba(59, 130, 246, 0)" />
                        </linearGradient>
                        <filter id="glow">
                            <feGaussianBlur stdDeviation="4" result="coloredBlur" />
                            <feMerge>
                                <feMergeNode in="coloredBlur" />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>
                    </defs>
                    <path id="graph-before" class="stroke-slate-500 drop-shadow-md" d="M0,330 L50,340 L100,320 L150,335 L200,325 L250,340 L300,310 L350,330 L400,320" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    <path id="graph-after" class="stroke-blue-500" filter="url(#glow)" d="M400,320 L450,300 L500,310 L600,200 L700,220 L800,100 L900,120 L1000,40" fill="none" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                    <circle class="graph-dot opacity-0 fill-slate-900 stroke-blue-500" stroke-width="4" cx="400" cy="320" r="6" />
                    <circle class="graph-dot opacity-0 fill-blue-500" filter="url(#glow)" cx="1000" cy="40" r="8" />
                    <circle class="graph-dot opacity-0 fill-white" cx="1000" cy="40" r="3" />
                </svg>

                <div class="graph-annotation absolute left-[40%] top-[70%] transform -translate-x-1/2 -translate-y-full opacity-0 text-center pointer-events-none z-10">
                    <div class="text-blue-400 text-[10px] md:text-xs font-bold bg-slate-900 border border-blue-500/30 px-3 py-1.5 rounded shadow-[0_0_15px_rgba(59,130,246,0.3)] mb-2 whitespace-nowrap">
                        بدء استراتيجية Rankaty
                    </div>
                    <div class="w-px h-6 bg-blue-500/50 mx-auto"></div>
                </div>

                <div class="graph-tooltip-2 absolute left-[80%] top-[25%] transform -translate-x-1/2 -translate-y-full opacity-0 text-center pointer-events-none z-10">
                    <div class="text-white text-[10px] md:text-xs font-bold bg-blue-600 border border-blue-400 px-3 py-1.5 rounded shadow-[0_0_20px_rgba(59,130,246,0.5)] mb-2">
                        +310% زيادة
                    </div>
                </div>
            </div>
        </div>
    </section>

    