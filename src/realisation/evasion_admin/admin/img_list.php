<?php
$img = ''; 
$img = '[';
$directory = array("../img/destination","../img/offres","../img/slider");

$abspath = preg_replace('~^/?(.*)/[^/]+$~', '/$1', $_SERVER['SCRIPT_NAME']);

for($i=0;$i<count($directory);$i++)
{
	$direc = opendir($directory[$i]);

	while ($file = readdir($direc)) 
	{
	    if ($file != "." && $file != ".." and $file != "Thumbs.db")
	    {
	    	$img.= "{title:'". utf8_encode($file)."', value: '". utf8_encode("$abspath/$directory[$i]/$file")."'},";
	    }	
	}
}

$img = substr($img, 0, -1); // substr enleve de ma chaine le dernier caractere
closedir($direc);

$img .= ']';

echo $img;
?>