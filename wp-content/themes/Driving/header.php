<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Default Responsive Theme
 * @by Ebow - 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>	

    <!--[if IE ]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ie-starter.css" /><![endif]-->
    <!--[if (gte IE 6)&(lte IE 8)]><script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/selectivizr-min.js"></script><![endif]-->

</head>

<body <?php body_class(); ?>>

    <nav id="main_nav" role="navigation">
        <?php wp_nav_menu(array('container_class' => 'menu_header', 'theme_location' => 'custom-menu-place-name')); ?>
    </nav><!-- #main_nav -->

    <header class="parallax-container">

        <div class="section">   
            <div class="container center">
                <h1>Heading 1</h1>
                <h4>Heading 4</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#" class="btn-large waves-effect waves-light red darken-4">Sample button</a>
            </div>
        </div>

        <div class="parallax">
            <img src="<?php echo get_template_directory_uri()?>/images/img1080.png" alt="Paralax1" />
        </div>

    </header>    

    <section id="content">
