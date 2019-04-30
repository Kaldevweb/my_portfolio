<?php
include('head.php');
include("connexion.php");
@$idmenu = $_GET["idmenu"];

//PREMIERE FOIS SUR LE SITE
if(empty($idmenu))
{
	$query = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE id='1'") or die($bdd->error);

	$val = $query -> fetch_array();

	echo "	$val[contenuMenu]";
}
//CHANGEMENT CONTENU POUR LE SOUS-MENU EUROPE
else if ($idmenu == 4)
{
	include("connexion.php");
	//Recuperation des articles ligne par ligne dans la bdd
	$query_article = $bdd -> query("SELECT * FROM evasion_admin_article_destination WHERE pays='Europe' ORDER BY titre") or die($bdd->error);

	//Recuperation des articles ligne par ligne dans la bdd pour le titre
	$query_article_titre = $bdd -> query("SELECT * FROM evasion_admin_article_destination WHERE pays='Europe' ORDER BY titre") or die($bdd->error);
	$val_titre = $query_article_titre -> fetch_array();

	echo "	<div id='container_destination'>
				<h1>Destination de Rêve : $val_titre[pays]</h1>
		";

	//ARTICLES DYNAMIQUES	
	while($val = $query_article -> fetch_array())
	{
		echo "	<article>
					<h2>$val[titre]</h2>

					<div id='img_destination'>
						<a href='img/destination/$val[image_petite]' rel='lightbox' title=\"$val[titre]\"><img class='img-reponsive' src='img/destination/$val[image_petite]' alt='Photo de la destination de rêve'></a>
					</div>

					<div id='description_destination'>
						<p>$val[description]</p>
						<p class='source'>(source: $val[source])</p>
					</div>
				</article>
		";
	}

	echo "</div> <!-- FIN CONTAINER_APROPOS -->	";
}
//CHANGEMENT CONTENU POUR LE SOUS-MENU ASIE
else if ($idmenu == 5)
{
	include("connexion.php");
	//Recuperation des articles ligne par ligne dans la bdd
	$query_article = $bdd -> query("SELECT * FROM evasion_admin_article_destination WHERE pays='Asie' ORDER BY titre") or die($bdd->error);

	//Recuperation des articles ligne par ligne dans la bdd pour le titre
	$query_article_titre = $bdd -> query("SELECT * FROM evasion_admin_article_destination WHERE pays='Asie' ORDER BY titre") or die($bdd->error);
	$val_titre = $query_article_titre -> fetch_array();

	echo "	<div id='container_destination'>
				<h1>Destination de Rêve : $val_titre[pays]</h1>
		";

	//ARTICLES DYNAMIQUES	
	while($val = $query_article -> fetch_array())
	{
		echo "	<article>
					<h2>$val[titre]</h2>

					<div id='img_destination'>
						<a href='img/destination/$val[image_petite]' rel='lightbox' title=\"$val[titre]\"><img class='img-reponsive' src='img/destination/$val[image_petite]' alt='Photo de la destination de rêve'></a>
					</div>

					<div id='description_destination'>
						<p>$val[description]</p>
						<p class='source'>(source: $val[source])</p>
					</div>
				</article>
		";
	}

	echo "</div> <!-- FIN CONTAINER_APROPOS -->	";
}
//CHANGEMENT CONTENU POUR LE SOUS-MENU OCEAN INDIEN
else if ($idmenu == 8)
{
	include("connexion.php");
	//Recuperation des articles ligne par ligne dans la bdd
	$query_article = $bdd -> query("SELECT * FROM evasion_admin_article_destination WHERE pays='Ocean Indien' ORDER BY titre") or die($bdd->error);

	//Recuperation des articles ligne par ligne dans la bdd pour le titre
	$query_article_titre = $bdd -> query("SELECT * FROM evasion_admin_article_destination WHERE pays='Ocean Indien' ORDER BY titre") or die($bdd->error);
	$val_titre = $query_article_titre -> fetch_array();

	echo "	<div id='container_destination'>
				<h1>Destination de Rêve : $val_titre[pays]</h1>
		";

	//ARTICLES DYNAMIQUES	
	while($val = $query_article -> fetch_array())
	{
		echo "	<article>
					<h2>$val[titre]</h2>

					<div id='img_destination'>
						<a href='img/destination/$val[image_petite]' rel='lightbox' title=\"$val[titre]\"><img class='img-reponsive' src='img/destination/$val[image_petite]' alt='Photo de la destination de rêve'></a>
					</div>

					<div id='description_destination'>
						<p>$val[description]</p>
						<p class='source'>(source: $val[source])</p>
					</div>
				</article>
		";
	}

	echo "</div> <!-- FIN CONTAINER_APROPOS -->	";
}
//CHANGEMENT CONTENU POUR LE SOUS-MENU LES CARAÏBES
else if ($idmenu == 9)
{
	include("connexion.php");
	//Recuperation des articles ligne par ligne dans la bdd
	$query_article = $bdd -> query("SELECT * FROM evasion_admin_article_destination WHERE pays='Les Caraïbes' ORDER BY titre") or die($bdd->error);

	//Recuperation des articles ligne par ligne dans la bdd pour le titre
	$query_article_titre = $bdd -> query("SELECT * FROM evasion_admin_article_destination WHERE pays='Les Caraïbes' ORDER BY titre") or die($bdd->error);
	$val_titre = $query_article_titre -> fetch_array();


	echo "	<div id='container_destination'>
				<h1>Destination de Rêve : $val_titre[pays]</h1>
		";

	//ARTICLES DYNAMIQUES	
	while($val = $query_article -> fetch_array())
	{
		echo "	<article>
					<h2>$val[titre]</h2>

					<div id='img_destination'>
						<a href='img/destination/$val[image_petite]' rel='lightbox' title=\"$val[titre]\"><img class='img-reponsive' src='img/destination/$val[image_petite]' alt='Photo de la destination de rêve'></a>
					</div>

					<div id='description_destination'>
						<p>$val[description]</p>
						<p class='source'>(source: $val[source])</p>
					</div>
				</article>
		";
	}

	echo "</div> <!-- FIN CONTAINER_APROPOS -->	";
}
//CHANGEMENT CONTENU POUR LE MENU OFFRES
else if($idmenu == 6)
{
	echo "<div id='container_offres'>
				<h1>Bon plans de Rêve</h1>
	";

	include("connexion.php");

	//Recuperation des articles ligne par ligne dans la bdd
	$query_article = $bdd -> query("SELECT * FROM evasion_admin_article_offre") or die($bdd->error);

	while($val = $query_article -> fetch_array())
	{
		echo "
				<article>
					<div id='img_offre'>
						<a href='img/offres/grd/$val[image]' rel='lightbox' title=\"$val[titre]\"><img class='img-reponsive' src='img/offres/$val[image]' alt=''></a>
					</div>

					<div id='description_offre'>
						<h2>$val[titre]</h2>
						<p>$val[description]</p>
						<p>$val[prix] $ TTC</p>
						<button>Voir l'offre</button>
					</div>

					<div class='nofloat'><!-- block div#description_offre div#img_offre--></div>		
				</article>
		";
	}

	echo "</div> <!-- FIN CONTAINER_APROPOS -->";
}
//CHANGEMENT CONTENU D'APRES LES MENUS	(les autres cas)
else
{
	$query = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE id='$idmenu'") or die($bdd->error);

	$val = $query -> fetch_array();

	echo "	$val[contenuMenu]";
}

include("footer.php");
?>

