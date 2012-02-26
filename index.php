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

include("./initdata.php");
include(ROOT_PATH . "system/config.php");
include(ROOT_PATH . "system/modules/Database.class.php");
include(ROOT_PATH . "system/modules/PluginManager.class.php");
include(ROOT_PATH . "system/modules/PageManager.class.php");

$database		= new Database($INFO['sql_host'], $INFO['sql_username'], $INFO['sql_password'], $INFO['sql_database']);
$pluginManager	= new PluginManager($database);
$vars			= array(
						"title",
						"time",
						"styleDirectory",
						"styleName"
						);
$content		= array(
						"Shadow CMS",
						date("F d, Y "),
						STYLE_DIRECTORY,
						"defaultTheme"
						);

new PageManager(STYLE_DIRECTORY, "defaultTheme", $vars, $content);

$pluginManager->init(PLUGINS_PATH);
PageManager::load(preg_replace("'(\r|\n)'", "", $_GET['page']), 1);

$database->close();

exit();

?>