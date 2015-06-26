<?php
 
// Load our function when hook is set
add_action( 'pre_get_posts', 'indicators_modify_indicators_query_limit' );
 
function indicators_modify_indicators_query_limit( $query ) {
 
  // Show all posts on Indicators and Targets CPT archive pages as well as Goal taxnonmy archive pages.
  if( is_post_type_archive( array('indicators', 'targets') ) && $query->is_main_query() ) {
 
    $query->set('posts_per_page', '-1');
    $query->set( 'order', 'ASC' );
 
  } elseif ( is_archive( 'goal' ) && $query->is_main_query() ) {
    $query->set('posts_per_page', '-1');
    $query->set( 'order', 'ASC' );
  }
 
}

// Load our function when hook is set
add_action( 'pre_get_posts', 'indicators_modify_goals_taxonomy_query' );
 
function indicators_modify_goals_taxonomy_query( $query ) {
 
  // Query only the Targets CPT in the initial query on the Goals taxonomy pages.
  if( is_tax( 'goal' ) && $query->is_main_query() ) {
 
    $query->set( 'post_type', 'targets' );
    $query->set( 'posts_per_page', '-1' );
    $query->set( 'order', 'ASC' );
 
  }
 
}

?>