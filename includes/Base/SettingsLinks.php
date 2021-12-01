<?php

namespace Includes\Base;

class SettingsLinks extends BaseController
{
    public function register()
    {
        add_filter('plugin_action_links_' . $this->plugin, array($this, 'settings_link'));
    }

    public function settings_link($links)
    {
        $links[] = '<a href="' . admin_url('admin.php?page=smeify') . '">Settings</a>';
        return $links;
    }
}