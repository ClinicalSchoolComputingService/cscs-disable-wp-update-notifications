<?php
/**
 * Plugin Name: CSCS helper functions and other stuff
 * Plugin URI:
 * Description: CSCS Helper WP functions and STUFF 
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
* Contents
*
*  1. Disable auto update notifications for plugins
*  2. Remove promote to admin option in user editor - for non administrator role users
*
*/



/**
 * If this file is accessed directory, then abort.
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 *  1. Disable auto update notifications for plugins
 */

add_filter( 'auto_plugin_update_send_email', '__return_false' );

/**
 * Disable auto update notifications for themes
 */

add_filter( 'auto_theme_update_send_email', '__return_false' );


/**
* 2. Remove promote to admin option in user editor - for non administrator role users
*/

// Remove Administrator role from roles list
add_action( 'editable_roles' , 'hide_adminstrator_editable_roles' );
function hide_adminstrator_editable_roles( $roles ){
    if ( isset( $roles['administrator'] ) && !current_user_can('level_10') ){
        unset( $roles['administrator'] );
    }
    return $roles;
}