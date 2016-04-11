<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Default Responsive Theme
 * @by Ebow - 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<h1><?php printf( __( 'Search Results for: %s' ), '' . get_search_query() . '' ); ?></h1>
<?php else : ?>
	<h2><?php _e( 'Nothing Found' ); ?></h2>
	<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.' ); ?></p>
	<?php get_search_form(); ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
