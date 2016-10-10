<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		
		/*$maVariable1 = 10;
		$maVariable2 = 25;
		$result = $maVariable1 + $maVariable2;

		echo $result;*/

		/*$var1 = "Hello, moi c'est Romain";
		$var2 = "On apprend le PHP";

		echo $var1*/

		/*$var1 = 7;
		echo $var1;

		function myFunction(){
			global $var1;
			echo $var1;
		}

		myFunction();*/

		$string = "Le site apprendre-a-coder.com c'est de la balle !";
		$var1 = "com";
		$var2 = "fr";


		//echo strlen($string);
		//echo str_word_count($string);
		//echo strrev($string);
		//echo strpos($string, "balle");
		echo str_replace($var1, $var2, $string);



	?>
</body>
</html>




