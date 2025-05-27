<?php
/**
 * Plugin Name: Sistema de Gestion de productos
 * Description: Sistema de gestión de productos para la tienda.
 * Version: 1.0
 * Author: René
 */

// Load Custom Post Types
require_once plugin_dir_path(__FILE__) . 'includes/product/cpt.php';
require_once plugin_dir_path(__FILE__) . 'includes/product/acf.php';
require_once plugin_dir_path(__FILE__) . 'includes/category/product_category.php';
require_once plugin_dir_path(__FILE__) . 'includes/category/acf.php';

add_action('admin_head', function () {
  $screen = get_current_screen();
  $my_ctps = ['product']; // Add your custom post types here

  if ($screen && in_array($screen->post_type, $my_ctps)) {
    ?>
    <style>
      .acf-postbox,
      .acf-fields,
      .acf-field {
        padding: 0 !important;
        margin: 0 !important;
      }

      .acf-field {
        margin-bottom: 1em;
      }

      .acf-field .acf-input {
        padding: 0.5em 1em;
      }

      .acf-field .acf-label {
        display: block;
        margin-bottom: 0.25em;
        padding-left: 1em;
        font-weight: bold;
      }
    </style>
    <?php
  }
});
