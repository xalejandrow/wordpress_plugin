<?php
/*
Plugin Name: Prueba
Plugin URL:http://vps159188.vps.ovh.ca/wordpress
Description: Esto es un plugin de prueba AW
Version: 0.0.1
Requires at least:5.6.1
Author: Alew
Author URL: http://vps159188.vps.ovh.ca/wordpress
License:MIT
License URL:http://vps159188.vps.ovh.ca/wordpress
*/ 

if(!defined('ABSPATH')) exit;


define("PRUEBA_DIR",__FILE__);

define("PRUEBA_PLUGIN_DIR",plugin_dir_path(PRUEBA_DIR));
define("PRUEBA_PLUGIN_URL",plugin_dir_url(PRUEBA_DIR));
define("PRUEBA_PLUGIN_NAME","PRUEBA");
define("PRUEBA_CANTIDAD_ELEMENTOS",12);
require_once dirname(__FILE__) . '/class/order.class.php';



add_action('admin_menu','MenuPrueba');

function MenuPrueba(){
    add_menu_page(
        'Prueba WordPress',
        'Prueba WP',
        'manage_options', 
        plugin_dir_path(__FILE__).'admin/list.php',
        null, 
         plugin_dir_url(__FILE__).'admin/img/icon.png',
         '1' 
    );

}


?>

