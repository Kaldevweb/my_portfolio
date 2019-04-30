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
		@$mod_titre_article=$_POST["mod_titre_article"];
		@$mod_titre_article=$_POST["mod_titre_article"];

		@$mod_description_article=$_POST["mod_description_article"];
		@$mod_description_article=$_POST["mod_description_article"];

		@$mod_source_article=$_POST["mod_source_article"];
		@$mod_source_article=$_POST["mod_source_article"];

		@$id_modif_article=$_POST["id_modif_article"];

		@$modif_article_pays=$_POST["modif_article_pays"];


		//UPDATE DE L'ARTICLE
		$update = $bdd -> query("UPDATE article_destination SET titre='$mod_titre_article', description='$mod_description_article', source='$mod_source_article', pays='$modif_article_pays' WHERE id='$id_modif_article'") or die($bdd->error);

		echo "<font color='green'>Modification validée !</font>";
	}
	else
	{
		echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";
	}

}

?>