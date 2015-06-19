<?php
add_action( 'init', 'create_private_sdgs_tax' );

function create_private_sdgs_tax() {
    register_taxonomy(
        'goal',
        array( 'indicators', 'targets' ),
        array(
            'label' => __( 'Related SDGs' ),
            'show_ui' => true,
            'public' => true,
            'rewrite' => array( 'slug' => 'goals',  'with_front' => false ),
            'hierarchical' => true,
            'has_archive' => true
        )
    );

}
?>