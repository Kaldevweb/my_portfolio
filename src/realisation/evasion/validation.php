<?php
session_start();
include('connexion.php');
$_SESSION["uti"] = $_POST["uti"];
$_SESSION["pw"] = $_POST["pw"];
//PROTECTION CONTRE LE HACK utiAdmin'OR 1=1;#
$_SESSION["uti"] = $bdd -> real_escape_string($_SESSION["uti"]);
$_SESSION["pw"] = $bdd -> real_escape_string($_SESSION["pw"]);

//Si les champs sont non-remplis
if (empty($_SESSION["uti"]) or empty($_SESSION["pw"])){
	session_destroy();
	print "<script language='JavaScript'>self.location.href='login.php?erreur=0'</script>";
}	
else{
	/******************* Vérification des paramètres *********************/
	include("admin/fonction.php");
	if(autorisation($_SESSION["uti"],$_SESSION["pw"]))
		print "<script language='JavaScript'>self.location.href='admin/'</script>";
	else{
		session_destroy();
		echo "<script language='JavaScript'>self.location.href='login.php?erreur=1'</script>";
	}		
}
?>