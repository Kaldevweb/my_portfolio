<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<title>Carte Pokémon</title>
<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="jscolor/jscolor.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<!-- JQUERY -->
<script>
	$(function(){

		$('#couleur_fond').change(function(){
			var color_fond = $('#couleur_fond').val();
			$('#message1').css('background-color', '#' + color_fond);
		}); // FIN fonction .change

		$('textarea').keyup(function(){
			$('#message_bulle').text($(this).val());
		});	// FIN fonction .keyup

		$('#couleur_police').change(function(){
			var color_police = $('#couleur_police').val();
			$('#message1').css('color', '#' + color_police);
		}); // FIN fonction .change

		$('#nom_expediteur').keyup(function(){
			$('#nom_expediteur_span').text($(this).val());
		});	// FIN fonction .keyup

		$('#nom_destinataire').keyup(function(){
			$('#nom_destinataire_span').text($(this).val());
		});	// FIN fonction .keyup

		$('#texte_police').change(function(){
			var choix_police = $('#texte_police').val();
			$('#message_bulle').css('font-family',choix_police);
		}); // FIN fonction .change

	}); // FIN FONCTION JQUERY

</script>
</head>

<body>

<div id="main"> <!-- DEBUT MAIN -->
	
<header>
	<img src="img/pokemon2.png" alt="">
</header>

<div id="container2"> <!-- DEBUT CONTAINER -->

<?php
include('connexion.php');
@$rad_pokemon = $_POST["rad_pokemon"];

//CHOIX POKEMON VIDE
if(empty($rad_pokemon))
{
	echo "	<br /><br /><br />
			<p class='vide'>Veuillez choisir un pokemon !</p>
			<br />
			<a href='index.php'>Retour</a>
	";
}
//CHOIX POKEMON CORRECT
else
{
	$query = $bdd -> query("SELECT * FROM pokemon_pokemon  WHERE  id='$rad_pokemon'") or die($bdd->errno);
	$val=$query->fetch_array();

	echo "	
			<h1>À vous de jouer !</h1>

			<form action='envoyer.php' method='post'>
			<div id='personnalisation_carte'>
				<!-- DESTINATAIRE ET EXPEDITEUR -->
				<div id='coordonnees'>

					<p>Votre nom</p>
					<input type='text' id='nom_expediteur' name='nom_expediteur' maxlength='20' placeholder='Inscrire votre nom' required>
					<p>Votre Courriel</p>
					<input type='email' id='mail_expediteur' name='mail_expediteur' placeholder='Inscrire votre courriel' required>
					
					<br /><br />
					
					<p>Nom de votre adversaire</p>
					<input type='text' id='nom_destinataire' name='nom_destinataire' maxlength='20' placeholder='Inscrire le nom du destinataire' required>
					<p>Le Courriel de votre adversaire</p>
					<input type='email' id='mail_destinataire' name='mail_destinataire' placeholder='Inscrire le courriel du destinataire' required>
					
				</div>

				<!-- PERSONNALISATION DE LA CARTE -->
				<div id='perso'>
					
					<p>Police du texte</p>
					<select name='texte_police' id='texte_police'>
	";
	
	// LISTE DEROULANTE POLICE DYNAMIQUE
	$query_police = $bdd -> query("SELECT * FROM pokemon_police") or die($bdd->errno);
	while($val_police = $query_police -> fetch_array())
	{
		echo "<option value=\"$val_police[nomPolice]\">$val_police[nomPolice]</option>";
	}

	echo "
			</select> 
			<br><br>

			<p>Couleur du texte</p>
			<input type='text' name='couleur_police' id='couleur_police' value='couleur' class='color' size='6' maxlength='6' /> <br><br>

			<p>Couleur du fond</p>
			<input type='text' name='couleur_fond' id='couleur_fond' value='couleur' class='color' size='6' maxlength='6' /> <br><br>

			<p>Adresser un message à votre adversaire</p>
			<textarea name='message_texarea' maxlength='100' placeholder='Faites parler votre Pokémon pour vous ici !' required></textarea>

				</div>		
		</div>

	<!-- CARTE POKEMON -->
	<table width='500' style='border: none'>
		<tr background=\"img/bulle.png\" style='background-repeat: no-repeat; background-position: center center;'>
			<td align='center' style='width: 405px; height: 215px;'>
					<p id='message_bulle' style='padding-top: 50px; width: 50%; line-height: 1.4em; font-family: Arial;'>Votre message pour votre adversaire apparaîtra ici !</p>
			</td>		
		</tr>
		<tr>
			<td align='center'><img src='img/$val[formatPokemon]'></td>
		</tr>
		<tr>
			<td align='center'>
				<div id='message1' style='border-left: 7px solid black; border-right: 7px solid black;  border-top: 3px solid black;  border-bottom: 3px solid black; height: 50px; width: 400px; background-color: white; border-radius: 10px 10px 10px 10px; padding: 20px; color: black;'>
					<p>Attention <strong><span id='nom_destinataire_span'></span></strong> !!
					<br /> Le dresseur <strong><span id='nom_expediteur_span'></span></strong> vous a envoyé un <strong>$val[nomPokemon]</strong> pour vous attaquer <p>
				</div>
			</td>
		</tr>
	</table>
	<input type='hidden' value='$val[formatPokemon]' name='format_pokemon_choisi'>
	<input type='hidden' value='$val[nomPokemon]' name='nom_pokemon_choisi'>
	<div class='nofloat'><!--block #perso #coordonnees--></div>
	<input type='submit' value=\"Envoyer votre Pokemon à l'attaque\" name='btn_envoyer' id='btn_envoyer'>
	";
}
?>


</form>
</div> <!-- FIN CONTAINER -->
<footer></footer>
</div> <!-- FIN MAIN -->

</body>
</html>