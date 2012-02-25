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

class PageManager {

	public $path;
	public $page;

	function __construct($page, $path) {
		if (empty($page))
			$page = "index";
		$this->path = $path . "pages/";
		$this->page = $this->path . $page . ".tpl.php";
		if (!file_exists($this->page))
			$this->page = $this->path . "404.tpl.php";
	}

}

?>