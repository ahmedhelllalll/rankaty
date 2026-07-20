<?php
/**
 * The front page template file
 */

get_header(); ?>

<main>
    <?php get_template_part('template-parts/home/hero'); ?>
    <?php get_template_part('template-parts/home/logo-ticker'); ?>
    <?php get_template_part('template-parts/home/rankaty-effect'); ?>
    <?php get_template_part('template-parts/home/problem-solution'); ?>
    <?php get_template_part('template-parts/home/results'); ?>
    <?php get_template_part('template-parts/home/offers'); ?>
    <?php get_template_part('template-parts/home/blog-section'); ?>
    <?php get_template_part('template-parts/home/faq'); ?>
    <?php get_template_part('template-parts/home/contact'); ?>
</main>

<?php get_footer(); ?>
