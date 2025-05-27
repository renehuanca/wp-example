<?php get_header(); ?>
<main>
  hola mundo

</main>
<?php
$parent_terms = get_terms(array(
    'taxonomy'   => 'product_category',
    'hide_empty' => false, // Cambia a true si solo quieres mostrar las que tienen posts
    'parent'     => 0      // Los que no tengan padre
));

if (!empty($parent_terms) && !is_wp_error($parent_terms)) {
    echo '<ul class="product-category-list">';
    foreach ($parent_terms as $term) {
        echo '<li>';
        echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a>';
        echo '<p>' . esc_html($term->description) . '</p>';
        echo '<p>' . esc_html($term->importancia) . '</p>';
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>No categories found.</p>';
}

$terms = get_terms(array(
    'taxonomy' => 'product_category',
    'hide_empty' => false,
    'meta_key' => 'importancia',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
));

if (!empty($terms) && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        $importancia = get_field('importancia', 'product_category_' . $term->term_id);
        echo esc_html($term->name) . ' - Importancia: ' . intval($importancia) . '<br>';
    }
}

?>

<?php get_footer(); ?>
