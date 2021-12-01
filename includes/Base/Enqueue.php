<?php

namespace Includes\Base;

class Enqueue extends BaseController
{
    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    public function enqueue()
    {
        wp_enqueue_style('smeify-style', $this->plugin_url . 'assets/style.css');
        wp_enqueue_script('smeify-script', $this->plugin_url . 'assets/script.js');
    }
}