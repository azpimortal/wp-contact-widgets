<?php

namespace WPCW;

if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

class Social_Block {

	public function __construct() {

		add_action( 'enqueue_block_editor_assets', array( $this, 'social_block_scripts' ) );

		add_action( 'enqueue_block_assets', array( $this, 'social_block_styles' ) );

	}


	/**
	 * Enqueue admin block scripts and styles.
	 *
	 * @action enqueue_block_editor_assets
	 */
	function social_block_scripts() {

		wp_enqueue_script( 'contact-widgets-social-block', plugins_url( 'social-block.js', __FILE__ ), array( 'wp-blocks', 'wp-i18n', 'wp-element' ), Plugin::$version );

		wp_enqueue_style( 'contact-widgets-social-block-frontend', plugins_url( 'social-block.css', __FILE__ ), array( 'wp-edit-blocks' ), Plugin::$version );

	}

	/**
	 * Enqueue frontend styles.
	 *
	 * @action enqueue_block_assets
	 */
	public function social_block_styles() {

		wp_enqueue_style( 'contact-widgets-social-block-frontend', plugins_url( 'social-block.css', __FILE__ ), array( 'wp-edit-blocks' ), Plugin::$version );

	}

}

new Social_Block();