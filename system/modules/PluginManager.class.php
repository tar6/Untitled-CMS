<?php
/**
* Last Updated: 02-16-2012
*
* @author	Joshua_F
* @package	{package}
* @version	1.0.0
* @link		{link}
* 
* Thanks to Mikelmao for most of this script.
* @link http://www.mikelmao.com/
*/

class PluginManager {

	static public $DB = NULL;
	static public $pluginDir = NULL;
	static public $activePlugins = array();
	static public $pluginList = array();
	static public $dbPlugins = array();
	
	public function __construct(Database $database) {
		PluginManager::$DB = $database;
	}
	
	static function init($pluginDir = NULL) {
		if (PluginManager::$pluginDir == NULL)
			PluginManager::$pluginDir = $pluginDir;
		
		if (PluginManager::$pluginDir == NULL)
			die("The plugin directory doesnt exist.");
		
		if($dirHandle = opendir(PluginManager::$pluginDir)) {
			while($file = readdir($dirHandle)) {
				if(is_dir(PluginManager::$pluginDir . $file) && $file != '.' && $file != '..')
				array_push(PluginManager::$pluginList, $file);
			}
		}
		
		$getPlugins = PluginManager::$DB->query("SELECT * FROM `plugins`");
		while($plug = mysql_fetch_array($getPlugins)) {
			PluginManager::$dbPlugins[$plug['name']] = $plug['active'];
		}
		
		foreach(PluginManager::$pluginList as $plugin) {
			if(PluginManager::$dbPlugins[$plugin] == 1)
			PluginManager::register($plugin);
		}
	}
	
	static private function register($plugin) {
		if(file_exists(PluginManager::$pluginDir . $plugin . '/' . $plugin .'.class.php')) {
			require_once(PluginManager::$pluginDir . $plugin . '/' . $plugin .'.class.php');
			array_push(PluginManager::$activePlugins, $plugin);
		}
	}
	
	static function hook($checkpoint) {
		foreach(PluginManager::$activePlugins as $plugin) {
			if(@call_user_func(array($plugin, $checkpoint)))
			throw new Exception('Enable to hook plugin ('. $plugin .') to checkpoint ('. $checkpoint .')');
		}
	}
	
}

?>