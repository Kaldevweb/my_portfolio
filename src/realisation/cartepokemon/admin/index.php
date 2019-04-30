<?php
include("tete.php");
include("fonction.php");

if(autorisation(@$_SESSION["uti"],@$_SESSION["pw"]))
	//Nouveauté opérateur ternaire voir : http://php.net/manual/fr/language.operators.comparison.php
	(empty($_REQUEST["action"])) ? include("accueil_admin.php") : include($_REQUEST["action"].".php");
	/* Équivalent à :
	if(empty($_POST["action"])
 		include("accueil.php");
	else
		include($_POST["action"].".php");
	*/
else
	echo "<h1>ERREUR !!!</h1>";

include("pied.php");
?>