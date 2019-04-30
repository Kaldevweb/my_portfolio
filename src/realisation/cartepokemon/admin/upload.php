<?php
include('tete.php');
include('fonction.php');
include('connexion.php');
$dossier = '../img/';
@$fichier = basename($_FILES['nom_image']['name']); //RECUPÉRER LE NOM DE L'IMAGE À UPLOADER
$taille_maxi = 10000000;
@$taille = filesize($_FILES['nom_image']['tmp_name']); //RÉCUPÉRER LA TAILLE DE l'IMAGE, tmp_name = le nom temporaire de l'image
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
@$extension = strrchr($_FILES['nom_image']['name'], '.'); //RÉCUPÉRER L'EXTENSION DE L'IMAGE, cad qu'on rammase ce qu'il y a après lr point (en l'incluant)
@$nom_pokemon=$_POST["nom_pokemon"];
$nom_pokemon = $bdd->real_escape_string($nom_pokemon);

echo "	<div id='main'> 
		<header>
			<img src='../img/pokemon2.png' >
		</header>

		<div id='container'> 
";

//SECURISÉ BOUTON UPLOAD
if (empty($_SESSION["uti"]) or empty($_SESSION["pw"]))
{
	echo "<h1>ERREUR !!!</h1>";
}	
else
{
	//SECURITE ULTIME
	if(autorisation($_SESSION["uti"],$_SESSION["pw"]))
	{
		//VALIDATION FICHIER + VALIDATION CHAMPS VIDE POUR L'IMAGE
		if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
		{
		     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg,...';
		}
		if($taille>$taille_maxi)
		{
		     $erreur = 'Le fichier est trop gros...';
		}
		if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
		{
				//VALIDATION CHAMPS VIDE DESCRIPTION ET MOTS CLEF
				if(empty($nom_pokemon))
				{
					echo "<font color='red'>Veuillez remplir tous les champs</font>
					<br />
					<a href='index.php'>Retour</a> ";
				}
				else
				{
					//FORMATAGE DU NOM DU FICHIER, DESCRIPTION ET CLEF
					//ENLEVER LES MAJ
					$fichier = mb_strtolower($fichier, 'UTF-8');
					//REMPLACER LES CARACTERES SPECIAUX PAR DES SIMPLES
					$fichier = str_replace(
					array('à','â','ä','á','ã','å','î','ï','ì','í','ô','ö','ò','ó','õ','ø','ù','û','ü','ú','é','è','ê','ë','ç','ÿ','ñ', ),
					array('a','a','a','a','a','a','i','i','i','i','o','o','o','o','o','o','u','u','u','u','e','e','e','e','c','y','n', ),
					$fichier);
					//ULTIME FORMATAGE
				  	$fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

					//PLACEMENT DANS LE DOSSIER SI TOUT EST OK
					if(move_uploaded_file($_FILES['nom_image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
					{
						echo "<font color='black'>Upload effectué avec succès !
							<br /><br />
							<strong>$nom_pokemon</strong> est content de faire partie du site.
							<br /><br />
							<a href='index.php'><font color='red'>Retour</a>
							<br />
							<br />";

						//INSERTIONS DESCRIPTION ET MOTSCLEFS
						$req_upload = $bdd->query("INSERT INTO pokemon_pokemon VALUES('','$nom_pokemon','$fichier')") or die($bdd->errno);

						//CREATION DU THUMBS
						$name="../img/$fichier";
						$filename="../img/thumbs/$fichier";
						createthumb($name,$filename,100,100);//-------création du thumnail
		     		}
				     else //Sinon (la fonction renvoie FALSE).
				    {
				     	echo "<font color='white'>Echec de votre upload
				     	<a href='index.php'><font color='red'>Retour</a>";
				    }  
				} 
		}
		else //SI Taille et extension pas correct
		{
			echo $erreur;
		}
	}
	else
	{
		echo "<h1>ERREUR !!!</h1>";
	}
}

echo "	</div> <!-- FIN CONTAINER -->
";

include('pied.php');

echo "	</div> <!-- FIN MAIN -->
";
?>

