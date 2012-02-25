<?php
/**
 * Last Updated: 02-17-2012
 *
 * @author	Joshua_F
 * @package	Shadow CMS
 * @version	1.0.0
 * @link	http://shadowscripts.net
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

	/**
	 * Iniciates the plugins manager
	 * @param $pluginDir The plugins directory
	 */
	static function init($pluginDir = NULL) {
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
			PluginManager::$dbPlugins[$plug['file']] = $plug['active'];
		}

		foreach(PluginManager::$pluginList as $plugin) {
			if(PluginManager::$dbPlugins[$plugin] == 1)
				PluginManager::register($plugin);
		}
	}

	/**
	 * Includes all plugins on a page
	 * @param unknown_type $plugin
	 */
	static private function register($plugin) {
		if(file_exists(PluginManager::$pluginDir . $plugin . '/' . $plugin .'.class.php')) {
			require_once(PluginManager::$pluginDir . $plugin . '/' . $plugin .'.class.php');
			array_push(PluginManager::$activePlugins, $plugin);
		}
	}

	/**
	 * Declares where a hook is
	 * @param $checkpoint The name of the hook
	 */
	static function hook($checkpoint) {
		foreach(PluginManager::$activePlugins as $plugin) {
			if(@call_user_func(array($plugin, $checkpoint)))
				die("Error with plugin ($plugin) at checkpoint($checkpoint).");
		}
	}
	
	/**
	 * Gets a plugins information
	 * @param $plugin The plugin name
	 */
	static function getInfo($plugin) {
		$getInfo = PluginManager::$DB->query("SELECT * FROM `plugins` WHERE `file` = '".$plugin."'");
		$info = mysql_fetch_assoc($getInfo);
		return array("name" => $info['name'], "author" => $info['author'], "description" => $info['description'], "version" => $info['version']);
	}

}

?>