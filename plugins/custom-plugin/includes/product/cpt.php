<?php
function register_product_cpt()
{
  $labels = [
    'name' => 'Productos',
    'singular_name' => 'Producto',
    'menu_name' => 'Productos',
    'name_admin_bar' => 'Productos',
    'add_new' => 'Agregar nuevo',
    'add_new_item' => 'Agregar nuevo producto',
    'new_item' => 'Nuevo producto',
    'edit_item' => 'Editar producto',
    'view_item' => 'Ver producto',
    'all_items' => 'Todos los productos',
    'search_items' => 'Buscar productos',
    'parent_item_colon' => '',
    'not_found' => 'No se encontraron productos.',
    'not_found_in_trash' => 'No hay productos en la papelera.',
  ];

  $args = [
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'products'],
    'supports' => ['title', 'thumbnail'],
    'menu_icon' => 'dashicons-book-alt',
    'show_in_rest' => true,
  ];

  register_post_type('product', $args);
}

add_action('init', 'register_product_cpt');


// example relationship
add_action('acf/init', function() {
    if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group([
        'key' => 'group_servicio_caracteristicas',
        'title' => 'Características Relacionadas',
        'fields' => [
            [
                'key' => 'field_caracteristicas_relacionadas',
                'label' => 'Características Relacionadas',
                'name' => 'caracteristicas_relacionadas',
                'type' => 'relationship', // Tipo relación
                'post_type' => ['caracteristica'], // Solo características
                'filters' => ['search', 'post_type', 'taxonomy'],
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'object', // WP_Post objects
                'multiple' => 1,
            ],
        ], 
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'servicio',
                ],
            ],
        ],
        'style' => 'default',
        'position' => 'normal',
        'menu_order' => 0,
        'active' => true,
    ]);

    endif;
});
