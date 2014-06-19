<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Grey Hat Design Starter
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function grey_hat_design_starter_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'grey_hat_design_starter_jetpack_setup' );
