<?php
/**
 * Last Updated: 02-25-2012
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
$pageManager	= new PageManager();
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

$pluginManager->init(PLUGINS_PATH);
$pageManager->load(preg_replace("'(\r|\n)'", "", $_GET['page']));
$pageManager->set($vars, $content);
$pageManager->publish();

$database->close();

exit();

?>