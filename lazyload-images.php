<?php
/**
 * Plugin Name: LazyLoad Images
 * Plugin URI: https://example.com/lazyload-images
 * Description: Un plugin WordPress pour charger les images en lazyload.
 * Version: 1.0.0
 * Author: Guillaume Souillard
 * Author URI: https://example.com
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function lazyload_enqueue_scripts() {
    wp_enqueue_script('lazyload-js', plugin_dir_url(__FILE__) . 'js/lazyload.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'lazyload_enqueue_scripts');

function lazyload_filter_images($content) {
    $content = preg_replace('/<img(.*?)src="(.*?)"(.*?)>/i', '<img$1src="" data-src="$2" class="lazyload"$3>', $content);
    return $content;
}
add_filter('the_content', 'lazyload_filter_images');
add_filter('post_thumbnail_html', 'lazyload_filter_images');
add_filter('widget_text', 'lazyload_filter_images');

