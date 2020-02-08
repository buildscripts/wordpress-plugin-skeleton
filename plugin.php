<?php
/**
 * Plugin Name: _Buildscripts_Plugin_Skeleton_Package
 * Plugin URI:  http://wordpress.org/plugins
 * Description: _Buildscripts_Plugin_Skeleton_Package description.
 * Version:     1.0.0
 * Author:      Author
 * Author URI:  http://profiles.wordpress.org/author
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( '_BUILDSCRIPTS_PLUGIN_SKELETON_VERSION', '1.0.0' );

register_activation_hook( __FILE__, '_buildscripts_plugin_skeleton_activate' );
register_deactivation_hook( __FILE__, '_buildscripts_plugin_skeleton_deactivate' );

add_action( 'plugins_loaded', '_buildscripts_plugin_skeleton_init' );

/**
 * Initialize plugin
 *
 * @since  1.0
 */
function _buildscripts_plugin_skeleton_init() {
	require __DIR__ . '/vendor/autoload.php';
	_buildscripts_plugin_skeleton_app();
}


/**
 * Activation code
 *
 * @since  1.0
 */
function _buildscripts_plugin_skeleton_activate() {
	require __DIR__ . '/vendor/autoload.php';
	_buildscripts_plugin_skeleton_app()->get( 'activator' )->run();
}

/**
 * Deactivation code
 *
 * @since  1.0
 */
function _buildscripts_plugin_skeleton_deactivate() {
	require __DIR__ . '/vendor/autoload.php';
	_buildscripts_plugin_skeleton_app()->get( 'deactivator' )->run();
}
