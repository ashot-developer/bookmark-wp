<?php
// Register Custom Post Types
add_action('acf/init', 'bookmark__acf_op_init');
function bookmark__acf_op_init()
{

  // Check function exists.
  if (function_exists('acf_add_options_page')) {

    // Add parent.
    $parent = acf_add_options_page(array(
      'page_title'  => __('Theme General Settings'),
      'menu_title'  => __('Theme Settings'),
      'redirect'    => false,
    ));

    // Add sub page.
    acf_add_options_sub_page(
      array(
        'page_title'  => __('Extension Settings'),
        'menu_title'  => __('Extension'),
        'parent_slug' => $parent['menu_slug'],
      )
    );

    acf_add_options_sub_page(
      array(
        'page_title'  => __('Faq Settings'),
        'menu_title'  => __('Faq'),
        'parent_slug' => $parent['menu_slug'],
      )
    );
  }
}
