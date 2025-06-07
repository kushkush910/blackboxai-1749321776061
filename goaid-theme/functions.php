<?php
function goaid_enqueue_scripts() {
    // Enqueue Tailwind CSS via CDN
    wp_enqueue_style('tailwindcss', 'https://cdn.tailwindcss.com', array(), null);

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap', array(), null);

    // Enqueue theme stylesheet
    wp_enqueue_style('goaid-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'goaid_enqueue_scripts');

// Register navigation menu
function goaid_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'goaid'),
    ));
}
add_action('after_setup_theme', 'goaid_register_menus');
?>
