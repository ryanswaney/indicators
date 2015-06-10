<?php
add_action( 'init', 'create_private_sdgs_tax' );

function create_private_sdgs_tax() {
    register_taxonomy(
        'goal',
        'indicators',
        array(
            'label' => __( 'Related SDGs' ),
            'show_ui' => true,
            'public' => false,
            'rewrite' => false,
            'hierarchical' => true,
        )
    );
}
?>