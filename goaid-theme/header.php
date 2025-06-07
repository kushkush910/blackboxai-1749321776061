<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold text-black">
            GoAid
        </a>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'flex space-x-6 text-black font-semibold',
                'container' => false,
                'fallback_cb' => false,
            ));
            ?>
        </nav>
    </div>
</header>
