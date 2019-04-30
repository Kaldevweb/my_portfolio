<?php
include("../head_admin.php");
include("../fonction.php"); 
// Connexion 
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
		@$nvo_titre_ssm = $_POST['nvo_titre_ssm'];
		$nvo_titre_ssm = $bdd -> real_escape_string($nvo_titre_ssm);

		@$id_ssm = $_POST['id_ssm'];

		//validation de champs
		if(empty($nvo_titre_ssm))
		{
			echo "Veuillez remplir tous les champs !";
		}
		else
		{
			//Modification
			$update = $bdd -> query("UPDATE menuevasion SET nomMenu='$nvo_titre_ssm' WHERE id='$id_ssm'") or die($bdd->error);
		}
	}
	else
	{
		echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";
	}
}
?>