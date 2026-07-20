<!-- Blog Section -->
    <section id="blog" class="py-24 md:py-32 relative overflow-hidden border-t border-white/[0.03]">
        <div class="absolute top-1/3 left-1/4 w-[600px] h-[600px] bg-blue-500/5 rounded-full blur-[120px] pointer-events-none -z-10"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="mb-16 md:mb-24 text-right gsap-reveal">
                <span class="text-blue-500 text-sm font-bold tracking-widest uppercase mb-3 block">المعرفة والخبرة</span>
                <h2 class="text-4xl md:text-6xl font-bold mt-4 mb-8">مدونة Rankaty للنمو الرقمي</h2>
                <div class="w-20 h-[2px] bg-blue-600"></div>
            </div>

            <?php
            $blog_args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            );
            $blog_query = new WP_Query($blog_args);
            
            if ( $blog_query->have_posts() ) :
            ?>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <?php
                $post_count = 0;
                while ( $blog_query->have_posts() ) :
                    $blog_query->the_post();
                    $post_count++;
                    $categories = get_the_category();
                    $cat_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'عام';
                    
                    if ( $post_count === 1 ) :
                ?>
                <!-- Featured Blog Card -->
                <div class="lg:col-span-2 glass-card gsap-reveal rounded-3xl border border-white/5 bg-slate-900/30 hover:bg-slate-900/50 p-8 flex flex-col justify-between group overflow-hidden relative min-h-[480px]">
                    <div class="absolute inset-0 bg-slate-950/80 z-0"></div>
                    <div class="absolute -top-24 -left-24 w-64 h-64 bg-blue-600/10 rounded-full blur-3xl group-hover:bg-blue-600/20 transition-all duration-700 pointer-events-none"></div>
                    <div class="absolute top-8 left-8 w-32 h-32 opacity-10 group-hover:opacity-25 transition-opacity duration-700 pointer-events-none z-0">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-blue-500 fill-none stroke-current" stroke-width="2">
                            <circle cx="50" cy="50" r="40" stroke-dasharray="6,6" />
                            <path d="M50 20 v60 M20 50 h60" />
                            <path d="M30 30 L70 70 M30 70 L70 30" stroke-width="1" />
                        </svg>
                    </div>

                    <div class="relative z-10 flex flex-col h-full justify-between">
                        <div>
                            <div class="flex gap-4 items-center mb-6">
                                <span class="bg-blue-500/10 border border-blue-500/30 text-blue-400 text-xs font-bold px-3 py-1.5 rounded-full uppercase"><?php echo $cat_name; ?></span>
                                <span class="text-slate-400 text-xs flex items-center gap-1"><span>⏱</span> <?php echo esc_html( get_the_date() ); ?></span>
                            </div>
                            <h3 class="text-2xl md:text-4xl font-bold mb-4 text-white leading-tight group-hover:text-blue-400 transition-colors">
                                <a href="<?php echo esc_url( get_permalink() ); ?>" class="hover:text-blue-400 transition-colors"><?php the_title(); ?></a>
                            </h3>
                            <div class="text-slate-400 font-light leading-relaxed text-sm md:text-base max-w-xl line-clamp-3">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <div class="mt-8 flex justify-between items-center border-t border-white/5 pt-6">
                            <span class="text-slate-500 text-xs"><?php the_author(); ?></span>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn-luxury group flex items-center gap-2 px-8 py-3 rounded-full text-xs font-bold transition-all">
                                <span>اقرأ المقال</span>
                                <span class="transition-transform group-hover:-translate-x-1">←</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <?php if ( $blog_query->post_count > 1 ) : ?>
                <!-- Latest Blogs Column -->
                <div class="flex flex-col gap-6 lg:col-span-1">
                <?php endif; ?>
                
                <?php else : ?>
                
                    <div class="glass-card gsap-reveal rounded-2xl border border-white/5 bg-slate-900/30 hover:bg-slate-900/50 p-6 flex flex-col justify-between group relative overflow-hidden">
                        <div class="absolute -top-12 -left-12 w-32 h-32 bg-blue-500/5 rounded-full blur-2xl group-hover:bg-blue-500/10 transition-all"></div>
                        <div class="relative z-10">
                            <div class="flex justify-between items-center mb-4">
                                <span class="bg-blue-500/10 border border-blue-500/20 text-blue-400 text-[10px] font-bold px-2.5 py-1 rounded-full"><?php echo $cat_name; ?></span>
                                <span class="text-slate-400 text-[10px]">⏱ <?php echo esc_html( get_the_date() ); ?></span>
                            </div>
                            <h3 class="text-lg font-bold mb-3 text-white group-hover:text-blue-400 transition-colors">
                                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="text-slate-400 font-light text-xs leading-relaxed line-clamp-2">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <div class="mt-6 flex justify-between items-center border-t border-white/5 pt-4">
                            <span class="text-slate-500 text-[10px]"><?php the_author(); ?></span>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="text-xs font-bold text-blue-400 hover:text-white transition flex items-center gap-1 group/btn">
                                <span>اقرأ المقال</span>
                                <span class="transition-transform group-hover/btn:-translate-x-1">←</span>
                            </a>
                        </div>
                    </div>
                    
                <?php endif; // End check for post count ?>
                <?php endwhile; ?>
                
                <?php if ( $blog_query->post_count > 1 ) : ?>
                </div> <!-- End of Latest Blogs Column -->
                <?php endif; ?>
                
            </div>
            
            <div class="mt-12 text-center gsap-reveal">
                <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="inline-flex items-center gap-2 px-8 py-3 rounded-full border border-white/10 hover:border-blue-500/50 text-slate-300 hover:text-blue-400 transition-all text-sm font-bold">
                    <span>عرض كل المقالات</span>
                    <span class="transition-transform hover:-translate-x-1">←</span>
                </a>
            </div>
            
            <?php 
            wp_reset_postdata();
            endif; 
            ?>
            
        </div>
    </section>

    