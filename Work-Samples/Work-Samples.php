<?php
/*
Plugin Name: Work Samples
Plugin URI: N/A
Description: A plugin for the work posts.
Version: 1.0
Author: Guillermo Vargas
Author URI: http://allcityelp.com/
License: GPLv2
*/

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'work_sample',
        array(
            'labels' => array(
                'name' => __( 'Work Samples' ),
                'singular_name' => __( 'Work Sample' )
            ),
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
        'menu_icon' => plugins_url( 'images/icon.png', __FILE__ )
        )
    );
}

?>


