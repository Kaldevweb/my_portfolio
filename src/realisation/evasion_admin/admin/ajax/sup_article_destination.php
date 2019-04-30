<?php
include("../head_admin.php");
include("../fonction.php");
$bdd=new mysqli("localhost","id7158402_kevinahloye","WoShiWebKAL974","id7158402_kevinahloye" ) or die($bdd->$connect_errno);
$bdd->set_charset("utf8");

@$id_article_sup = $_POST['id_article_sup'];

//SECURISÉ BOUTON SUPPRIMÉ
if (empty($_SESSION["uti"]) or empty($_SESSION["pw"]))
{
	echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";
}
else
{
	//SECURITER ULTIME
	if(autorisation($_SESSION["uti"],$_SESSION["pw"]))
	{
		//POUR RÉCUPÉRER LE CHEMIN DE L'IMAGE A SUPPRIMER DANS LES DOSSIERS
		$query_image = $bdd -> query("SELECT * FROM evasion_admin_article_destination WHERE id='$id_article_sup'") or die($bdd->error);
		$val = $query_image->fetch_array();
		$fichier = "../../img/destination/$val[image_petite]";		

		//SUPPRESSION DE L'ARTICLE
		$sup = $bdd ->query("DELETE FROM evasion_admin_article_destination WHERE id='$id_article_sup'")or die($mysqli->error);

		//SUPRESSION DE L'IMAGE DANS LE DOSSIER SI L'ARTICLE EST BIEN SUPPRIMÉ
		if($sup===true)
		{
			if( file_exists($fichier))
			{
				 unlink($fichier);
			}
			echo"<font color='green'>Suppression validée !</font>";
		}
		

	}
}
?>