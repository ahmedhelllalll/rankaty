<?php
/**
 * The template for displaying the footer
 */
?>

    <footer id="contact" class="border-t border-white/[0.05] bg-slate-950/50 backdrop-blur-md pt-20 pb-10 relative overflow-hidden">
        <!-- Background elements -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom,rgba(30,58,138,0.1),transparent_50%)] pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">

                <!-- Brand -->
                <div class="md:col-span-1">
                    <div class="text-3xl font-bold tracking-tighter uppercase mb-6" style="font-family: var(--font-title);">
                        Ranka<span class="text-blue-500">ty</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-8">
                        وكالة متخصصة في تحسين محركات البحث، نساعد الشركات على بناء نمو مستدام وحقيقي من خلال نتائج البحث العضوية.
                    </p>
                    <!-- Social Links -->
                    <div class="flex space-x-reverse space-x-4">
                        <a href="#" aria-label="Twitter" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-slate-400 hover:text-white hover:bg-blue-600 hover:border-blue-600 transition-all duration-300">
                            <!-- X / Twitter Icon -->
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 24.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                            </svg>
                        </a>
                        <a href="#" aria-label="LinkedIn" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-slate-400 hover:text-white hover:bg-blue-600 hover:border-blue-600 transition-all duration-300">
                            <!-- LinkedIn Icon -->
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-slate-400 hover:text-white hover:bg-blue-600 hover:border-blue-600 transition-all duration-300">
                            <!-- Instagram Icon -->
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Links 1 -->
                <div class="md:col-span-1">
                    <h4 class="text-white font-bold mb-6 text-lg">الشركة</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#" class="hover:text-blue-400 transition-colors">الرئيسية</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#offers" class="hover:text-blue-400 transition-colors">الباقات</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#results" class="hover:text-blue-400 transition-colors">شركاء النجاح</a></li>
                        <li><a href="<?php echo esc_url(home_url('/blog')); ?>" class="hover:text-blue-400 transition-colors">المدونة</a></li>
                    </ul>
                </div>

                <!-- Links 2 -->
                <div class="md:col-span-1">
                    <h4 class="text-white font-bold mb-6 text-lg">الدعم</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>#faq-section" class="hover:text-blue-400 transition-colors">الأسئلة الشائعة</a></li>
                        <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="hover:text-blue-400 transition-colors">سياسة الخصوصية</a></li>
                        <li><a href="<?php echo esc_url(home_url('/terms-of-service')); ?>" class="hover:text-blue-400 transition-colors">شروط الخدمة</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="md:col-span-1">
                    <h4 class="text-white font-bold mb-6 text-lg">تواصل معنا</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <?php 
                        $contact_email = get_theme_mod( 'rankaty_contact_email', 'hello@rankaty.com' );
                        $whatsapp_number = get_theme_mod('rankaty_whatsapp_number', '+201007462953');
                        $address_2 = get_theme_mod( 'rankaty_office_address_2', 'الرياض، المملكة العربية السعودية<br>المركز المالي، برج ب' );
                        ?>
                        <li class="flex items-center gap-3">
                            <span class="text-blue-500">✉</span>
                            <a href="mailto:<?php echo esc_attr( $contact_email ); ?>" class="hover:text-blue-400 transition-colors"><?php echo esc_html( $contact_email ); ?></a>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-blue-500">☎</span>
                            <span dir="ltr"><?php echo esc_html( $whatsapp_number ); ?></span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-blue-500">⚲</span>
                            <span><?php echo wp_kses_post( $address_2 ); ?></span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Bar -->
            <div class="pt-8 border-t border-white/[0.03] flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-600 text-xs">
                    تصميم وتطوير بواسطة
                    <a href="https://www.linkedin.com/in/ahmed-helal-3410522a7/" target="_blank" rel="noopener noreferrer" class="text-blue-500/70 hover:text-blue-400 transition-colors font-medium">Helal</a>
                </p>
                <div class="text-slate-500 text-xs flex space-x-reverse space-x-4">
                    <a href="<?php echo esc_url(home_url('/terms-of-service')); ?>" class="hover:text-white transition-colors">شروط الخدمة</a>
                    <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="hover:text-white transition-colors">سياسة الخصوصية</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll To Top Button -->
    <button id="scrollToTopBtn" class="fixed left-6 bottom-6 z-50 w-14 h-14 flex justify-center items-center rounded-full bg-slate-900/80 backdrop-blur-md border border-white/5 text-slate-400 hover:text-white hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-500 opacity-0 invisible translate-y-4 group cursor-pointer" aria-label="العودة للأعلى">
        <svg class="absolute inset-0 w-full h-full -rotate-90 pointer-events-none" viewBox="0 0 56 56">
            <circle class="text-white/10" stroke-width="2" stroke="currentColor" fill="transparent" r="26" cx="28" cy="28" />
            <circle id="scrollProgress" class="text-blue-500 transition-all duration-200 ease-out" stroke-width="2" stroke-dasharray="163.4" stroke-dashoffset="163.4" stroke-linecap="round" stroke="currentColor" fill="transparent" r="26" cx="28" cy="28" />
        </svg>
        <svg class="w-5 h-5 relative z-10 transition-transform duration-300 group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>

    <!-- Floating WhatsApp Button -->
    <?php $whatsapp_link = preg_replace('/[^0-9+]/', '', get_theme_mod('rankaty_whatsapp_number', '+201007462953')); ?>
    <a href="https://wa.me/<?php echo esc_attr( ltrim( $whatsapp_link, '+' ) ); ?>" target="_blank" rel="noopener noreferrer" class="fixed right-6 bottom-6 z-50 w-14 h-14 bg-[#25D366] text-white rounded-full flex items-center justify-center shadow-lg hover:bg-[#128C7E] hover:scale-110 transition-all duration-300 group" aria-label="تواصل عبر واتساب">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.031 0C5.385 0 .002 5.385.002 12.033c0 2.122.551 4.195 1.6 6.02L.055 23.992l6.096-1.599c1.758.955 3.738 1.458 5.879 1.458 6.648 0 12.031-5.383 12.031-12.031C24.062 5.385 18.68 0 12.031 0zm3.626 17.291c-.544.153-3.21.968-6.195-2.013C6.478 12.29 7.291 9.626 7.444 9.082c.153-.545.229-.688.382-.688.153 0 .382 0 .535.076.153.076.458.765.535.918.077.153.077.306 0 .535-.077.229-.229.382-.305.535-.077.153-.077.306.076.535.153.229.918 1.452 2.062 2.447 1.144.995 2.291 1.3 2.52 1.376.229.076.458.076.611-.076.153-.153.688-.841.841-1.07.153-.229.305-.153.535-.076.229.076 1.452.688 1.681.841.229.153.382.229.458.382.076.153.076.458-.076.994z"/>
        </svg>
        <span class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-slate-900 text-white text-xs px-3 py-1 rounded whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
            تواصل معنا عبر واتساب
        </span>
    </a>

<?php wp_footer(); ?>
</body>
</html>
