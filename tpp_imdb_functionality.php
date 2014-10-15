<?php 
/*
Plugin Name: TPP IMDB-esk functionality
Plugin URI: http://thepageantplanet.com
Description: Functionality for ordering users and pageants in IMDB fashion
Version: 1.0
Author: Ingage
Author URI: http://weingage.com/
*/

require dirname( __FILE__ ) . '/tpp_imdb_shortcodes.php';

// turn off admin bar
add_filter('show_admin_bar', '__return_false');

function create_competitor_relationship () {
    p2p_register_connection_type( array(
        'name' => 'pageant_competitors',
        'from' => 'pageants',
        'to'   => 'user'
    ));
}
add_action('init', 'create_competitor_relationship');

function single_pageant_template ($template) {
    $post_types = array ( 'pageants' );

    if (is_singular( $post_types ) && !file_exists( get_stylesheet_directory() . '/single-pageant.php' ))
        $template = plugin_dir_path(__FILE__) . 'includes/single-pageant.php';

    return $template;
}
add_filter('template_include', 'single_pageant_template');