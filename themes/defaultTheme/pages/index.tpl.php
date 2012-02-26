<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{title}</title>
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
			<p>Quisque metus arcu, tincidunt eget mollis nec, condimentum quis
				tellus. Ut placerat leo eget massa mollis sit amet consectetur est
				ultrices. Integer euismod pulvinar elit sit amet vulputate. Aliquam
				erat volutpat. Nunc nulla nisi, molestie non ullamcorper dictum,
				vehicula ac diam. Vestibulum posuere aliquet purus non luctus. Sed
				eget aliquam est. Praesent vel ligula vitae mauris vulputate
				malesuada at ut est. Lorem ipsum dolor sit amet, consectetur
				adipiscing elit. Etiam turpis augue, sollicitudin in adipiscing ac,
				hendrerit ut mi. Cum sociis natoque penatibus et magnis dis
				parturient montes, nascetur ridiculus mus. Nam posuere vehicula
				mollis.</p>
			<p>Suspendisse ultrices, purus eu tincidunt vehicula, nunc leo
				ullamcorper sem, vitae lobortis lorem urna eu libero. Suspendisse eu
				tortor elit, interdum rutrum massa. Nulla facilisi. Nam rhoncus est
				vitae nisi feugiat commodo. Nullam ornare, libero eu venenatis
				tincidunt, lorem magna ullamcorper ligula, at porta diam tortor
				vulputate ipsum. Vestibulum suscipit, urna nec fermentum tristique,
				augue mi commodo nisi, ut fringilla neque mi eu ante. Sed malesuada
				ante non sem porta cursus. Duis quis tortor non nisi sagittis
				eleifend et eu velit.</p>
			<p>Sed adipiscing semper porttitor. Nulla ligula arcu, malesuada in
				vehicula sodales, ultricies sed velit. Suspendisse potenti. Maecenas
				ultricies congue urna, ut convallis lectus malesuada at. Nam cursus,
				felis eget posuere auctor, turpis eros vestibulum nisi, vitae
				dapibus velit nisi et metus. Vivamus tincidunt massa vitae mi tempor
				nec tincidunt ligula faucibus. Pellentesque neque elit, posuere ac
				pellentesque eget, molestie eu felis. Ut eu lectus ac tellus
				condimentum convallis. Aliquam cursus, neque nec bibendum
				consectetur, sapien justo tristique elit, vitae viverra massa enim
				sed diam. Donec et nibh risus. Vestibulum tincidunt iaculis aliquam.
			</p>
			<p>Donec fermentum, massa posuere hendrerit tempor, nisl quam
				venenatis urna, ut rhoncus nibh massa ut magna. Etiam in dolor ut
				magna imperdiet vestibulum. Maecenas vel justo at massa semper
				hendrerit vitae nec nunc. Morbi sit amet aliquam neque. Etiam at
				velit ante. Sed vulputate purus in nisi gravida dapibus. Suspendisse
				vitae ultrices dui. Aliquam ligula tellus, suscipit vel pellentesque
				id, tincidunt a nulla. Integer facilisis nisi a nulla posuere ut
				laoreet tortor pharetra. Lorem ipsum dolor sit amet, consectetur
				adipiscing elit. Integer dapibus ligula ac felis sodales egestas.
				Nullam a odio ac magna porttitor aliquet ullamcorper quis est.
				Maecenas dapibus ornare sapien, quis malesuada neque feugiat nec.
				Integer purus velit, imperdiet sed vestibulum quis, consequat non
				odio. Vivamus nibh felis, semper eu suscipit et, aliquet quis orci.
			</p>
			<p>Maecenas gravida scelerisque sem nec fringilla. Vestibulum eget
				urna vel nisl sagittis placerat eu non dui. Suspendisse varius
				aliquam nisl, nec scelerisque velit mollis vitae. Suspendisse id
				eros sed lorem iaculis commodo eu in arcu. Aliquam erat volutpat. In
				ac diam ligula. Quisque ac egestas purus. Nam varius aliquam
				dapibus. Aliquam erat volutpat.</p>
		</div>
		<?php PageManager::load("side"); ?>
	</div>
	<?php PageManager::load("footer"); ?>
</body>
<?php PluginManager::hook("afterBody"); ?>
</html>