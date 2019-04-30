<?php 
$bdd=new mysqli("localhost","id7158402_kevinahloye","WoShiWebKAL974","id7158402_kevinahloye" ) or die($bdd->$connect_errno);
$bdd->set_charset("utf8");

//DECLARATION DONNÉES + CARACTERES SPECIAUX
@$id_ssm = $_POST["id_ssm"];
//$nom_mp = $bdd -> real_escape_string($nom_mp);

//Récupérer l'id de nom_mp
$req = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE id='$id_ssm'") or die($bdd->error);
$val = $req -> fetch_array();

echo "	Modifier le titre du Sous-menu
		<br />
		<input id='nvo_titre_ssm' value='$val[nomMenu]'>
		<input id='id_nom_ssm' value='$val[id]' type='hidden'>
";
?>