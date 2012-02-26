<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><!--title--></title>
<link rel="stylesheet" type="text/css" href="<!--styleDirectory-->/<!--styleName-->/css/style.css" />
<?php PluginManager::hook("head"); ?>
</head>
<body>
	<div class="container">
		<?php PageManager::getHeader(); ?>

		<div class="infobar">
			<span class="loggedInAs">Logged in as {username}</span>
			<span class="timeAndDate">{time}</span>
		</div>

		<div class="contentLeft">
			<h1>Lorem ipsum dolor</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				Suspendisse at enim quam, sit amet vehicula ante. Curabitur placerat
				congue condimentum. Sed odio dui, euismod vel fermentum ut, congue
				non dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				Duis nec turpis at nisi tristique semper sed ac enim. Nulla semper
				mauris ac metus rutrum luctus. Nam euismod elit eu nisl facilisis
				malesuada. Donec fringilla dapibus iaculis. Duis sed nibh nulla, in
				faucibus augue. Sed fringilla fermentum diam, ac aliquet erat congue
				et. Duis volutpat condimentum dolor dictum elementum. Nunc sit amet
				ipsum nec velit cursus porttitor. Suspendisse pharetra aliquet nibh
				et gravida.</p>
		</div>
		<div class="contentRight">
			<h1>Search</h1>
			<p>
				<input type="text" maxlength="50" class="searchbox" />
			</p>
		</div>
		<div class="contentRight">
			<h1>Search</h1>
		</div>
	</div>
	<?php PageManager::getFooter(); ?>
</body>
</html>
