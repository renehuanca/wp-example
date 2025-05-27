<?php

add_action('acf/init', 'registrar_campo_importancia_en_taxonomia');

function registrar_campo_importancia_en_taxonomia() {
    if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_importancia_taxonomia',
        'title' => 'Importancia de la Categoría',
        'fields' => array(
            array(
                'key' => 'field_importancia',
                'label' => 'Importancia',
                'name' => 'importancia',
                'type' => 'number',
                'instructions' => 'Asigna un número para definir la importancia o el orden de esta categoría.',
                'required' => 0,
                'default_value' => 0,
                'min' => 0,
                'step' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'product_category',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    endif;
}
