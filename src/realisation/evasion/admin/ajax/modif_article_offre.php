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
		//RECUPERATION DONNEES + CARACTERE SPECIAUX
		@$mod_titre_offre=$_POST["mod_titre_offre"];
		@$mod_titre_offre=$_POST["mod_titre_offre"];

		@$mod_description_offre=$_POST["mod_description_offre"];
		@$mod_description_offre=$_POST["mod_description_offre"];

		@$mod_prix_offre=$_POST["mod_prix_offre"];
		@$mod_prix_offre=$_POST["mod_prix_offre"];

		@$mod_article_offre=$_POST["mod_article_offre"];

		//UPDATE DE L'ARTICLE
		$update = $bdd -> query("UPDATE article_offre SET titre='$mod_titre_offre', description='$mod_description_offre', prix='$mod_prix_offre' WHERE id='$mod_article_offre'") or die($bdd->error);

		echo "<font color='green'>Modification validée !</font>";
	}
	else
	{
		echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";
	}

}

?>