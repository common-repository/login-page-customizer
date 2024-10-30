<?php

/*
Plugin Name: Login Page Customizer
Plugin URI: http://www.clickitplugins.com
Description: Plugin to beautify your entrance
Version: 1.0
Author: ClickitPlugins
Author URI: http://www.clickitplugins.com
*/



define( 'CLICKLOGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'CLICKLOGIN_VERSION','1.0' );

if ( ! defined( 'ABSPATH' ) ) 
	exit;

include_once( 'includes/clicklogin_customizer.php' );
include_once( 'includes/clicklogin_option_menu.php' );
?>