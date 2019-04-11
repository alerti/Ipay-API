<!DOCTYPE html>
<html>
<head>
	<title>Read Me File ! IPAY</title>
</head>
<body>
	<a href="main.php" style="padding: 4px;text-decoration: none;background-color: #323232;color: tomato;
	font-family:Tahoma;">Home</a>
<div style="width: 540px;padding:23px; overflow-y:none;border:2px solid black; margin:23px auto;color:#f5c2a1;
border-radius:5px;">

	<?php

	$f=fopen('readme.md', 'r');
	$con=fread($f, 1024);
	fclose($f);
	echo $con;

	 ?>
</div>
</body>
</html>