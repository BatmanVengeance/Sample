<?php
/**
 * The header for our theme.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header header-custom">
    <div class="site-branding">
        <?php if (has_custom_logo()) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
        <?php endif; ?>
        <div class="site-title">
            <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
    </div>

    <nav id="site-navigation" class="main-navigation">
        <?php wp_nav_menu(array('theme_location' => 'menu-1')); ?>
    </nav>
</header>
<div id="content" class="site-content">
