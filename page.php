<?php
get_header();
get_header('page');

// on récupère les variables nécessaires
$page_id = get_queried_object_id();

// we made a loop with each child of this page
$args = array(
  'post_type' => 'page',
  'post_parent' => $page_id,
  'order' => 'ASC',
  'orderby' => 'menu_order'
);
$loop = new WP_Query($args);

// we check if we have children
if ($loop->have_posts()) :
  // we loop each child
  while ($loop->have_posts()) :
    // we load all child page's informations
    $loop->the_post();
    // we search the template name
    $template = get_page_template_slug();
    $template = explode('.', $template)[0];
    $template = explode('-', $template, 2);
    // we call the asked template
    get_template_part($template[0], $template[1]);
    // we unset useless vars
    unset($template);
  endwhile;
  // we unset useless vars
  unset($loop, $args);
  wp_reset_postdata();
endif;

get_footer();
