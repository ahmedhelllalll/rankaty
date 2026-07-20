<!-- Problem + Solution 2-Card Layout -->
    <section id="problem-solution" class="py-24 md:py-32 w-full relative overflow-hidden z-10 flex flex-col items-center justify-center px-6">
        <div class="absolute top-1/4 right-10 w-[300px] h-[300px] bg-red-600/10 rounded-full blur-[120px] pointer-events-none -z-10"></div>
        <div class="absolute bottom-1/4 left-10 w-[300px] h-[300px] bg-blue-600/10 rounded-full blur-[120px] pointer-events-none -z-10"></div>

        <div id="problem-solution-heading" class="text-center mb-16 gsap-reveal">
            <span class="text-slate-500 text-sm font-bold uppercase tracking-widest mb-3 block">التحول الجذري</span>
            <h2 class="text-3xl md:text-5xl font-bold text-white">من المشكلة إلى النمو المتسارع</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 max-w-6xl w-full relative items-stretch">
            <!-- Problem Card -->
            <div id="ps-card-problem" class="glass-card gsap-reveal p-8 md:p-12 rounded-3xl relative overflow-hidden flex flex-col justify-between border-t-4 border-red-500/40 shadow-[0_20px_50px_rgba(239,68,68,0.02)] hover:border-red-500/60 transition-all duration-500">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(239,68,68,0.05),transparent_60%)] pointer-events-none"></div>
                <div>
                    <div class="flex justify-between items-start mb-8 relative z-10">
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold bg-red-950/40 text-red-400 border border-red-500/20 uppercase tracking-wider">قبل Rankaty</span>
                        <div class="w-12 h-12 rounded-2xl bg-red-950/30 border border-red-500/20 flex items-center justify-center text-red-500 text-xl font-bold pulse-red">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                        </div>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold mb-6 text-white leading-tight relative z-10">قلة عملاء ونسبة ظهور غير مُرضية</h3>
                    <p class="text-slate-400 text-sm md:text-base leading-relaxed mb-8 relative z-10">من أكبر أسباب تعاقد العملاء مع رانكاتي هو عدم الرضا عن نسبة الزيارات الفعلية والظهور بمحركات البحث.</p>
                    <ul class="space-y-6 text-slate-300 text-sm md:text-base leading-relaxed relative z-10">
                        <li class="flex gap-4 items-start"><div class="w-6 h-6 rounded-full bg-red-500/10 flex items-center justify-center text-red-400 shrink-0 border border-red-500/20 text-xs font-bold mt-1">✗</div><span class="flex-1 font-medium">إعتماد على الإعلانات المدفوعة بشكل كامل.</span></li>
                        <li class="flex gap-4 items-start"><div class="w-6 h-6 rounded-full bg-red-500/10 flex items-center justify-center text-red-400 shrink-0 border border-red-500/20 text-xs font-bold mt-1">✗</div><span class="flex-1 font-medium">عدم الظهور بالنتائج الاولى في Google او صعود تدريجي للصفحات الأولى.</span></li>
                        <li class="flex gap-4 items-start"><div class="w-6 h-6 rounded-full bg-red-500/10 flex items-center justify-center text-red-400 shrink-0 border border-red-500/20 text-xs font-bold mt-1">✗</div><span class="flex-1 font-medium">المشاكل التقنية وبطئ تحميل الصفحات.</span></li>
                    </ul>
                </div>
                <div class="mt-12 pt-6 border-t border-slate-900/50 flex items-center justify-between text-slate-500 text-xs relative z-10">
                    <span>النتيجة: تراجع مستمر وتكاليف متزايدة</span>
                    <span class="text-red-500 font-bold uppercase">خسارة صامتة</span>
                </div>
            </div>

            <!-- Solution Card -->
            <div id="ps-card-solution" class="glass-card gsap-reveal p-8 md:p-12 rounded-3xl relative overflow-hidden flex flex-col justify-between border-t-4 border-blue-500/40 shadow-[0_20px_50px_rgba(59,130,246,0.05)] hover:border-blue-500/60 transition-all duration-500 lg:scale-[1.03]">
                <div class="absolute -top-1 -right-1 bg-gradient-to-l from-blue-600 to-cyan-500 text-white text-[10px] md:text-xs font-bold px-4 py-1.5 rounded-bl-2xl shadow-[0_4px_20px_rgba(59,130,246,0.3)] z-10">الخيار الأذكى والأكثر استدامة</div>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(59,130,246,0.08),transparent_60%)] pointer-events-none"></div>
                <div>
                    <div class="flex justify-between items-start mb-8 relative z-10">
                        <span class="px-4 py-1.5 rounded-full text-xs font-bold bg-blue-950/40 text-blue-400 border border-blue-500/20 uppercase tracking-wider">بعد Rankaty</span>
                        <div class="w-12 h-12 rounded-2xl bg-blue-950/30 border border-blue-500/20 flex items-center justify-center text-blue-400 text-xl font-bold pulse-blue">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold mb-6 text-white leading-tight relative z-10">تحسن نتائج الزيارات الشهرية للمتاجر والمواقع وظهور كلمات قوية بالنتائج الاولى.</h3>
                    <p class="text-slate-400 text-sm md:text-base leading-relaxed mb-8 relative z-10">تحليل مبدئي وفحص شامل لأقسام المواقع وتحديد المشاكل ذات الاهمية وحلها.</p>
                    <ul class="space-y-6 text-slate-300 text-sm md:text-base leading-relaxed relative z-10">
                        <li class="flex gap-4 items-start"><div class="w-6 h-6 rounded-full bg-blue-500/10 flex items-center justify-center text-blue-400 shrink-0 border border-blue-500/20 text-xs font-bold mt-1">✓</div><span class="flex-1 font-medium text-white">إستهداف الكلمات الرئيسية للمواقع والمتاجر.</span></li>
                        <li class="flex gap-4 items-start"><div class="w-6 h-6 rounded-full bg-blue-500/10 flex items-center justify-center text-blue-400 shrink-0 border border-blue-500/20 text-xs font-bold mt-1">✓</div><span class="flex-1 font-medium text-white">حل المشاكل الحالية للمواقع.</span></li>
                        <li class="flex gap-4 items-start"><div class="w-6 h-6 rounded-full bg-blue-500/10 flex items-center justify-center text-blue-400 shrink-0 border border-blue-500/20 text-xs font-bold mt-1">✓</div><span class="flex-1 font-medium text-white">إعداد خطة على المدى البعيد لتحقيق أفضل النتائج بأقصر وقت.</span></li>
                    </ul>
                </div>
                <div class="mt-12 pt-6 border-t border-slate-900/50 flex items-center justify-between text-slate-400 text-xs relative z-10">
                    <span>النتيجة: هيمنة كاملة وعائد استثمار مرتفع</span>
                    <span class="text-blue-400 font-bold uppercase">نمو مستدام</span>
                </div>
            </div>
        </div>
    </section>

    