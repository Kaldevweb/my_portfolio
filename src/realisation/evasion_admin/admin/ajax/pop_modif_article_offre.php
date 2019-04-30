<?php 
$bdd=new mysqli("localhost","id7158402_kevinahloye","WoShiWebKAL974","id7158402_kevinahloye" ) or die($bdd->$connect_errno);
$bdd->set_charset("utf8");

@$id_offre_mod = $_POST['id_offre_mod'];

// Récupération de l'article via l'id
$req = $bdd -> query("SELECT * FROM evasion_admin_article_offre WHERE id ='$id_offre_mod'") or die ($bdd->error);
$val = $req -> fetch_array();

echo " <p><label for=''>Modifier le titre de l'offre</label><input type='text' name ='mod_titre_offre' id='mod_titre_offre' value=\"$val[titre]\"></p>
<p><label for=''>Modifier la description de l'offre</label><textarea name ='mod_description_offre' id='mod_description_offre'>$val[description]</textarea></p>
<p><label for=''>Modifier le prix de l'offre</label><span class='price'>$</span><input type='text' name ='mod_prix_offre' id='mod_prix_offre' value='$val[prix]'></p>
";
