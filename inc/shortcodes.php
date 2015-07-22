<?php
// Add Shortcode -- Outputs in-text link for Bigfootjs shortcodes
function indicators_footnote_shortcode( $atts , $content = null ) {

  // Attributes
  extract( shortcode_atts(
    array(
      'num' => '',
    ), $atts )
  );

  $footnote_id = get_the_ID() . '-' . esc_attr($atts['num']);

  $output = '<sup id="fnref:'. $footnote_id . '">';
  $output .= '<a href="#fn:' . $footnote_id . '" rel="footnote">'. esc_attr($atts['num']) . '</a>';
  $output .= '</sup>';

  return $output;

}

add_shortcode( 'footnote', 'indicators_footnote_shortcode' );

?>

<?php

if ( ! function_exists( '_get_shortcodes' ) ) :

// Return all shortcodes from the post
function _get_shortcodes() {

    $the_content = get_the_content();

    $shortcodes = "";
    $pattern = get_shortcode_regex();
    preg_match_all('/'.$pattern.'/uis', $the_content, $matches);

    for ( $i=0; $i < 40; $i++ ) {

        if ( isset( $matches[0][$i] ) ) {
           $shortcodes[$i] = $matches[0][$i];
        }

    }

    return $shortcodes;

}
endif;
