<?php

/**
 * Uninstall script for the plugin
 *
 * @package    smeify
 *
 */


if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

global $wpdb;

$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}smeify_settings");
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}smeify_data");
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}smeify_vtu");
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}smeify_sas");
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}smeify_wallet");
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}smeify_transactions");


