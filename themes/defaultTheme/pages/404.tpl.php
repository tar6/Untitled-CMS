<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{title} - 404 Page not found</title>
<link rel="stylesheet" type="text/css" href="{styleDirectory}/{styleName}/css/style.css" />
<link rel="stylesheet" type="text/css" href="{styleDirectory}/{styleName}/css/font.css" />
<?php PluginManager::hook("head"); ?>
</head>
<?php PluginManager::hook("beforeBody"); ?>
<body>
	<div class="container">
		<?php PageManager::load("header"); ?>

		<div class="infobar">
			<span class="loggedInAs">Logged in as {username}</span>
			<span class="timeAndDate">{time}</span>
		</div>

		<div class="contentLeft">
			<h1>404 - Page not found</h1>
			<p>There appears to be a problem with trying to load this page, it
				seems that it does not exist. Make sure you have typed the address
				correctly, and if you did and are still experiencing this problem
				contact an administrator.</p>
		</div>
		<?php PageManager::load("side"); ?>
	</div>
	<?php PageManager::load("footer"); ?>
</body>
<?php PluginManager::hook("afterBody"); ?>
</html>