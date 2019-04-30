<?php 
$bdd=new mysqli("localhost","dm1631_14ah-lo","3882Love!!","dm1631_14ah-lo" ) or die($bdd->$connect_errno);
$bdd->set_charset("utf8");

//DECLARATION DONNÉES + CARACTERES SPECIAUX
@$nom_mp = $_POST["nom_mp"];
$nom_mp = $bdd -> real_escape_string($nom_mp);

//Récupérer l'id de nom_mp
$req = $bdd -> query("SELECT * FROM menuevasion WHERE nomMenu='$nom_mp'") or die($bdd->error);
$val = $req -> fetch_array();

echo "	Titre du sous-menu qui sera ajouter à <span class='strong'>$nom_mp</span>
		<br />
		<input id='nom_ss_menu'>
		<br>
		Mettre le contenu du sous-menu
		<br />
		<input id='id_nom_mp' value=\"$val[id]\" type='hidden'>
";
?>