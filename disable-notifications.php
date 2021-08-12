<?php
/**
 * Plugin Name: Disable update notifications
 * Plugin URI:
 * Description: Disable WP plugin and theme update email notifications
 * Version:     1.0.0
 * Author:      Dave Tasker (dt216@cam.ac.uk)
 * Author URI:
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 */


/**
 * If this file is accessed directory, then abort.
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Disable auto update notifications for plugins
 */

add_filter( 'auto_plugin_update_send_email', '__return_false' );

/**
 * Disable auto update notifications for themes
 */

add_filter( 'auto_theme_update_send_email', '__return_false' );