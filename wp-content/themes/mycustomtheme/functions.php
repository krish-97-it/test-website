<?php
    add_theme_support( 'post-thumbnails' );

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
        register_post_type( 'news',
            // CPT Options
            array(
            'labels' => array(
            'name' => __( 'scooter' ),
            'singular_name' => __( 'Scooter' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'scooter'),
            )
        );
    }
    // Hooking up our function to theme setup
    add_action( 'init', 'create_posttype' );
    /* Custom Post Type End */
?>