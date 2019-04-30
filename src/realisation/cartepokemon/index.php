<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<title>Carte Pokémon</title>
<link rel="stylesheet" href="styles.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>

<!-- JQUERY -->
<script>
	$(function(){

		$('a.downarrow').click(function(){
			var PosOnglet = $('#onglet_admin').position().top;
			//Ouvrir
			if(PosOnglet === -260)	
			$('#onglet_admin').animate({top: "0px"});
			//Fermer
			if(PosOnglet === 0)
			$('#onglet_admin').animate({top: "-260"});
		});// FIN $('a#fleche').click

	}); // FIN FONCTION JQUERY

</script>
</head>

<body>
<!-- ADMINISTRATEUR -->
<div id="onglet_admin">
	<form id="form_admin" action="validation.php" method="post" name="form">
		<h2>Utilisateur:</h2><p><input name="uti" type="text" id="uti" size="40" placeholder="User (test_user)" required /></p>
		<h2>Mot de passe:</h2><p><input name="pw" type="password" id="pw" size="40" placeholder="Pass (test_pass)" required/></p>
		<input type="submit" id="valid_admin" name="action" value="Enter" />
		<?php
		$tab_erreur=array("","Données invalides !!!");
		print '<p>'.@$tab_erreur[$_GET["erreur"]].'</p>'; 
		?>
	</form>
	<a href="#" class='downarrow'></a>
</div>

<div id="main"> <!-- DEBUT MAIN -->
	
<header>
	<img src="img/pokemon2.png" alt="">
</header>

<div id="container"> <!-- DEBUT CONTAINER -->
	<h1>Choisissez votre Pokémon à envoyer !</h1>	
	
	<form action="perso.php" method="post">
		<div id="choix_pokemon">
			<!-- //CREATION CHOIX POKEMON RADIO DYNAMIQUE-->
			<?php  
			include('connexion.php');
			$query = $bdd -> query("SELECT * FROM pokemon_pokemon ORDER BY nomPokemon ASC") or die($bdd->errno);
			while($val=$query->fetch_array())
			{
				echo " <div id='pokemon'>
							<p>$val[nomPokemon]</p>
							<article>
								<img src='img/thumbs/$val[formatPokemon]'>
							</article>
							<p><input type='radio' name='rad_pokemon' value='$val[id]'></p>
						</div>
				";
			}
			?>
			<div class="nofloat"><!--block articles--></div>
		</div>
		<input type="submit" value="Choisir" name="btn_choisir" id="btn_choisir">
	</form>


</div> <!-- FIN CONTAINER -->
<footer></footer>
</div> <!-- FIN MAIN -->

</body>
</html>