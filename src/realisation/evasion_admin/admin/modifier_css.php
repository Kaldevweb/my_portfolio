<?php
include("head_admin.php");
include("fonction.php");

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
		$ecrire = fopen("../styles.css", "w");
		fwrite($ecrire, $_POST["contenucss"]);
		fclose ($ecrire);
		echo "<font color='green'>Votre CSS est modifié !!!</font>";
	}
	else
	{
		echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";
	}

}
?>

