<footer>
	<div id="reseaux_flex">
		<h1>Suivez-nous !</h1>
		<div id="reseaux">
			<a href="https://twitter.com/?lang=fr"><img src="img/twittter.png" alt="Lien vers le Twitter du site web Évasion" class='img_marginRight'></a>
			<a href="https://www.facebook.com/"><img src="img/insta.png" alt="Lien vers le Instagram du site web Évasion"></a>
			<a href="https://www.instagram.com/"><img src="img/faceboook.png" alt="Lien vers le facebook du site web Évasion" class='img_marginRight'></a>
		</div>
	</div>
	<div class="nofloat"><!-- block div#reseaux_flex--></div>	

	<section>
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

		<p>25 Rue du Pingouin<br >Montreal, Canada (QC)<br>H3C 3J7</p>
		<hr />
		<p>&copy; Tous droit réservé 2016, Kevin AH-LOYE</p>
	</section>
</footer>

</div> <!-- FIN MAIN -->
</body>
</html>