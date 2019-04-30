<?php  
include('head_admin.php');
?>

<script>
	$(function() {

		//APPARITION BOUTON SUPPRIMER UN ARTICLE
			$('#sup_image_slider').change(function(){

				var id_sup_slider = $('#sup_image_slider').val();
				$('#btn_sup_slider').css('display','block');

			});	//FIN $('#sup_article_destination').click


				//BOUTON POUR SUPPRIMER UN ARTICLE
				$('#btn_sup_slider').click(function(){

					var id_sup_slider = $('#sup_image_slider').val();

				    	$.ajax({
							type: "POST",
							url: "ajax/sup_img_slider.php",
							data: {"id_sup_slider" : id_sup_slider},
							dataType:"html",
							error:function(msg){
								alert( "Error !: " + msg );
							},
							success:function(data){
								$('#mess_validation').html(data);	
							}	//FIN SUCCES
				        }); //FIn AJAX
				});	//FIN $('#btn_supp_article_destination').click
	});	//FIN JQUERY
</script>

<body>
<div id="wrapper">
	<?php
	//Ajouter le Menu Navigation  
	include("panel_nav.php");
	?>  

	<div id="container">
		<h4>Gérer le Slider</h4>
		<hr />
		
		<!-- UPLOADER ET AJOUTER UNE IMAGE -->
		<div id="boite_separation">
			<h1>Ajouter une image au Slider</h1>
			
			<form id='form_slider' method='POST' action='upload_slider.php' enctype='multipart/form-data'>
			<p><label for="">Choisir une image</label><input type="file" name="avatar" id='avatar'></p>
			
			<button id='btn_ajout_img_slider' value='Enregistrer' >Upload</button>
		</form>

		</div>	<!-- Fin boite_separation_2	 -->

		<!-- SUPPRIMER UNE IMAGE -->
		<div id="boite_separation">
			<h1>Supprimer une image du Slider</h1>

			<?php
				include("../connexion.php");

				$query = $bdd -> query("SELECT * FROM slider") or die($bdd->error);
				echo "<select id='sup_image_slider'>";
				while($val = $query -> fetch_array())
				{
					echo "<option value='$val[id]'>$val[image]</option>";
				}
				echo "</select>";		
			?>

			<button id='btn_sup_slider' value='Supprimer' >Supprimer</button>
			<div id="mess_validation"></div>
		</div>	<!-- Fin boite_separation	 -->

	</div> <!-- FIN CONTAINER -->
</div> <!-- Fin wrapper -->
</body>
</html>
