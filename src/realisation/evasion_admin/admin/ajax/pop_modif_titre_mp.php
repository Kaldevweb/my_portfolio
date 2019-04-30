<?php 

$bdd=new mysqli("localhost","id7158402_kevinahloye","WoShiWebKAL974","id7158402_kevinahloye" ) or die($bdd->$connect_errno);

$bdd->set_charset("utf8");

@$id_radio = $_POST['id_radio'];



//AFFICHER POUR MODIFIER LE TITRE

$req = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE id ='$id_radio'") or die ($bdd->error);

$val = $req -> fetch_array();



echo "	Saisir le nouveau titre du Menu <br />
	<input type='text' id='nouveau_titre_mp' value=\"$val[nomMenu]\">";

?>