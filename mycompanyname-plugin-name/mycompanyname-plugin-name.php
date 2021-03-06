<?php
/*
Plugin Name: WordPress.org Plugin
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Basic WordPress Plugin Header Comment
Version:     20160911
Author:      WordPress.org
Author URI:  https://developer.wordpress.org/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/


/**
 * Security
 * prevent direct access to file
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


/**
 * Translations
 */
load_plugin_textdomain('your-unique-name', false, basename( dirname( __FILE__ ) ) . '/languages' );







