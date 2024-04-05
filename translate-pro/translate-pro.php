<?php

/*
 * Plugin Name:       TRanslater PRO
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Author:            Starkw
 * Author URI:        https://author.example.com/
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


register_activation_hook(__FILE__, 'translate_pro_activate');
register_deactivation_hook(__FILE__, 'translate_pro_deactivate');
register_uninstall_hook(__FILE__, 'translate_pro_delete');


function translate_pro_activate()
{
    include(plugin_dir_path(__FILE__) . 'tables/create_table.php');

    //Keys
    // add_option('translate_pro_upload_care', '');

}

function translate_pro_deactivate()
{

    //Delete Keys
    //delete_option('translate_pro_upload_care', '');
    include(plugin_dir_path(__FILE__) . 'tables/delete_table.php');
}
function translate_pro_delete()
{
    // include(plugin_dir_path( __FILE__ ).'tables/delete_table.php' );
}

// menu function
function form_data_menu()
{
    add_menu_page("Translater-Pro", "Translater-Pro", "manage_options", 'my-plugin-slug', "plugin_page_content", "dashicons-tickets", 59);

    // add_menu_page(
    //     'My Plugin',
    //     'My Plugin',
    //     'manage_options',
    //     'my-plugin-slug',
    //     'my_plugin_page'
    // );

    // Add a submenu item
    add_submenu_page(
        'my-plugin-slug',
        'Dictionary',
        'Dictionary',
        'manage_options',
        'my-plugin-submenu-slug',
        'my_submenu_page'
    );
}
function my_submenu_page()
{
    include(plugin_dir_path(__FILE__) . 'admin/sub_menu.php');
}

function plugin_page_content()
{
    include(plugin_dir_path(__FILE__) . 'admin/main_page.php');
}

add_action("admin_menu", "form_data_menu");

// add_action('wp_footer', 'custom_wp_qury');
//  function custom_wp_qury(){

// include(plugin_dir_path( __FILE__ ).'public/hw_pro_submit.php' );
// }
// functions.php

function custom_shortcode_function()
{
}

add_shortcode('custom_shortcode', 'custom_shortcode_function');
