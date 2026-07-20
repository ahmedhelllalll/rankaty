<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */

get_header(); ?>

<main class="pt-32 pb-24 min-h-screen relative overflow-hidden">
    <!-- Background Glows -->
    <div class="absolute top-1/3 left-1/4 w-[600px] h-[600px] bg-blue-500/5 rounded-full blur-[120px] pointer-events-none -z-10"></div>
    <div class="container mx-auto px-6 relative z-10">
        
        <header class="mb-16 md:mb-24 text-center gsap-reveal">
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <h1 class="text-4xl md:text-6xl font-bold mt-4 mb-8 text-white"><?php single_post_title(); ?></h1>
            <?php elseif ( is_archive() ) : ?>
                <h1 class="text-4xl md:text-6xl font-bold mt-4 mb-8 text-white"><?php the_archive_title(); ?></h1>
                <div class="text-slate-400 mt-4"><?php the_archive_description(); ?></div>
            <?php elseif ( is_search() ) : ?>
                <h1 class="text-4xl md:text-6xl font-bold mt-4 mb-8 text-white">
                    <?php printf( esc_html__( 'نتائج البحث عن: %s', 'rankaty' ), '<span>' . get_search_query() . '</span>' ); ?>
                </h1>
            <?php else : ?>
                <h1 class="text-4xl md:text-6xl font-bold mt-4 mb-8 text-white">المدونة</h1>
            <?php endif; ?>
            <div class="w-20 h-[2px] bg-blue-600 mx-auto"></div>
        </header>

        <?php if ( have_posts() ) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('glass-card gsap-reveal rounded-2xl border border-white/5 bg-slate-900/30 hover:bg-slate-900/50 p-6 flex flex-col justify-between group relative overflow-hidden'); ?>>
                        <div class="absolute -top-12 -left-12 w-32 h-32 bg-blue-500/5 rounded-full blur-2xl group-hover:bg-blue-500/10 transition-all"></div>
                        <div class="relative z-10">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="w-full h-48 mb-6 rounded-xl overflow-hidden">
                                    <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500']); ?>
                                </div>
                            <?php endif; ?>
                            
                            <div class="flex justify-between items-center mb-4">
                                <?php
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    echo '<span class="bg-blue-500/10 border border-blue-500/20 text-blue-400 text-[10px] font-bold px-2.5 py-1 rounded-full">' . esc_html( $categories[0]->name ) . '</span>';
                                }
                                ?>
                                <span class="text-slate-400 text-[10px]">⏱ <?php echo esc_html( get_the_date() ); ?></span>
                            </div>
                            
                            <h2 class="text-lg font-bold mb-3 text-white group-hover:text-blue-400 transition-colors">
                                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                            </h2>
                            
                            <div class="text-slate-400 font-light text-xs leading-relaxed line-clamp-3 mb-6">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        
                        <div class="mt-auto flex justify-between items-center border-t border-white/5 pt-4 relative z-10">
                            <span class="text-slate-500 text-[10px]"><?php the_author(); ?></span>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="text-xs font-bold text-blue-400 hover:text-white transition flex items-center gap-1 group/btn">
                                <span>اقرأ المقال</span>
                                <span class="transition-transform group-hover/btn:-translate-x-1">←</span>
                            </a>
                        </div>
                    </article>
                    <?php
                endwhile;
                ?>
            </div>

            <div class="mt-16 flex justify-center gsap-reveal">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( 'السابق', 'rankaty' ),
                    'next_text' => __( 'التالي', 'rankaty' ),
                    'class'     => 'flex gap-2'
                ) );
                ?>
            </div>

        <?php else : ?>
            <div class="text-center py-20 text-slate-400 text-lg">
                <p><?php esc_html_e( 'عفواً، لا توجد مقالات هنا حالياً.', 'rankaty' ); ?></p>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
