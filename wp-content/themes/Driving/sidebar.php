<?php
/**
 * The Sidebar.
 *
 * @package WordPress
 * @subpackage Default Responsive Theme
 * @by Ebow - 1.0
 */
?>

<ul class="sidebar">

<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
	<li>
		<?php get_search_form(); ?>
	</li>
	
	<li>
		<h3><?php _e( 'Archives', 'boilerplate' ); ?></h3>
		<ul>
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ul>
	</li>
	
	<li>
		<h3><?php _e( 'Meta', 'boilerplate' ); ?></h3>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
		</ul>
	</li>

	<?php endif; // end primary widget area ?>
</ul>

	<?php if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

<ul class="sidebar">
	<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
</ul>

<?php endif; ?>