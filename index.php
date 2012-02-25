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
include(ROOT_PATH . "system/modules/StyleManager.class.php");
include(ROOT_PATH . "system/modules/PageManager.class.php");

$database		= new Database($INFO['sql_host'], $INFO['sql_username'], $INFO['sql_password'], $INFO['sql_database']);
$pluginManager	= new PluginManager($database);
$styleManager	= new StyleManager($database, STYLE_PATH);
$pageManager	= new PageManager($_GET['page'], ROOT_PATH);

$pluginManager->init(PLUGINS_PATH);
include($pageManager->page);
$database->close();

exit();

?>