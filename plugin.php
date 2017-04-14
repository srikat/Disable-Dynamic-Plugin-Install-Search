<?php
/**
 * Plugin Name: Disable Dynamic Search On Plugins > Add New
 * Plugin URI: https://github.com/srikat/Disable-Dynamic-Plugin-Install-Search
 * Description: Disable search as you type when searching for a plugin on Plugins > Add New screen.
 * Version: 1.0.0
 * Author: Sridhar Katakam
 * Author URI: https://sridharkatakam.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: srikat/Disable-Dynamic-Plugin-Install-Search
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'admin_enqueue_scripts', 'sk_disable_dynamic_search' );
/**
 * Disable search as you type on Plugins > Add New.
 */
function sk_disable_dynamic_search( $hook ) {
	// if this is not the /plugin-install.php admin page, abort.
	if ( 'plugin-install.php' !== $hook ) {
		return;
	}

	wp_enqueue_script( 'disable-plugin-install-search', plugin_dir_url( __FILE__ ) . 'assets/js/main.js', array( 'jquery' ), '1.0.0', true );
}
