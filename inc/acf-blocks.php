<?php
// ACF Blocks

function acf_blocks_init()
{

    acf_register_block_type(array(
        'name'              => 'hero_img',
        'title'             => __('Hero'),
        'render_template'   => '/template-parts/blocks/hero.php',
        'category'          => 'pensacola-blocks',
        'mode'              => 'edit',
    ));
    
    acf_register_block_type(array(
        'name'              => 'vertical_tabs',
        'title'             => __('Vertical Tabs'),
        'render_template'   => '/template-parts/blocks/vertical-tabs.php',
        'category'          => 'pensacola-blocks',
        'mode'              => 'edit',
    ));


}
// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'acf_blocks_init');
}


