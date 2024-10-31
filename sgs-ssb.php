<?php
/*
   Plugin Name: SGS Social Sharing Buttons
   Plugin URI: https://wordpress.org/plugins/search/sgs/
   Description: SGS Social Sharing Buttons is a lightweight (6kb) Social Sharing plugin that is used to add fixed social sharing buttons to your WordPress site. After installation, no configuration is required. It seamlessly works with AMP and non-AMP pages and appears on all site's pages.
   Version: 1.6
   Author: Adebowale Adekoya
   Required WordPress Version: 3.0
   Required PHP Version: 5.6
   Author URI: https://deborian.com
   Tag: social sharing buttons, facebook, twitter, linkedin, reddit, pinterest, whatsapp, amp, gmail
   License: GPL2       
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'includes/sgs-ssb-css.php';
require_once plugin_dir_path(__FILE__) . 'includes/sgs-ssb-html.php';


