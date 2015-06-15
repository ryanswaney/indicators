<?php
 
// Load our function when hook is set
add_action( 'pre_get_posts', 'indicators_modify_indicators_query_limit_posts' );
 
function indicators_modify_indicators_query_limit_posts( $query ) {
 
  // Check if on Indicators CPT archive. Show all Indicators if true.
  if( is_post_type_archive( 'indicators' ) && $query->is_main_query() ) {
 
    $query->set('posts_per_page', '-1');
    $query->set( 'order', 'ASC' );
 
  }
 
}
?>