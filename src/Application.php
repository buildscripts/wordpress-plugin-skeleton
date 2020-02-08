<?php

namespace _Buildscripts_Plugin_Skeleton;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Application Class
 *
 * @package _Buildscripts_Plugin_Skeleton_Package
 * @since 1.0
 */
class Application extends Container {

	/**
	 * Application instance
	 *
	 * @var Application
	 */
	protected static $instance;

	/**
	 * Get Application instance
	 *
	 * @return self
	 */
	public static function get_instance() {
		if ( is_null( static::$instance ) ) {
			static::$instance = new static;
		}
		return static::$instance;
	}

	/**
	 * Init application
	 */
	public function __construct() {
		$this->load_textdomain();
		$this->setup_version();
	}

	/**
	 * Load textdomain
	 */
	protected function load_textdomain() {
		load_plugin_textdomain(
			'_buildscripts-plugin-skeleton',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}

	/**
	 * Setup version
	 */
	protected function setup_version() {
		$this->share( 'version', _BUILDSCRIPTS_PLUGIN_SKELETON_VERSION );
	}

}
