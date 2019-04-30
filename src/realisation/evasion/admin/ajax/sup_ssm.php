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

		@$id = $_POST['id'];



		$sup = $bdd ->query("DELETE FROM menuevasion where id='$id'")or die($mysqli->error);



		$query = $bdd -> query("SELECT * FROM menuevasion WHERE parent!='0' ORDER BY positionMenu") or die($bdd->error);



					

		while($val=$query->fetch_array())

		{

			echo"<p class='ui-state-default' id='$val[id]'>$val[nomMenu]</p>";

		}



		$query->free();

		$bdd->close();

	}

	else

	{

			echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";

	}

}

?>