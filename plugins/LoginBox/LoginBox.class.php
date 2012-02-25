<?php
class LoginBox {
	/**
	 * Does nothing because globalHook isn't anywhere :P
	 */
	function globalHook() {
		echo <<<EOF
<style type='text/css'>
#stickymsg {
	position: fixed;
	bottom: 10px;
	line-height: 16px;
	right: 10px;
	z-index: 30000;
	opacity: 0.8;
	width: 260px;
	height: auto;
	background: #cf3737;
	color: #fff;
	text-shadow: rgba(0, 0, 0, 0.3) 0px -1px 0px;
	padding: 10px;
	text-decoration: none;
	font-size: 11px;
	font-family: Tahoma;
	border: 1px solid #771b1b;
	box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px, inset #f66c6c 0px 1px 0px;
	border-radius: 3px;
}

#stickymsg a {
	color: #fff;
	font-weight: bold;
	text-decoration: none;
}

#stickymsg:hover {
	opacity: 1;
}
</style>

<div align='center'>
	<div id='stickymsg'>
		Welcome to our community, guest&#33;<br /> Please
		<a href='#'><strong>Login</strong></a> or
		<a href='#'><strong>Register</strong></a> to use full features.
	</div>
</div>
EOF;
	}
	
}
?>