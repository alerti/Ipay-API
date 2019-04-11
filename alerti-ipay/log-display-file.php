<!DOCTYPE html>
<html>
<head>
	<title>Read Me File ! IPAY</title>
</head>
<body>
	<a href="main.php" style="padding: 4px;text-decoration: none;background-color: #cccce;color:
	tomato;font-family:Tahoma;border-radius:1px;">Home</a>
<div style="width: 540px;padding:23px; overflow-y: scroll;border: 2px solid back; margin: 23px auto;">

	<?php

	$f=fopen('log.txt', 'r');
	$con=fread($f, 1024);
	fclose($f);
	echo $con;

	 ?>
</div>
</body>
</html>