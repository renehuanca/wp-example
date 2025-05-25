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
