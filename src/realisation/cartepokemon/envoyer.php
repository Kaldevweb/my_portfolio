<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<title>Carte Pokémon</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div id="main"> <!-- DEBUT MAIN -->
	
<header>
	<img src="img/pokemon2.png" alt="">
</header>

<div id="container"> <!-- DEBUT CONTAINER -->

<?php
include('connexion.php');
require_once('class.phpmailer.php');
$mail = new PHPMailer(true); //new permet d'acceder a la class au complet.
@$format_pokemon_choisi = $_POST["format_pokemon_choisi"];
@$nom_pokemon_choisi = $_POST["nom_pokemon_choisi"];
@$nom_expediteur = $_POST["nom_expediteur"];
@$mail_expediteur = $_POST["mail_expediteur"];
@$nom_destinataire = $_POST["nom_destinataire"];
@$mail_destinataire = $_POST["mail_destinataire"];
@$texte_police = $_POST["texte_police"];
@$couleur_police = $_POST["couleur_police"];
@$couleur_fond = $_POST["couleur_fond"];
@$message_texarea = $_POST["message_texarea"];

$carte = "	<table width='500' style='border: none'>
				<tr background='img/bulle.png' style='background-repeat: no-repeat; background-position: center center;'>
					<td align='center' style='width: 405px; height: 215px;'>
							<p id='message_bulle' style='width: 50%; line-height: 1.4em; font-family: $texte_police; padding-bottom: 50px;'>$message_texarea</p>
					</td>		
				</tr>
				<tr>
					<td align='center'><img src='img/$format_pokemon_choisi'></td>
				</tr>
				<tr>
					<td align='center' style='border-left: 7px solid black; border-right: 7px solid black;  border-top: 3px solid black;  border-bottom: 3px solid black; height: 50px; width: 400px; background-color: #$couleur_fond; border-radius: 10px 10px 10px 10px; padding: 20px; color: #$couleur_police;'>
							<p>Attention <strong><span id='nom_destinataire_span'>$nom_destinataire</span></strong> !!
							<br /> Le dresseur <strong><span id='nom_expediteur_span'>$nom_expediteur</span></strong> vous a envoyé un <strong>$nom_pokemon_choisi</strong> pour vous attaquer <p>
					</td>
				</tr>
			</table>
";
			
try {
	$mail->AddAddress($mail_destinataire, $nom_destinataire); //receveur : adresse, Nom qui apparait
	$mail->SetFrom($mail_expediteur, $nom_expediteur); //expediteur : Premier c'est l'adresse, deuxieme c'est le nom qui sera afficher
	$mail->Subject = 'Duel Pokemon'; //titre
	$mail->MsgHTML($carte); //Message qu'on a écrit est en html
	$mail->Send();
	} catch (phpmailerException $e) {
		echo $e->errorMessage(); //Pretty error messages from PHPMailer
	} catch (Exception $e) {
		echo $e->getMessage(); //Boring error messages from anything else!
	}

echo"	<br /><br />
		<p><font color='red'>Votre duel à bien été envoyé !</font></p>
		<br /><br />
		Votre adversaire est  $nom_destinataire. Il recevra son duel à l'adresse : <strong>$mail_destinataire</strong>.
		<br /><br />
		<em>expediteur : $mail_expediteur</em>
		<br /><br />
		<a href='index.php'>Retour</a>
";				
?>
</div> <!-- FIN CONTAINER -->
<footer></footer>
</div> <!-- FIN MAIN -->

</body>
</html>