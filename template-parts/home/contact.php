<!-- Contact Form Section -->
    <section id="contact" class="py-24 md:py-32 relative border-t border-white/[0.03] bg-slate-900/30 overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] pointer-events-none -z-10"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-slate-800/30 rounded-full blur-[100px] pointer-events-none -z-10"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">
                <div class="text-right gsap-reveal">
                    <span class="text-blue-500 text-sm font-bold uppercase tracking-widest mb-4 block">تواصل معنا</span>
                    <h2 class="text-4xl md:text-6xl font-bold mb-8 text-white leading-tight">
                        هل موقعك جاهز <br>
                        <span class="text-blue-400">للانطلاق للقمة؟</span>
                    </h2>
                    <p class="text-slate-400 text-lg md:text-xl font-light leading-relaxed mb-10 max-w-lg">لا تترك عملائك المحتملين يذهبون لمنافسيك. تواصل معنا اليوم لتحليل موقعك مجاناً وبناء استراتيجية نمو حقيقية.</p>
                    
                    <div class="flex flex-col gap-6 text-slate-300 font-medium">
                        <?php 
                        $contact_email = get_theme_mod( 'rankaty_contact_email', 'hello@rankaty.com' );
                        $office_address = get_theme_mod( 'rankaty_office_address', 'دبي، الإمارات العربية المتحدة' );
                        ?>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-blue-500/10 flex items-center justify-center text-blue-500 border border-blue-500/20 shrink-0">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <span dir="ltr"><?php echo esc_html( $contact_email ); ?></span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-blue-500/10 flex items-center justify-center text-blue-500 border border-blue-500/20 shrink-0">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <span><?php echo esc_html( $office_address ); ?></span>
                        </div>
                    </div>
                </div>

                <div class="glass-card p-8 md:p-12 rounded-3xl relative gsap-reveal shadow-[0_0_40px_rgba(59,130,246,0.05)] border border-white/10">
                    <form action="#" method="POST" class="flex flex-col gap-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-sm font-medium text-slate-400">الاسم بالكامل</label>
                                <input type="text" id="name" placeholder="محمد أحمد" class="w-full bg-slate-950/50 border border-slate-700 rounded-xl px-5 py-4 text-white placeholder-slate-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="phone" class="text-sm font-medium text-slate-400">رقم الهاتف</label>
                                <input type="tel" id="phone" dir="ltr" placeholder="+971 50 123 4567" class="w-full bg-slate-950/50 border border-slate-700 rounded-xl px-5 py-4 text-white placeholder-slate-600 text-right focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="email" class="text-sm font-medium text-slate-400">البريد الإلكتروني</label>
                            <input type="email" id="email" dir="ltr" placeholder="you@company.com" class="w-full bg-slate-950/50 border border-slate-700 rounded-xl px-5 py-4 text-white placeholder-slate-600 text-right focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="website" class="text-sm font-medium text-slate-400">رابط الموقع (اختياري)</label>
                            <input type="url" id="website" dir="ltr" placeholder="https://www.yourdomain.com" class="w-full bg-slate-950/50 border border-slate-700 rounded-xl px-5 py-4 text-white placeholder-slate-600 text-right focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                        </div>
                        <button type="submit" class="group relative w-full py-4 mt-4 rounded-xl text-lg font-bold flex justify-center items-center gap-3 overflow-hidden bg-white/5 border border-white/10 text-white transition-all duration-500 ease-out hover:bg-white/10 hover:border-blue-500/50 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] active:scale-[0.98]">
                            <span class="absolute inset-0 translate-x-[-100%] bg-gradient-to-r from-transparent via-white/10 to-transparent transition-transform duration-700 group-hover:translate-x-[100%]"></span>
                            <span>احصل على الاستشارة</span>
                            <span class="transition-transform duration-300 group-hover:-translate-x-1">←</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
