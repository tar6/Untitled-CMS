<?php
/**
 * Last Updated: 02-26-2012
 *
 * @author	Joshua_F
 * @package	Shadow CMS
 * @version	1.0.0
 * @link	http://shadowscripts.net
 *
 */

class PageManager {

	static public $template;
	static public $styleDirectory;
	static public $styleName;
	static public $vars;
	static public $content;

	function __construct($styleDirectory, $styleName, $vars, $content) {
		PageManager::$styleDirectory = $styleDirectory . "/";
		PageManager::$styleName = $styleName;
		PageManager::$vars = $vars;
		PageManager::$content = $content;
	}
	
	/**
	 * Loads a page from the theme directory
	 * @param $page The page to load
	 * @param $type The page type, 0 = inpage content, 1 = the page it's self
	 */
	static function load($page, $type = 0) {
		if (empty($page))
			$page = "index";
		if (!file_exists(PageManager::$styleDirectory . PageManager::$styleName . "/pages/" . $page . ".tpl.php"))
			$page = "404";
		PageManager::$template = file_get_contents(PageManager::$styleDirectory . PageManager::$styleName . "/pages/" . $page . ".tpl.php");
		PageManager::set();
		PageManager::publish($type);
	}
	
	/**
	 * Sets phasers to be replaced with the correct thing
	 */
	static function set() {
		if (count(PageManager::$vars) != count(PageManager::$content))
			die("Missmatching replacements!");
		for ($i = 0; $i < count(PageManager::$vars); $i++)
			PageManager::$template = str_replace("{".PageManager::$vars[$i]."}", PageManager::$content[$i], PageManager::$template);
	}

	/**
	 * Displays the page
	 * @param $type
	 */
	static function publish($type) {
		if ($type == 1)
		eval("?>".PageManager::$template."<?");
		else
		echo PageManager::$template;
	}

}

?>