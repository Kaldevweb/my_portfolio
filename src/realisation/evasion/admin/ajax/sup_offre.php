<?php
include("../head_admin.php");
include("../fonction.php");
$bdd=new mysqli("localhost","dm1631_14ah-lo","3882Love!!","dm1631_14ah-lo" ) or die($bdd->$connect_errno);
$bdd->set_charset("utf8");

@$id_offre_sup = $_POST['id_offre_sup'];

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
		$query_image = $bdd -> query("SELECT * FROM article_offre WHERE id='$id_offre_sup'") or die($bdd->error);
		$val = $query_image->fetch_array();
		$fichier = "../../img/offres/grd/$val[image]";
		$fichier_thumbs = "../../img/offres/$val[image]";		

		//SUPPRESSION DE L'ARTICLE
		$sup = $bdd ->query("DELETE FROM article_offre WHERE id='$id_offre_sup'")or die($mysqli->error);

		//SUPRESSION DE L'IMAGE DANS LE DOSSIER SI L'ARTICLE EST BIEN SUPPRIMÉ
		if($sup===true)
		{
			if( file_exists($fichier))
			{
				 unlink($fichier);
			}
			if( file_exists($fichier_thumbs))
			{
			 	 unlink($fichier_thumbs);
			}			
			echo"<font color='green'>Suppression validée !</font>";
		}
		

	}
}
?>