<div id="main"> <!-- DEBUT MAIN -->
	
<header>
	<img src="../img/pokemon2.png" alt="">
</header>

<div id="container"> <!-- DEBUT CONTAINER -->
	<h1>Ajouter un nouveau Pokémon</h1>
	<!-- FORMULAIRE AJOUTER UN POKEMON -->
	<form id='form_upload' method='POST' action='upload.php' enctype='multipart/form-data'>
		<table cellspacing='10' cellpadding='2'>
		<tr><td>Fichier</td><td><input type='file' name='nom_image'></td></tr>
		<tr><td>Nom du Pokemon</td><td><input type='text' name='nom_pokemon'></td></tr>
		</table>
		<br />
		<input class='center' type='submit' name='envoyer' value='Ajouter'>
	</form>

	<h1>Ajouter une nouvelle Police</h1>
	<!-- FORMULAIRE AJOUTER UNe NOUVELLE POLICE -->
	<form id='form_upload' method='POST' action='ajout.php' enctype='multipart/form-data'>
		<table cellspacing='10' cellpadding='2'>
		<tr><td>Police</td><td><input type='text' name='nom_police' required></td></tr>
		</table>
		<br />
		<input class='center' type='submit' name='envoyer' value='Ajouter'>
	</form>

	<p><a class='left' href='index.php?action=logout'>Se déconnecter</a></p>
</div> <!-- FIN CONTAINER -->

<footer>
	<?php 
	include("pied.php");
	?>
</footer>
</div> <!-- FIN MAIN -->
