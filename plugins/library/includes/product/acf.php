<?php
function register_product_fields()
{
  if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
      'key' => 'group_product_fields',
      'title' => 'Campos del Libro','style'         => 'seamless',  
      'fields' => [
        [
          'key' => 'field_product_author',
          'label' => 'Autor',
          'name' => 'author',
          'type' => 'text',
        ],
        [
          'key' => 'field_product_price',
          'label' => 'Precio',
          'name' => 'price',
          'type' => 'number',
          'prepend' => '$',
        ],
        [
          'key' => 'field_product_image',
          'label' => 'Imagen',
          'name' => 'image',
          'type' => 'image',
          'return_format' => 'array',
          'preview_size' => 'medium',
          'library' => 'all',
        ],
        [
          'key' => 'field_product_description',
          'label' => 'Descripción',
          'name' => 'description',
          'type' => 'textarea',
        ],
      ],
      'location' => [
        [
          [
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'product',
          ],
        ],
      ],
    ]);
  }
}

add_action('acf/init', 'register_product_fields');
