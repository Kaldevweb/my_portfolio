<?php 
$bdd=new mysqli("localhost","id7158402_kevinahloye","WoShiWebKAL974","id7158402_kevinahloye" ) or die($bdd->$connect_errno);
$bdd->set_charset("utf8");

//DECLARATION DONNÉES + CARACTERES SPECIAUX
@$nom_mp = $_POST["nom_mp"];
$nom_mp = $bdd -> real_escape_string($nom_mp);

//Récupérer l'id de nom_mp
$req = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE nomMenu='$nom_mp'") or die($bdd->error);
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