<?php
function enqueue_scripts()
{
    if (is_post_type_archive('product')) {
        wp_enqueue_script('search-products', get_template_directory_uri() . '/js/search-products.js', [], '1.0', true);
    }
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

