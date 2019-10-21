<?php
/*
Plugin Name: Wordpress Enable Pages Tags
Plugin URI: http://www.webappdesign.gr/
Description: Enables tags in all content
Version: 1.0
Author: Lefteris Katmadas
Author URI: http://www.webappdesign.gr/
License: Free to use and adapt
*/

function enable_tags_all() {
    register_taxonomy_for_object_type('post_tag', 'page');
}

function enable_tags_query($wp_query) {
    if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

add_action('init', 'enable_tags_all');
add_action('pre_get_posts', 'enable_tags_query');