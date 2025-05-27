<?php
function register_product_categories_taxonomy() {
    $labels = array(
        'name'              => 'Categorías de Producto',
        'singular_name'     => 'Categoría de Producto',
        'search_items'      => 'Buscar Categorías',
        'all_items'         => 'Todas las Categorías',
        'parent_item'       => 'Categoría Padre',
        'parent_item_colon' => 'Categoría Padre:',
        'edit_item'         => 'Editar Categoría',
        'update_item'       => 'Actualizar Categoría',
        'add_new_item'      => 'Agregar nueva Categoría',
        'new_item_name'     => 'Nombre de nueva Categoría',
        'menu_name'         => 'Categorías de Producto',
    );

    $args = array(
        'hierarchical'      => true, 
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'categoria-producto'),
    );

    register_taxonomy('product_category', array('product'), $args);
}

add_action('init', 'register_product_categories_taxonomy');

