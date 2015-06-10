<?php // Register Custom Post Type
function indicators() {

  $labels = array(
    'name'                => _x( 'Indicators', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Indicator', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Indicators', 'text_domain' ),
    'name_admin_bar'      => __( 'Indicators', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Indicators', 'text_domain' ),
    'all_items'           => __( 'All Indicators', 'text_domain' ),
    'add_new_item'        => __( 'Add New Indicator', 'text_domain' ),
    'add_new'             => __( 'Add New', 'text_domain' ),
    'new_item'            => __( 'New Indicators', 'text_domain' ),
    'edit_item'           => __( 'Edit Indicator', 'text_domain' ),
    'update_item'         => __( 'Update Indicator', 'text_domain' ),
    'view_item'           => __( 'View Indicator', 'text_domain' ),
    'search_items'        => __( 'Search Indicators', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
  );
  $args = array(
    'label'               => __( 'indicators', 'text_domain' ),
    'description'         => __( '100 Global Monitoring Indicators to track SDG progress', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'page-attributes' ),
    'taxonomies'          => array( 'goal' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'show_in_admin_bar'   => true,
    'show_in_nav_menus'   => false,
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'indicators', $args );

}

// Hook into the 'init' action
add_action( 'init', 'indicators', 0 );

?>