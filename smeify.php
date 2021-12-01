<?php
/*
Plugin Name: Smeify
Plugin URI: https://smeify.com
Description: A WordPress plugin for smeify.com, Smeify is a Stable Automated Solution for Airtime and Data businesses in Nigeria
Version: 1.0
Author: Adewale Ogundiran Charles
Author URI: https://linkedin.com/in/adewalecharles
License: GPLv2 or later
Text Domain: Smeify
*/
defined( 'ABSPATH' ) or die( 'Hi there!  I\'m just a plugin, not much I can do when called directly.' );

/**
 * Autoloader
 */
if (file_exists(dirname(__FILE__).'/vendor/autoload.php')) {
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
function smeify_activate() {
    Includes\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'smeify_activate' );

/**
 * The code that runs during plugin deactivation
 */
function smeify_deactivate() {
    Includes\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'smeify_deactivate' );

/**
 * Function to initialize all the plugin classes
 */
if (class_exists('Includes\\Init')) {
    Includes\Init::register_services();
}