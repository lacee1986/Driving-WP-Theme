<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Default Responsive Theme
 * @by Ebow - 1.0
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
	<nav id="nav-above" class="navigation">
		<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link' ) . ' %title' ); ?>
		<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link' ) . '' ); ?>
	</nav><!-- #nav-above -->
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><?php the_title(); ?></h1>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '' . __( 'Pages:' ), 'after' => '' ) ); ?>
		</div><!-- .entry-content -->

		<div class="entry-utility">
			<?php boilerplate_posted_in(); ?>
			<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-utility -->
	
	</article><!-- #post-## -->
	
	<nav id="nav-below" class="navigation">
		<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link' ) . '</span> %title' ); ?></div>
		<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link' ) . '</span>' ); ?></div>
	</nav><!-- #nav-below -->
	
	<?php comments_template( '', true ); ?>
	
<?php endwhile; // end of the loop. ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
