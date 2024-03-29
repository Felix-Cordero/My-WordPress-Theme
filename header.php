<?php
/** 
* My Header Template
* 
* Displaying all the <head> section and everything up till <div id="main">
*
*/
?>
<!DOCTYPE html>
<!-- [if IE 7]>
<htmoo class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header">
        <hgroup>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name'); ?></a></h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        </hgroup>

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle"><?php _e( 'Menu', 'my_theme' ); ?></button>
            <a class="assistive-text" href="#content"><?php _e( 'Skip to content', 'my_theme' ); ?></a>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-menu',
                )
            );
            ?>
        </nav><!-- site-navigation -->

        <?php if ( get_header_image() ) : ?>
        <a href="<?php echo esc_url( home_url( '/') ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php esc_attr( get_bloginfo( 'name', 'display') ); ?>" /></a>
        <?php endif; ?>
        </header><!-- #masthead -->

        <div id="main" class="wrapper">