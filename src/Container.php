<?php

namespace _Buildscripts_Plugin_Skeleton;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Container Class
 *
 * Currently, only singletons are needed and supported.
 *
 * @package _Buildscripts_Plugin_Skeleton_Package
 * @since 1.0
 */
class Container {

	/**
	 * Singleton definitions
	 *
	 * @var array
	 */
	protected $definitions = [];

	/**
	 * Add an item to the container as singleton
	 *
	 * @param string $id       Object identifier.
	 * @param mixed  $concrete Implementation.
	 */
	public function share( $id, $concrete ) {
		$this->definitions[ $id ] = $concrete;
	}

	/**
	 * Get definition
	 *
	 * @param string $id Object identifier.
	 *
	 * @return mixed
	 */
	public function get( $id ) {
		if ( isset( $this->definitions[ $id ] ) ) {
			if ( is_callable( $this->definitions[ $id ] ) ) {
				$this->definitions[ $id ] = $this->definitions[ $id ]();
			}
			return $this->definitions[ $id ];
		}
	}

}

