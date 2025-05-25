<?php get_header(); ?>

<input type="search" id="search-products" placeholder="Buscar productos...">

<div id="products-list">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      echo '<div><a href="' . get_permalink() . '">' . get_the_title() . '</a></div>';
    }
  }
  ?>
</div>
<?php get_footer(); ?>
