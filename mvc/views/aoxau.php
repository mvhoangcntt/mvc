<!DOCTYPE html>
<html>
<head>
	<title>Aó đẹp</title>
	<style type="text/css">
		#header, #footer{
			background: yellow;
		}
		div{
			padding: 20px;
		}
	</style>
</head>
<body>
	<H1>Aó đẹp</H1>
	<div id="header"></div>
	<div id="content">
		<?php require_once "./mvc/views/pages/".$data["Page"].".php"; ?>
	</div>
</body>
</html>