<?php
/*
Plugin Name: WordPress Health And Server Condition
Plugin URI: https://gigsix.com
Description: Display WP-Condition in Chart for Database Performance, Memory Performance, Site Performance, and Social Performance. Requires PHP 7+
Version: 4.1.0
Author: alisaleem252
Author URI: https://alisaleem252.com
*/

	defined( 'ABSPATH' ) || exit;
	define('wpcondi_ABSPATH', dirname(__FILE__) );
	define('wpcondi_URL', plugin_dir_url( __FILE__ ) );
	define('wpcondi_serviceURL', 'https://alisaleem252.com/#hire-me' );

	require_once(wpcondi_ABSPATH.'/includes/helper.php');
	require_once(wpcondi_ABSPATH.'/includes/class.WP_Page_Condition_Stats.php');

$WP_Page_Condition_Stats = new WP_Page_Condition_Stats();