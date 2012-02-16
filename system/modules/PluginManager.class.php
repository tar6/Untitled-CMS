<?php
/**
* Last Updated: 02-16-2012
*
* @author	Joshua_F
* @package	{package}
* @version	1.0.0
* @link		{link}
* 
*/

class PluginManager {

	static public $DB = NULL;
	static public $activePlugins = array();
	static public $pluginDir = NULL;
	
	public function __construct(Database $database) {
		PluginManager::$DB = $database;
	}
	
	static function init() {
		
	}
	
}

?>