<?php
/**
* Last Updated: 02-16-2012
*
* @author	Joshua_F
* @package	{package}
* @version	1.0.0
* @link		{link}
* 
*/

include("./initdata.php");
include(ROOT_PATH . "system/config.php");
include(ROOT_PATH . "system/modules/Database.class.php");

$database = new Database($INFO['sql_host'], $INFO['sql_username'], $INFO['sql_password'], $INFO['sql_database']);

echo $database->count("test");

exit();

?>