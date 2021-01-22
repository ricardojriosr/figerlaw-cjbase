<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'ctaform',
            'title'             => __('CTA Form'),
            'description'       => __('A custom CTA form block.'),
            'render_template'   => 'template-parts/blocks/cta-form.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'ctaform', 'quote' ),
        ));
    }
}

?>
