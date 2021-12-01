<?php
/**
 * @package SmeifyPlugin
 */
namespace Includes\Pages;

use Includes\Base\BaseController;

class Admin extends BaseController
{
    public function register()
    {
        add_action('admin_menu', array($this, 'add_admin_menu'));
    }

    public function plugin_action_links($links)
    {
        $links[] = '<a href="' . admin_url('admin.php?page=smeify') . '">Settings</a>';
        return $links;
    }

    public function add_admin_menu()
    {
        add_menu_page('Smeify', 'Smeify', 'manage_options', 'smeify', array($this, 'smeify_admin_index'), 'dashicons-store', 6);
    }

    public function smeify_admin_index()
    {
        require_once $this->plugin_path . '/pages/admin/admin.php';
    }
}