<?php
/*
Plugin Name:  First Plugin
Plugin URI:   https://developer.wordpress.org/plugins/the-basics/
Description:  Basic WordPress Plugin Header Comment
Version:      1.0.0
Author:       shuvo.org
Author URI:   https://developer.wordpress.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  infobiz
Domain Path:  /languages
*/


/**
 * What are you doing here, Silly man :D
 */

if(! defined('ABSPATH')) die;

/*-----------------------*/
/* Shortcodes
/*-----------------------*/

foreach(glob(plugin_dir_path(__FILE__) . '/shortcodes/*.php') as $file){
    require_once $file;
}

/*-----------------------*/
/* custom-posts
/*-----------------------*/

foreach(glob(plugin_dir_path(__FILE__) . '/custom-posts/*.php') as $file){
    require_once $file;
}


/*-----------------------*/
/* Visual Composer add-ons
/*-----------------------*/

foreach(glob(plugin_dir_path(__FILE__) . '/vc-addons/*.php') as $file){
    require_once $file;
}
