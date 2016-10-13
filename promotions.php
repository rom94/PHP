<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<div class="menu">
		<?php include "menu.php" ?>
	</div>
	<h1>Nos Promotions</h1>
	<p><?php 
		require "variables.php";
		echo $promotions; 
	?></p>

</body>
</html>