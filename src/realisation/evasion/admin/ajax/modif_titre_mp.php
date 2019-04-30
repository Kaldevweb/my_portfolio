<?php
include("../head_admin.php");
include("../fonction.php"); 
// Connexion 
$bdd=new mysqli("localhost","dm1631_14ah-lo","3882Love!!","dm1631_14ah-lo" ) or die($bdd->$connect_errno);
$bdd->set_charset("utf8");

@$new_titre = $_POST['new_titre'];
$new_titre = $bdd -> real_escape_string($new_titre);

@$id_radio = $_POST['id_radio'];

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
		//validation de champs
		if(empty($new_titre))
		{
			echo "Veuillez remplir tous les champs !";
		}
		else
		{
			//Modification
			$update = $bdd -> query("UPDATE menuevasion SET nomMenu='$new_titre' WHERE id='$id_radio'") or die($bdd->error);

			
			//Réactualisation du div#radio avec le nom des menus changé
			$query = $bdd -> query("SELECT * FROM menuevasion WHERE parent='0' ORDER BY positionMenu") or die($bdd->error);
			
			while($val = $query -> fetch_array())
			{
				echo "
					<input type='radio' id='$val[id]' name='radio' value='$val[id]'><label for='$val[id]'>$val[nomMenu]</label>
				";
			}

			// Methode  2 réactualsiation
			// echo "||||<p>Modification validée !</p>";
		}
	}
	else
	{
			echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";
	}
}
?>