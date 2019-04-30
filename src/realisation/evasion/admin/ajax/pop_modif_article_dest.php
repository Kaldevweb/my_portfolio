<?php 
$bdd=new mysqli("localhost","dm1631_14ah-lo","3882Love!!","dm1631_14ah-lo" ) or die($bdd->$connect_errno);
$bdd->set_charset("utf8");

@$id_article_modif = $_POST['id_article_modif'];

// Récupération de l'article via l'id
$req = $bdd -> query("SELECT * FROM article_destination WHERE id ='$id_article_modif'") or die ($bdd->error);
$val = $req -> fetch_array();

echo " <p><label for=''>Modifier le titre de l'article</label><input type='text' name ='mod_titre_article' id='mod_titre_article' value=\"$val[titre]\"></p>
<p><label for=''>Modifier la description de l'article</label><textarea name ='mod_description_article' id='mod_description_article'>$val[description]</textarea></p>
<p><label for=''>Modifier la source de l'article</label><input type='text' name ='mod_source_article' id='mod_source_article' value='$val[source]'></p>
<p><label for=''>Modifier la catégorie de l'article</label><select id='modif_article_pays'>"; 

$query = $bdd -> query("SELECT DISTINCT pays FROM article_destination ORDER BY pays") or die($bdd->error);

while($val = $query -> fetch_array())
{
	echo "<option value='$val[pays]'>$val[pays]</option>";
}
echo "</p></select>";
// <input type='text' name ='mod_description_article' id='mod_description_article' value='$val[description]'>
?>
