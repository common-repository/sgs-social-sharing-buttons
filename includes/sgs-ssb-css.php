<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


add_action('wp_enqueue_scripts', 'sgs_ssb_enqueue_styles');


if (!function_exists('sgs_ssb_css')) {

function sgs_ssb_enqueue_styles() {
    wp_enqueue_style('sgs-ssb-styles', plugin_dir_url(__FILE__) . 'css/sgs-ssb-css.css');
}

}
