<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<main class="pt-32 pb-24 min-h-screen relative overflow-hidden">
    <!-- Blurred Background Overlay -->
    <div class="absolute inset-0 bg-slate-950/90 backdrop-blur-2xl -z-10"></div>

    <!-- Progress Bar at top of screen -->
    <div class="fixed top-0 left-0 w-full h-1 bg-slate-800 z-50">
        <div id="blog-reading-progress" class="h-full bg-blue-500 w-0 transition-all duration-100"></div>
    </div>

    <div class="container mx-auto px-6 lg:px-12 relative z-10">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="mb-12">
                    <div class="flex items-center gap-3 mb-6">
                        <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo '<span class="bg-blue-500/10 border border-blue-500/30 text-blue-400 text-xs font-bold px-3 py-1 rounded-full">' . esc_html( $categories[0]->name ) . '</span>';
                        }
                        ?>
                        <span class="text-slate-400 text-xs">⏱ <?php echo esc_html( get_the_date() ); ?></span>
                    </div>

                    <h1 class="text-3xl md:text-5xl font-bold text-white mb-8 leading-tight">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    
                    <!-- Main Text Column -->
                    <div class="lg:col-span-2 text-right">
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="w-full h-48 md:h-80 rounded-2xl border border-white/5 bg-slate-900 mb-8 flex items-center justify-center relative overflow-hidden group">
                                <?php the_post_thumbnail('large', ['class' => 'absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700']); ?>
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-80"></div>
                            </div>
                        <?php else : ?>
                            <div class="w-full h-48 md:h-80 rounded-2xl border border-white/5 bg-gradient-to-br from-slate-950 to-slate-900/80 mb-8 flex items-center justify-center relative overflow-hidden group">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-transparent"></div>
                                <div class="relative text-center z-10 px-6">
                                    <div class="text-blue-500 font-bold text-4xl mb-2 font-sans tracking-widest animate-pulse">Rankaty</div>
                                    <div class="text-slate-400 text-xs font-light">GROWTH ENGINE & INSIGHTS</div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Full Content Body -->
                        <div class="prose prose-invert max-w-none text-slate-300 text-base md:text-lg leading-relaxed space-y-6">
                            <?php the_content(); ?>
                        </div>

                        <!-- Tags and Pagination -->
                        <div class="mt-12 pt-8 border-t border-white/10">
                            <?php
                            $tags = get_the_tags();
                            if ($tags) {
                                echo '<div class="flex flex-wrap gap-2 mb-8">';
                                foreach ($tags as $tag) {
                                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="text-xs bg-white/5 border border-white/10 text-slate-400 hover:text-white px-3 py-1.5 rounded-full transition-colors">#' . esc_html($tag->name) . '</a>';
                                }
                                echo '</div>';
                            }
                            ?>
                            
                            <div class="flex justify-between items-center text-sm font-bold">
                                <div>
                                    <?php previous_post_link('%link', '<span class="text-slate-500 text-xs block mb-1">المقال السابق</span> <span class="text-blue-400 hover:text-white transition-colors">%title</span>'); ?>
                                </div>
                                <div class="text-left">
                                    <?php next_post_link('%link', '<span class="text-slate-500 text-xs block mb-1">المقال التالي</span> <span class="text-blue-400 hover:text-white transition-colors">%title</span>'); ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!-- Sidebar -->
                    <div class="lg:col-span-1 flex flex-col gap-8">
                        <!-- Info Card -->
                        <div class="glass-card p-6 rounded-2xl border border-white/5 bg-slate-900/40 sticky top-32">
                            <h4 class="text-white font-bold mb-4 text-sm border-b border-white/5 pb-2">تفاصيل المقال</h4>
                            <div class="space-y-3 text-xs text-slate-400">
                                <div class="flex justify-between">
                                    <span>الكاتب:</span>
                                    <span class="text-white"><?php the_author(); ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span>تاريخ النشر:</span>
                                    <span class="text-white"><?php echo esc_html( get_the_date() ); ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span>القسم:</span>
                                    <span class="text-white">
                                        <?php
                                        if ( ! empty( $categories ) ) {
                                            echo esc_html( $categories[0]->name );
                                        } else {
                                            echo 'عام';
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar Call To Action -->
                        <div class="glass-card p-8 rounded-2xl border border-blue-500/20 bg-gradient-to-br from-blue-950/20 to-slate-900/80 text-center relative overflow-hidden group sticky top-80 mt-8">
                            <div class="absolute -top-12 -left-12 w-24 h-24 bg-blue-500/10 rounded-full blur-2xl"></div>
                            <h4 class="text-white font-bold text-lg mb-3">هل تريد نتائج مماثلة؟</h4>
                            <p class="text-slate-400 text-xs leading-relaxed mb-6">
                                دعنا نحلل موقعك مجاناً ونضع لك استراتيجية سيو تضمن لك التصدر في نتائج البحث.
                            </p>
                            <a href="<?php echo esc_url(home_url('/')); ?>#contact" class="btn-luxury inline-flex items-center justify-center gap-2 w-full py-3.5 rounded-xl text-xs font-bold">
                                <span>احجز استشارتك المجانية</span>
                            </a>
                        </div>
                    </div>

                </div>
            </article>
            <?php
        endwhile; // End of the loop.
        ?>
    </div>
</main>

<script>
    // Native progress bar for single.php since it's not a modal
    window.addEventListener('scroll', () => {
        const scrollPx = document.documentElement.scrollTop;
        const winHeightPx = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrollPercent = winHeightPx > 0 ? (scrollPx / winHeightPx) * 100 : 0;
        const progressBar = document.getElementById('blog-reading-progress');
        if(progressBar) {
            progressBar.style.width = scrollPercent + '%';
        }
    });
</script>

<?php get_footer(); ?>
