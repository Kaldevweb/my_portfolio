<?php
/*** Fonction de vérification de l'utilisateur et son mot de passe ***/
function autorisation($uti,$pass){
	include("connexion.php");
	$autorisation = 0;
	$result = $bdd->query("SELECT * FROM pokemon_admin WHERE utiAdmin='$uti' AND passAdmin='$pass'");
	$autorisation = $result->num_rows;
	$result->free();
	$bdd->close();
	return $autorisation;
}

// Fonction creation thumb
function createthumb($name,$filename,$new_w,$new_y)
{
	$system=explode(".",$name);
	if (preg_match("/jpg|jpeg/",$system[count($system)-1])){$src_img=imagecreatefromjpeg($name);}
	if (preg_match("/gif/",$system[count($system)-1])){$src_img=imagecreatefromgif($name);}
	if (preg_match("/png/",$system[count($system)-1])){$src_img=imagecreatefrompng($name);}
	$old_x=imageSX($src_img);
	$old_y=imageSY($src_img);
	
	$dst_img=ImageCreateTrueColor($new_w,$new_y);
	imagecopyresampled($dst_img,$src_img,0,0,0,0,$new_w,$new_y,$old_x,$old_y); 
	if (preg_match("/png/",$system[count($system)-1]))
	{
		imagepng($dst_img,$filename); 
	} else {
		imagejpeg($dst_img,$filename); 
	}
	imagedestroy($dst_img); 
	imagedestroy($src_img); 
} 

?>
	