<?php
include('tete.php');
include('connexion.php');
include('fonction.php');
?>

<div id="main"> <!-- DEBUT MAIN -->
	
<header>
	<img src="../img/pokemon2.png" alt="">
</header>

<div id="container"> <!-- DEBUT CONTAINER -->
<?php
@$nom_police = $_POST["nom_police"];
$nom_police = $bdd->real_escape_string($nom_police);

//SECURISÉ BOUTON AJOUTER
if (empty($_SESSION["uti"]) or empty($_SESSION["pw"]))
{
	echo "<h1>ERREUR !!!</h1>";
}
else
{
	//SECURITE ULTIME
	if(autorisation($_SESSION["uti"],$_SESSION["pw"]))
	{
		$query_ajout = $bdd->query("INSERT INTO pokemon_police VALUES('','$nom_police')") or die($bdd->errno);
		echo "	La police <strong><font color='#395ea9'>$nom_police</font></strong> a bien été rajouté !
				<br />
				<a href='index.php'><font color='red'>Retour</font></a>
		";
	}
	else
	{
		echo "<h1>ERREUR !!!</h1>";
	}
}
?>	

</div> <!-- FIN CONTAINER -->

<footer>
	<?php 
	include("pied.php");
	?>
</footer>
</div> <!-- FIN MAIN -->
	