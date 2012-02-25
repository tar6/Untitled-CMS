<?php
/**
 * Last Updated: 02-24-2012
 *
 * @author	Joshua_F
 * @package	Shadow CMS
 * @version	1.0.0
 * @link	http://shadowscripts.net
 *
 */

class StyleManager {
	
	static public $defaultTheme	= "defaultTheme";
	static public $DB			= NULL;
	static public $themePath	= NULL;
	
	function __construct(Database $database, $stylePath) {
		StyleManager::$DB = $database;
		StyleManager::$themePath = $stylePath;
	}
	
	/**
	 * Gets the css for a specific styleKey
	 * @param $group The style group
	 * @param $theme The themes' style key
	 */
	static function getCSS($group = NULL, $theme = NULL) {
		if ($group == NULL || $theme == NULL)
			die("Critical error with " . get_class($this) . "::getCss(), expect 2 parameters, one or more missing.");
		$CSS = "";
				
		if (count($group) > 1) {
			$query = StyleManager::$DB->query("SELECT * FROM `styles_css` WHERE `style_id` = '".StyleManager::getThemeId($theme)."'");
			while ($result = mysql_fetch_assoc($query)) {
				if (in_array($result['group'], $group))
					$CSS .= $result['css'];
			}
		} else {
			$query = mysql_fetch_assoc(StyleManager::$DB->query("SELECT * FROM `styles_css` WHERE `style_id` = '".StyleManager::getThemeId($theme)."' AND `group` = '".$group."'"));
			$CSS .= $query['css'];
		}
		
		return $CSS;
	}
	
	/**
	 * This will get the id of a theme by it's style_key
	 * @param $style_key The style_key to get the id for
	 */
	static function getThemeId($style_key) {
		$result = mysql_fetch_assoc(StyleManager::$DB->query("SELECT * FROM `styles_main` WHERE `style_key` = '".$style_key."'"));
		return $result['id'];
	}
	
	static function getCurrentTheme() {
		return StyleManager::$defaultTheme;
	}
	
}

?>