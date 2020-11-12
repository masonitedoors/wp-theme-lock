<?php
/**
 * Plugin Name:  WP Force Theme
 * Plugin URI:   https://github.com/masonitedoors/wp-force-theme/
 * Description:  Forces WordPress to always load the wp-headless-theme.
 * Version:      1.0.0
 * Author:       Masonite
 * Author URI:   https://www.masonite.com/
 * License:      MIT License
 */

add_action(
	'setup_theme',
	function() {
		$theme_directory_name = apply_filters( 'wp_theme_lock', 'wp-headless-theme' );

		/**
		 * Filters the name of the current theme.
		 */
		add_filter( 'template', function() use ( $theme_directory_name ) {
			return $theme_directory_name;
		});

		/**
		 * Filters the name of current stylesheet.
		 */
		add_filter( 'stylesheet', function() use ( $theme_directory_name )  {
			return $theme_directory_name;
		});
	},
	-1
);
