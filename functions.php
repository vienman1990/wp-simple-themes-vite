<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;  

// funtions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php

define('IS_VITE_DEVELOPMENT', true);

require get_template_directory() .  "/inc/inc.vite.php";


/**
 * Dev
 */
if (wp_get_environment_type() == 'local') {
	require get_template_directory() . '/inc/dev.php';
}


/**
 * Essential theme supports
 * */
function theme_setup(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    add_theme_support( 'menus' );

    /** post formats */
    // $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    // add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action('after_setup_theme','theme_setup');