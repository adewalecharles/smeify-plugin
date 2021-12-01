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

if(! class_exists('SmeifyPlugin')) {
    class SmeifyPlugin
    {

        function __construct()
        {

        }

        public function register()
        {
            add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
            add_action('admin_menu', array($this, 'add_admin_menu'));
        }

        public function add_admin_menu()
        {
            add_menu_page('Smeify', 'Smeify', 'manage_options', 'smeify', array($this, 'smeify_admin_index'), 'dashicons-admin-generic', 6);
        }

        public function smeify_admin_index()
        {
            include_once('pages/admin/index.php');
        }

        public function activate()
        {
            require_once plugin_dir_path(__FILE__) . 'includes/class-smeify-activator.php';
            SmeifyActivator::activate();
        }

        public function deactivate()
        {
            require_once plugin_dir_path(__FILE__) . 'includes/class-smeify-deactivator.php';
            SmeifyDeactivator::deactivate();
        }

        public function enqueue_scripts()
        {
            wp_enqueue_style('smeify-style', plugin_dir_url(__FILE__) . 'assets/style.css');
            wp_enqueue_script('smeify-script', plugin_dir_url(__FILE__) . 'assets/script.js', array('jquery'), '1.0.0', true);
        }

    }
}
if (class_exists('SmeifyPlugin')) {
    $smeifyPlugin = new SmeifyPlugin();
    $smeifyPlugin->register();
}

// Activation
register_activation_hook( __FILE__, array( $smeifyPlugin, 'activate' ) );

// Deactivation
register_deactivation_hook( __FILE__, array( $smeifyPlugin, 'deactivate' ) );
