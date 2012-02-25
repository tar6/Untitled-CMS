<?php
/**
 * Last Updated: 02-16-2012
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

$database = new Database($INFO['sql_host'], $INFO['sql_username'], $INFO['sql_password'], $INFO['sql_database']);
$pluginManager = new PluginManager($database);
$pluginManager->init(PLUGINS_PATH);
$database->close();
exit();

?>