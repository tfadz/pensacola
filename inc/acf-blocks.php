<?php
// ACF Blocks

function acf_blocks_init()
{

    acf_register_block_type(array(
        'name'              => 'hero_slider',
        'title'             => __('Hero'),
        'render_template'   => '/template-parts/blocks/hero-slider.php',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/assets/images/logo.svg' ),

    ));
    
    acf_register_block_type(array(
        'name'              => 'vertical_tabs',
        'title'             => __('Vertical Tabs'),
        'render_template'   => '/template-parts/blocks/vertical-tabs.php',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/assets/images/logo.svg' ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'parallax',
        'title'             => __('Parallax Image'),
        'render_template'   => '/template-parts/blocks/parallax.php',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/assets/images/logo.svg' ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'vertical_tabs',
        'title'             => __('Vertical Tabs'),
        'render_template'   => '/template-parts/blocks/vertical-tabs.php',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/assets/images/logo.svg' ),

    ));
    
    acf_register_block_type(array(
        'name'              => 'cards',
        'title'             => __('Cards'),
        'render_template'   => '/template-parts/blocks/cards.php',
        'mode'              => 'edit',
        'icon' => file_get_contents( get_template_directory() . '/assets/images/logo.svg' ),

    ));


}
// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'acf_blocks_init');
}


