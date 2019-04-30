<?php
include("../head_admin.php");
include("../fonction.php");
$bdd=new mysqli("localhost","dm1631_14ah-lo","3882Love!!","dm1631_14ah-lo" ) or die($bdd->$connect_errno);
$bdd->set_charset("utf8");

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
		$data=$_POST["data"]; //Data est un tableau
		//Modification de la position du menu
		for($i = 0; $i < count($data); $i++)
		{
			$id=$data[$i];
			$bdd->query("UPDATE menuevasion SET positionMenu= $i+1 WHERE id='$id'") or die ($bdd->error);
		}		
	}
	else
	{
			echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";
	}
}		
?>