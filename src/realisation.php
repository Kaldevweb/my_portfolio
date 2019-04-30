<?php
include("connexion.php");
@$id = $_POST['id'];
$result = $bdd->query("SELECT * FROM realisation_portfolio WHERE id = '$id'") or die ($mysqli->error);
$val = $result->fetch_array();

//variable for getting base_url
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://'. $_SERVER['HTTP_HOST'] .dirname($_SERVER['PHP_SELF']);
// array with ids for disabling base_url
$ids = array(9,10,11);
//variable for displaying base_url or not
$displayBaseUrl = in_array($val['id'], $ids) ? null : $base_url;

echo "

	<div class='container containerProjetDetails'>

	    <h2>$val[titre]</h2>

	    <div id='detailProjet'>

	        <h3>Détails du projet</h3>

	        <p>$val[projet]</p>

	        <p>$val[cours]</p>

	        <p>$val[periode]</p>

	        <h3>Description</h3>

	        <p>$val[presentation]</p>

	        <h3>Mandat</h3>

	        <p>$val[mandat]</p>

	        <h3>Techniques | Logiciels</h3>

	        <p class='techniques_justify'>$val[techniques]</p>

	        <a class='openProjet' href='".$displayBaseUrl."$val[lien]' target='_blank'>Consulter le projet</a>

	    </div>

	    <div id='photoProjet'>

		$val[image]

	    </div>

	    <div class='nofloat'><!-- BLOCK detailProject et photoProject --></div>

	</div>

";
?>

