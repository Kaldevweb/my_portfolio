<?php  

include('head_admin.php');

?>



<script>

	$(function() {



		//BOUTON POUR UPLOADER IMAGE

		$('#upload_img').click(function(){

			var nom_ss_menu = $('#nom_ss_menu').val();

			var id_nom_mp = $('#id_nom_mp').val();

			var contenu_ss_menu = $('#contenu_ss_menu').val();

			

		    	$.ajax({

					type: "POST",

					url: "ajax/ajout_ssm.php",

					data: {"nom_ss_menu" : nom_ss_menu, "id_nom_mp" : id_nom_mp, "contenu_ss_menu" : contenu_ss_menu},

					dataType:"html",

					error:function(msg){

						alert( "Error !: " + msg );

					},

					success:function(data){

						$('#mess_validation').html(data);	

					}	//FIN SUCCES

				 

		        }); //FIn AJAX

		});	//FIN $('#upload_img').click



		//APPARITION BOUTON SUPPRIMER UN ARTICLE

		$('#sup_article_destination').change(function(){

			var id_article_sup = $('#sup_article_destination').val();

			$('#btn_supp_article_destination').css('display','block');
		 
		});	//FIN $('#sup_article_destination').click


		//BOUTON POUR SUPPRIMER UN ARTICLE

		$('#btn_supp_article_destination').click(function(){

			var id_article_sup = $('#sup_article_destination').val();
			

		    	$.ajax({

					type: "POST",

					url: "ajax/sup_article_destination.php",

					data: {"id_article_sup" : id_article_sup},

					dataType:"html",

					error:function(msg){

						alert( "Error !: " + msg );

					},

					success:function(data){

						$('#mess_validation').html(data);	

					}	//FIN SUCCES

				 

		        }); //FIn AJAX

		});	//FIN $('#btn_supp_article_destination').click


		//APPARITION BOUTON MODIFIER UN ARTICLE
		$('#mod_article_destination').change(function(){

			var id_article_modif = $('#mod_article_destination').val();

	    	$.ajax({

				type: "POST",

				url: "ajax/pop_modif_article_dest.php",

				data: {"id_article_modif" : id_article_modif},

				dataType:"html",

				error:function(msg){

					alert( "Error !: " + msg );

				},

				success:function(data){
					$('#btn_modif_article_destination').css('display','block');
					$('#bg_popup_ssm').css('display','block');
					$('#pop_modif_article').html(data);
				}	//FIN SUCCES
			 }); //FIn AJAX
		});	//FIN $('#mod_article_destination').click


		//BOUTON POUR MODIFIER UN ARTICLE
		$('#btn_modif_article_destination').click(function(){

			var mod_titre_article = $('#mod_titre_article').val();
			var mod_description_article = $('#mod_description_article').val();
			var mod_source_article = $('#mod_source_article').val();
			var id_modif_article = $('#mod_article_destination').val();
			var modif_article_pays = $('#modif_article_pays').val();

		    	$.ajax({

					type: "POST",

					url: "ajax/modif_article_dest.php",

					data: {"mod_titre_article" : mod_titre_article, "mod_description_article" : mod_description_article, "mod_source_article" : mod_source_article, "id_modif_article" : id_modif_article, "modif_article_pays" : modif_article_pays},

					dataType:"html",

					error:function(msg){

						alert( "Error !: " + msg );

					},

					success:function(data){

						$('#mess_validation2').html(data);	

					}	//FIN SUCCES

				 

		        }); //FIn AJAX

		});	//FIN $('#btn_modif_article_destination').click	

	});	//FIN JQUERY

</script>



<body>

<div id="wrapper">

<?php

//Ajouter le Menu Navigation  

include("panel_nav.php");

?>        



<div id="container">

	<h4>Gérer les Articles de Destinations</h4>

	<hr />



	<!-- AJOUTER UN ARTICLE -->

	<div id="boite_separation">

		<form method="POST" action="upload.php" enctype="multipart/form-data">

		<h1>Ajouter un nouvel article</h1>

		<p><label for="">Titre de l'article</label><input type="text" name ='new_article_titre' id="new_article_titre"></p>

		<p><label for="">Description de l'article</label><input type="text" name ='new_article_description' id="new_article_description"></p>

		<p><label for="">Source de l'article</label><input type="text" name ='new_article_source' id="new_article_source"></p>

		<p><label for="">Choisir la catégorie</label>

		<select name="new_article_pays" id="new_article_pays">

			<?php

				include("../connexion.php");

				$query = $bdd -> query("SELECT DISTINCT pays FROM article_destination ORDER BY pays") or die($bdd->error);

				while($val = $query -> fetch_array())

				{

					echo "<option value='$val[pays]'>$val[pays]</option>";

				}

			?>

		</select>

		

			<p><label for="">Ajouter une image</label><input type="file" name="avatar" id='avatar'></p>

			<button id='btn_ajout_article_destination' value='Enregistrer' >Enregistrer</button>

		</form>

	</div>
	
	<!-- MODIFIER UN ARTICLE -->
	<div id="boite_separation">
		<h1>Modifier un article</h1>


		<?php

			include("../connexion.php");

			$query = $bdd -> query("SELECT * FROM article_destination ORDER BY pays") or die($bdd->error);



			echo "<select id='mod_article_destination'>";

			while($val = $query -> fetch_array())

			{

				echo "<option value='$val[id]'>$val[titre]  ($val[pays])</option>";

			}

			echo "</select>";		

		?>
		
		<div id="bg_popup_ssm">
			<div id="pop_modif_article"></div>
			<button id='btn_modif_article_destination' value='Modifier' >Modifier</button>
			<div id="mess_validation2"></div>
		</div>
		
	</div>


	<!-- SUPPRIMER UN ARTICLE -->
	<div id="boite_separation">

		<h1>Supprimer un article</h1>

		<?php

			include("../connexion.php");

			$query = $bdd -> query("SELECT * FROM article_destination ORDER BY pays") or die($bdd->error);



			echo "<select id='sup_article_destination'>";

			while($val = $query -> fetch_array())

			{

				echo "<option value='$val[id]'>$val[titre]  ($val[pays])</option>";

			}

			echo "</select>";		

		?>

		<button id='btn_supp_article_destination' value='Supprimer' >Supprimer</button>

		<div id="mess_validation"></div>

	</div>	



</div> <!-- FIN CONTAINER -->



</div> <!-- Fin wrapper -->

</body>

</html>			