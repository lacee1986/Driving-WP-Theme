<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Default Responsive Theme
 * @by Ebow - 1.0
 */
get_header();
?>

<!-- Set the default Wordpress Pagination (Settings - Reading) to a smaller number than this -->
<?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; ?>
<?php $the_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '1', 'order' => 'ASC', 'orderby' => 'menu_order', 'paged' => $paged)); ?>

<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <!-- Insert content here -->
        <?php the_title(); ?>
        <?php the_content(); ?>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <!-- If no posts -->
<?php endif; ?>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>
