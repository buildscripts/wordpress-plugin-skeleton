<?php
/**
 * Helper functions
 *
 * @package _Buildscripts_Plugin_Skeleton_Package
 * @since 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( '_buildscripts_plugin_skeleton_app' ) ) {
	/**
	 * Get application instance
	 *
	 * @return _Buildscripts_Plugin_Skeleton\Application
	 */
	function _buildscripts_plugin_skeleton_app() {
		return _Buildscripts_Plugin_Skeleton\Application::get_instance();
	}
}
