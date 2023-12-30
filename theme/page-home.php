<?php 
/* 
    Template Name: Home Page
*/ ?>

<?php 
/* 
    Template Name: Home Page
*/ ?>

<?php get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

    <?php get_template_part('partials/section', 'homebanner'); ?>
    <?php get_template_part('partials/section', 'personal'); ?>
    <?php get_template_part('partials/section', 'exclusive'); ?>
    <?php get_template_part('partials/section', 'residence'); ?>


<?php endwhile; ?>
<?php else : ?>

<!-- article -->
<article>

    <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

</article>
<!-- /article -->

<?php endif; ?>

<?php get_footer(); ?>