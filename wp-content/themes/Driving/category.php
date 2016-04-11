<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Default Responsive Theme
 * @by Ebow - 1.0
 */

get_header(); ?>

	<h1><?php printf( __( 'Category Archives: %s' ), '' . single_cat_title( '', false ) . '' );	?></h1>
	
	<?php
		$category_description = category_description();
		if ( ! empty( $category_description ) )
			echo '' . $category_description . '';
	?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
