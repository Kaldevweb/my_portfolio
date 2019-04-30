<?php 

$bdd=new mysqli("localhost","dm1631_14ah-lo","3882Love!!","dm1631_14ah-lo" ) or die($bdd->$connect_errno);

$bdd->set_charset("utf8");

@$id_radio = $_POST['id_radio'];



//AFFICHER POUR MODIFIER LE TITRE

$req = $bdd -> query("SELECT * FROM menuevasion WHERE id ='$id_radio'") or die ($bdd->error);

$val = $req -> fetch_array();



echo "	Saisir le nouveau titre du Menu <br />
	<input type='text' id='nouveau_titre_mp' value=\"$val[nomMenu]\">";

?>