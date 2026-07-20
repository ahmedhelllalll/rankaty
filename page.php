<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 */

get_header(); ?>

<main class="pt-32 pb-24 min-h-screen relative overflow-hidden bg-slate-950">
    <!-- Background Elements -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-600/5 rounded-full blur-[120px] pointer-events-none -z-10"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-slate-800/10 rounded-full blur-[100px] pointer-events-none -z-10"></div>

    <div class="container mx-auto px-6 max-w-4xl relative z-10">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('glass-card p-8 md:p-16 rounded-3xl border border-white/5 bg-slate-900/30 gsap-reveal'); ?>>
                
                <header class="mb-12 border-b border-white/10 pb-8 text-center">
                    <h1 class="text-3xl md:text-5xl font-bold text-white mb-4">
                        <?php the_title(); ?>
                    </h1>
                    <div class="w-16 h-1 bg-blue-600 mx-auto rounded-full"></div>
                </header>

                <div class="prose prose-invert max-w-none text-slate-300 text-base md:text-lg leading-relaxed space-y-6">
                    <?php
                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'الصفحات:', 'rankaty' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div>

            </article>
            <?php
        endwhile; // End of the loop.
        ?>
    </div>
</main>

<?php get_footer(); ?>
