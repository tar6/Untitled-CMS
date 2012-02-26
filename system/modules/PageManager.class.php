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

	public $template;
	public $styleName;

	function load($page, $styleName = "defaultTheme") {
		if (empty($page))
			$page = "index";
		if (!file_exists("pages/" . $page . ".tpl.php"))
			$page = "404";
		$this->template = file_get_contents("pages/" . $page . ".tpl.php");
		$this->styleName = $styleName;
	}

	function set($var, $content) {
		if (count($var) != count($content))
			die("Missmatching replacements!");
		for ($i = 0; $i < count($var); $i++)
			$this->template = str_replace("{".$var[$i]."}", $content[$i], $this->template);
	}

	static function getHeader() {
		echo file_get_contents("pages/header.tpl.php");
	}
	
	static function getFooter() {
		echo file_get_contents("pages/footer.tpl.php");
	}

	function publish() {
		eval("?>".$this->template."<?");
	}

}

?>