<?php

include("../head_admin.php");

include("../fonction.php"); 

$bdd=new mysqli("localhost","dm1631_14ah-lo","3882Love!!","dm1631_14ah-lo" ) or die($bdd->$connect_errno);

$bdd->set_charset("utf8");



//SECURITÉ ADMIN

if (empty($_SESSION["uti"]) or empty($_SESSION["pw"]))

{

	echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";

}

else

{

	//SECURITER ULTIME

	if(autorisation($_SESSION["uti"],$_SESSION["pw"]))

	{

		//RECUPERATION DONNÉES + CARACTERE SPECIAUX

		@$nom_ss_menu = $_POST["nom_ss_menu"];

		$nom_ss_menu = $bdd -> real_escape_string($nom_ss_menu);



		@$contenu_ss_menu = $_POST["contenu_ss_menu"];

		$contenu_ss_menu = $bdd -> real_escape_string($contenu_ss_menu);



		@$id_nom_mp = $_POST["id_nom_mp"];



		// SI CHAMPS VIDES

		if( empty($nom_ss_menu) or empty($contenu_ss_menu))

		{

			echo "<font color='red'>Champs vide !</font>";

		}

		//CHAMPS NON VIDES

		else

		{	

			//AJOUTER LE SOUS MENU DANS LA BDD

			$req_ajouter = $bdd -> query("INSERT INTO menuevasion VALUES('','$nom_ss_menu','$contenu_ss_menu','999','$id_nom_mp')") or  die($bdd->error);



			echo "<font color='green'>Le sous menu <span class='strong'>".stripslashes($nom_ss_menu)."</span> a été ajouter.</font>";

		}

	}

	else

	{

			echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";

	}

}		

?>