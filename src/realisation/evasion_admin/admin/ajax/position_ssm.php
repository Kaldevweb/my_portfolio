<?php
include("../head_admin.php");
include("../fonction.php");
$bdd=new mysqli("localhost","id7158402_kevinahloye","WoShiWebKAL974","id7158402_kevinahloye" ) or die($bdd->$connect_errno);
$bdd->set_charset("utf8");
$data=$_POST["data"]; //Data est un tableau

//SECURITÉ ADMIN
if (empty($_SESSION["uti"]) or empty($_SESSION["pw"]))
{
	echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";
}
else
{
	//SECURITER ULTIME
	if(autorisation($_SESSION["uti"],$_SESSION["pw"]))
	{
		//Modification de la position du menu
		for($i = 0; $i < count($data); $i++)
		{
			$id=$data[$i];
			$bdd->query("UPDATE evasion_admin_menu SET positionMenu= $i+1 WHERE id='$id'") or die ($bdd->error);
		}
	}
	else
	{
		echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";
	}
}
?>