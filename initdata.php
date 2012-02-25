<?php
/**
 * Last Updated: 02-16-2012
 *
 * @author	Joshua_F
 * @package	Shadow CMS
 * @version	1.0.0
 * @link	http://shadowscripts.net
 *
 */

//--------------------------------------------------------------------------
// Folder and File Names
//--------------------------------------------------------------------------

/**
 * ADMIN_DIRECTORY, PLUGINS_DIRECTORY, STYLE_DIRECTORY
 * The name of the directories
 */
define( "ADMIN_DIRECTORY" , "admin" );
define( "PLUGINS_DIRECTORY" , "plugins" );
define( "STYLE_DIRECTORY" , "themes" );

//--------------------------------------------------------------------------
// Main Paths
//--------------------------------------------------------------------------

/**
 * ROOT_PATH
 * The main path where the script is installed
 */
define( "ROOT_PATH", str_replace( "\\", "/", dirname( __FILE__ ) ) . "/" );

/**
 * ADMIN_PATH
 * The path to where the admincp is located
 */
define( "ADMIN_PATH" , ROOT_PATH . ADMIN_DIRECTORY . "/" );

/**
 * PLUGINS_PATH
 * The path to where the plugins directory is located
 */
define( "PLUGINS_PATH" , ROOT_PATH . PLUGINS_DIRECTORY . "/" );

/**
 * STYLE_PATH
 * The path to where the theme directory is located
 */
define( "STYLE_PATH" , ROOT_PATH . STYLE_DIRECTORY . "/" );

?>