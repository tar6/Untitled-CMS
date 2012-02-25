<?php
/**
 * Last Updated: 02-17-2012
 *
 * @author	Joshua_F
 * @package	Shadow CMS
 * @version	1.0.0
 * @link	http://shadowscripts.net
 *
 */

class StyleManager {
	
	public $defaultTheme = "default";
	public $DB = NULL;
	
	static function __construct(Database $database) {
		StyleManager::$DB = $database;
	}
	
	
	
}

?>