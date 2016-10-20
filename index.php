<?php declare(strict_types=1); ?>
<?php setcookie("prenom", "Romain", time() + 3600*24*30); ?>
<?php session_start();
	$_SESSION["nom"] = "Romain" ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<!-- <?php 
		
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

		/*$string = "Le site apprendre-a-coder.com c'est de la balle !";
		$var1 = "com";
		$var2 = "fr";


		//echo strlen($string);
		//echo str_word_count($string);
		//echo strrev($string);
		//echo strpos($string, "balle");
		echo str_replace($var1, $var2, $string);*/

		/*define("MON_URL","http://apprendre-a-coder.com");

		function myFunction(){
			echo "Le site " . MON_URL . " c'est de la balle !";
		}

		myFunction();*/

		/*$red = "Rouge";
		$maCouleur = $blue ?? $orange ?? $red ?? "Pas de couleur";

		echo $maCouleur;

		var_dump($blue);*/


		/*$motivation = 5;
		if ($motivation < 3) {
			echo "Oulala, il faut se motiver";
		} elseif ($motivation < 7) {
			echo "Ton cas n'est pas grave... Resaisis toi !";
		}else{
			echo "C'est génial ! Continues...";
		}*/

		/*function maFonction($message ="Pas de message"){
			echo $message;
		}

		maFonction();*/

		/*function maFonction($message, $times){
			for ($i=1; $i <= $times; $i++) { 
				echo "$message <br>";
			}
		}

		maFonction("coucou", 15);*/

		/*function addition(int $x, int $y):int{
			return $x + $y;
		}

		echo addition(3, 5);*/

		/*$joursDeLaSemaine  = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");


		for ($i=0; $i < count ($joursDeLaSemaine); $i++) { 
				echo "$joursDeLaSemaine[$i] <br>";
		}*/

		/*$personnes = array("Pierre" => 30, "Paul" => 40, "Jacques" => 50);

		foreach ($personnes as $nom => $age) {
			echo "$nom a $age ans. <br>";
		}*/

		/*class Etudiant{

			public $nom;
			public $age;
			public $notes;
			public $isStudy = true;

			public function __construct($nom, $age, $notes){
				$this->nom = $nom;
				$this->age = $age;
				$this->notes = $notes;
			}

			public function sePresente(){
				if($this->isStudy){
					echo "Je m'appelle " . $this->nom . " et j'ai " . $this->age . " ans. <br>";
					foreach ($this->notes as $matiere => $note) {
						echo "En $matiere, j'ai obtenu $note/20. <br>";
					}
				}
			}

		}

		$notesRomain = array("Math" => 17, "Français" => 9, "Anglais" => 13);
		$notesHarry = array("Philosophie" => 17, "Sciences politiques" => 9);

		$romain = new Etudiant("Romain", "27", $notesRomain);
		$harry = new Etudiant("Harry", "50", $notesHarry);

		$romain->sePresente();
		echo "<br>";
		$harry->sePresente();*/



	?> -->

	<!-- <div class="menu">
		<?php include "menu.php" ?>
	</div>
	<h1>Page d'accueil</h1> -->

	<!-- <?php 
	
		//var_dump($_SERVER);
		//var_dump($_REQUEST);
		//var_dump($_COOKIE);
		//var_dump($_COOKIE);
		//var_dump($_SESSION);
	
	
	 ?> -->
	
	 <!-- <p>
	 	<a href="presentation.php?nom=John&age=31">Présentation</a>
	 </p> -->

	<!-- <form action="presentation.php" method="post">
		Nom: <input type="text" name="nom"><br>
		Email: <input type="text" name="email"><br>
		<input type="submit">
	</form> -->

	<!-- <a href="presentation.php">Qui es tu?</a> -->

	<?php 
		if (isset($_COOKIE['prenom'])) {
			echo "<h1> Hello " . $_COOKIE['prenom'] . "</h1>"; 
		}else{
			echo "<h1> Je ne te connais pas </h1>";
		}?>



</body>
</html>




