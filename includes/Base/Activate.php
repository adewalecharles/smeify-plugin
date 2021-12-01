<?php
/**
 * @package SmeifyPlugin
 */
namespace Includes\Base;
class Activate {
    public static function activate() {
        // Do something when plugin is activated
        flush_rewrite_rules();
    }
}