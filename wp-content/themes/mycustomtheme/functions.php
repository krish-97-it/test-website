<?php

    add_action('after_setup_theme', 'remove_admin_bar');
    function remove_admin_bar() {
    // if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    // }
    }

    add_theme_support( 'post-thumbnails' );

    add_action( 'wp_enqueue_scripts', 'custom_css_js');
    function custom_css_js() {
        $version   =   1.0;
        // css files
        wp_enqueue_style( 'style',  get_template_directory_uri(). '/style.css', array(), $version );

        // js files
        wp_enqueue_script('custom', get_template_directory_uri().'/all.js', array(), $version, true);
    }

    // get custom field data
    function get_custom_seo_content($post_id){
        $get_custom_field_data   =   get_fields($post_id);
        return $get_custom_field_data;
    }

    // Get the featured images
    function getPostFeaturedImage($post_id){
        $img_url    = '';
        if(get_the_post_thumbnail_url($post_id,'full') == ''){
            $img_url    =   'https://math-media.byjusfutureschool.com/bfs-math/2023/08/28130437/default-post-template-two.webp';
        }else{
            $img_url    =   get_the_post_thumbnail_url($post_id,'full');
        }
        return $img_url;
    }

    /* Custom Post Type Start */
    function create_posttype() {
        register_post_type( 'scooter',
            // CPT Options
            array(
                'labels'        => array('name' => __( 'scooter' ), 'singular_name' => __( 'Scooter' ),),
                'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes', 'revisions', 'author' ),
                // 'taxonomies'    => array('category' ),
                'public'        => true,
                'has_archive'   => false,
                'rewrite'       => array('slug' => 'scooter'),
            )
        );
    }

    // Hooking up our function to theme setup
    add_action( 'init', 'create_posttype' );
    /* Custom Post Type End */
?>