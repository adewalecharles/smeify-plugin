<?php
/**
 * @package SmeifyPlugin
 */
namespace Includes\Pages;

use Includes\Base\BaseController;
use Includes\Api\Wordpress\SettingsApi;

class Admin extends BaseController
{
    public $settings;
    public $subpages = array();

    public function __construct()
    {
        $this->settings = new SettingsApi();
    }

    public function register()
    {
       $pages = array(
           array (
                'page_title' => 'Smeify',
               'menu_title' => 'Smeify',
               'capability' => 'manage_options',
               'menu_slug' => 'smeify',
               'callback' => function(){echo '<h1>Smeify</h1>';},
               'icon_url' => 'dashicons-store',
               'position' => 6
           )
       );
       $this->subpages = array(
           array(
               'parent_slug' => 'smeify',
               'page_title' => 'Data Plans',
               'menu_title' => 'Data Plans',
               'capability' => 'manage_options',
               'menu_slug' => 'smeify_data_plans',
               'callback' => function(){echo '<h1>Data Plans</h1>';},
           ),
           array(
               'parent_slug' => 'smeify',
               'page_title' => 'VTU Discount',
               'menu_title' => 'VTU',
               'capability' => 'manage_options',
               'menu_slug' => 'smeify_vtu_discounts',
               'callback' => function(){echo '<h1>VTU Discount</h1>';},
           ),
           array(
               'parent_slug' => 'smeify',
               'page_title' => 'SAS Discount',
               'menu_title' => 'SAS',
               'capability' => 'manage_options',
               'menu_slug' => 'smeify_sas_discounts',
               'callback' => function(){echo '<h1>SAS Discount</h1>';},
           ),
           array(
               'parent_slug' => 'smeify',
               'page_title' => 'Bank Transfer Requests',
               'menu_title' => 'Bank Transfer',
               'capability' => 'manage_options',
               'menu_slug' => 'smeify_bank_transfer_requests',
               'callback' => function(){echo '<h1>Bank Transfer</h1>';},
           ),
           array(
               'parent_slug' => 'smeify',
               'page_title' => 'Bank List',
               'menu_title' => 'Bank List',
               'capability' => 'manage_options',
               'menu_slug' => 'smeify_bank_list',
               'callback' => function(){echo '<h1>Bank List</h1>';},
           ),
           array(
               'parent_slug' => 'smeify',
               'page_title' => 'Transactions',
               'menu_title' => 'Transactions',
               'capability' => 'manage_options',
               'menu_slug' => 'smeify_transactions',
               'callback' => function(){echo '<h1>Transactions</h1>';},
           ),
           array(
               'parent_slug' => 'smeify',
               'page_title' => 'Settings',
               'menu_title' => 'Settings',
               'capability' => 'manage_options',
               'menu_slug' => 'smeify_settings',
               'callback' => function(){echo '<h1>Settings</h1>';},
           ),
       );

       $this->settings->addPages($pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }

    public function plugin_action_links($links)
    {
        $links[] = '<a href="' . admin_url('admin.php?page=smeify') . '">Settings</a>';
        return $links;
    }

}