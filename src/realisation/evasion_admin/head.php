<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="author" content="Kevin AHLOYE">
<meta name="keywords" content="Evasion, vacances, destinations de rêve, détente, paradis">
<meta name="description" content="Site web Évasion qui vous propose des destinations de rêve pour vos prochaine vacances">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="icon" href="favicon/favicon.ico">
<link rel="icon" type="image/png" href=" favicon/favicon.png">
<link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico"> -->
<link href="styles.css" rel="stylesheet">
<link href="picSlider/picSlider.css" rel="stylesheet" type="text/css">
<!-- Fancy Box -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/slimbox2.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
<title>Évasion</title>

<script src="script.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="picSlider/picSlider.js"></script>
<script>
	$(function(){

		//Création Carrousel image	
		$(document).ready(function() {
					$('.demo-2').picSlider({animate: 'fade'});
		});

		//MENU HAMBURGER
		$( document ).ready(function() {
		$('#cssmenu li.has-sub>a').on('click', function(){
				$(this).removeAttr('href');
				var element = $(this).parent('li');
				if (element.hasClass('open')) {
					element.removeClass('open');
					element.find('li').removeClass('open');
					element.find('ul').slideUp();
				}
				else {
					element.addClass('open');
					element.children('ul').slideDown();
					element.siblings('li').children('ul').slideUp();
					element.siblings('li').removeClass('open');
					element.siblings('li').find('li').removeClass('open');
					element.siblings('li').find('ul').slideUp();
				}
			});

			$('#cssmenu>ul>li.has-sub>a').append('<span class="holder"></span>');

			(function getColor() {
				var r, g, b;
				var textColor = $('#cssmenu').css('color');
				textColor = textColor.slice(4);
				r = textColor.slice(0, textColor.indexOf(','));
				textColor = textColor.slice(textColor.indexOf(' ') + 1);
				g = textColor.slice(0, textColor.indexOf(','));
				textColor = textColor.slice(textColor.indexOf(' ') + 1);
				b = textColor.slice(0, textColor.indexOf(')'));
				var l = rgbToHsl(r, g, b);
				if (l > 0.7) {
					$('#cssmenu>ul>li>a').css('text-shadow', '0 1px 1px rgba(0, 0, 0, .35)');
					$('#cssmenu>ul>li>a>span').css('border-color', 'rgba(0, 0, 0, .35)');
				}
				else
				{
					$('#cssmenu>ul>li>a').css('text-shadow', '0 1px 0 rgba(255, 255, 255, .35)');
					$('#cssmenu>ul>li>a>span').css('border-color', 'rgba(255, 255, 255, .35)');
				}
			})();

			function rgbToHsl(r, g, b) {
			    r /= 255, g /= 255, b /= 255;
			    var max = Math.max(r, g, b), min = Math.min(r, g, b);
			    var h, s, l = (max + min) / 2;

			    if(max == min){
			        h = s = 0;
			    }
			    else {
			        var d = max - min;
			        s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
			        switch(max){
			            case r: h = (g - b) / d + (g < b ? 6 : 0); break;
			            case g: h = (b - r) / d + 2; break;
			            case b: h = (r - g) / d + 4; break;
			        }
			        h /= 6;
			    }
			    return l;
			}
		});	//FIN MENU HAMBURGER
	});   //FIN JQUERY
</script>
</head>

<body>

<div id="main"> <!-- MAIN -->

<header>
	<div id="logo">
		<a href="index.php">
			<img src="img/logo_evasion.png" alt="Logo Évasion">
		</a>	
	</div>

	<div id="logo_768">
		<a href="index.php">
			<img src="img/logo_evasion_768.png" alt="Logo Évasion">
		</a>	
	</div>

	<div id="logo_480">
		<a href="index.php">
			<img src="img/logo_evasion.png" alt="Logo Évasion">
		</a>	
	</div>

	<!-- Menu Hamburger 480 -->
	<div id="cssmenu">
		<ul>
		<?php
		include("connexion.php");

		//SELECTIONNER LES MENUS PRINCIPAUX cad les menus qui n'ont pas de parent = 0
		$query_menu = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE parent = 0 ORDER BY positionMenu") or die($bdd->errno);

		while($val = $query_menu -> fetch_array())
		{
			//SELECTIONNE LES SOUS-MENUS cad par leur parent
			$query_sousmenu = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE parent='$val[id]' ORDER BY positionMenu") or die($bdd->errno);

			//AFFICHE LES MEUNS PRINCIPAUX
			if($query_sousmenu -> num_rows == 0)
			{
				echo "
					
					<li>
						<a href='index.php?idmenu=$val[id]'>$val[nomMenu]</a>
					</li>
						
				";
			}
			//GÉRER LES MENUS PRINCIPAUX QUI ONT DES SOUS-MENUS
			else	
			{
				echo "
					<li  class='active has-sub'><a href='#'>$val[nomMenu]</a><ul>
				";

				//AFFICHE LES SOUS MENUS	
				while($val_sousmenu = $query_sousmenu ->fetch_array())
				{
					echo "
						<li>
							<a href='index.php?idmenu=$val_sousmenu[id]'>$val_sousmenu[nomMenu]</a>
						</li>
			
					";
				}

				echo "</ul></li>";
			}
		}
		?>
		</ul>
	</div>
	
	<!-- Menu Normal -->
	<nav>
		<ul>
		<!-- Menu Dynamique -->
		<?php
		include("connexion.php");

		//SELECTIONNER LES MENUS PRINCIPAUX cad les menus qui n'ont pas de parent = 0
		$query_menu = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE parent = 0 ORDER BY positionMenu") or die($bdd->errno);

		while($val = $query_menu -> fetch_array())
		{
			//SELECTIONNE LES SOUS-MENUS cad par leur parent
			$query_sousmenu = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE parent='$val[id]' ORDER BY positionMenu") or die($bdd->errno);

			//AFFICHE LES MEUNS PRINCIPAUX
			if($query_sousmenu -> num_rows == 0)
			{
				echo "
					
					<li>
						<a href='index.php?idmenu=$val[id]'>$val[nomMenu]</a>
					</li>
						
				";
			}
			//GÉRER LES MENUS PRINCIPAUX QUI ONT DES SOUS-MENUS
			else	
			{
				echo "
					<li><a href='#'>$val[nomMenu]</a><ul>
				";

				//AFFICHE LES SOUS MENUS	
				while($val_sousmenu = $query_sousmenu ->fetch_array())
				{
					echo "
						<li>
							<a href='index.php?idmenu=$val_sousmenu[id]'>$val_sousmenu[nomMenu]</a>
						</li>
			
					";
				}

				echo "</ul></li>";
			}
		}
		?>
		</ul>
	</nav>
	
	<div class="nofloat"><!-- block nav #logo--></div>	
</header>

	<!-- SLIDER -->
	<div class="picSlider demo-2">
		<ul>
			<!-- CREATION IMAGE DYNAMIQUE -->
			<?php
				include("connexion.php");

				$query = $bdd -> query("SELECT * FROM evasion_admin_slider ORDER BY id") or die($bdd->error);

				while($val = $query -> fetch_array())
				{
					echo "<li><img src='img/slider/$val[image]' class='img-reponsive'></li>";
				}
		
			?>
		</ul>
	</div>

	<div id='slider768'></div>