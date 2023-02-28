<?php
if ( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page(
        array(
            'page_title'  => 'Настройки сайта',
            'menu_title'  => 'Настройки сайта',
            'menu_slug'   => 'theme-settings',
            'capability'  => 'manage_options',
            'parent_slug' => '',
            'position'    => false,
            'icon_url'    => false,
            'redirect'    => false,
        )
    );



    /* acf_add_options_sub_page(
         array(
             'page_title'  => 'Header',
             'menu_title'  => 'Header',
             'parent_slug' => 'theme-settings',
         )
     );*/

// ACF Blocks

    add_filter( 'block_categories_all' , function( $categories ) {

        // Adding a new category.
        $categories[] = array(
            'slug'  => 'theme-blocks',
            'title' => 'CLIOR MORELLI Blocks'
        );

        return $categories;
    } );
    add_action('acf/init', 'podkova_acf_init_block_types');
    function podkova_acf_init_block_types() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a slider block.
            acf_register_block_type(array(
                'name'              => 'slider-1',
                'title'             => __('Слайдер тип 1'),
                'description'       => __('Слайдер с видео'),
                'render_template'   => 'blocks/slider-1.php',
                'category'          => 'theme-blocks',
                'icon'              => 'images-alt2',
                'keywords'          => array( 'banner', 'first','header' ),
            ));


        }
    }



}
// ACF functions here
