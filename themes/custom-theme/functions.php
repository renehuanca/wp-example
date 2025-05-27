<?php
add_action('wp_enqueue_scripts', function() {
    // Remove default Gutenberg block styles from frontend
    wp_dequeue_style('wp-block-library');

    // Remove additional theme styles for blocks
    wp_dequeue_style('wp-block-library-theme');

    // Remove global styles generated from theme.json
    wp_dequeue_style('global-styles');
}, 100);  // priority 100 to ensure it runs after other styles are enqueued

function enqueue_scripts()
{
    // Enqueue Gutenberg styles
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');

    if (is_post_type_archive('product')) {
        wp_enqueue_script('search-products', get_template_directory_uri() . '/js/search-products.js', [], '1.0', true);
    }
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

