<?php  
include('head_admin.php');
?>

<script>
	$(function() {

		// SLIDER DU PRIX	
	    $( "#slider-range-min" ).slider({
			range: "min",
			value: 100,
			min: 1,
			max: 10000,
			slide: function( event, ui ) {
				$( "#amount" ).val(ui.value );
			}
	    });	//FIN $( "#slider-range-min" ).slider

	    //RECUPERER LA VALEUR DU SLIDER DANS INPUT AMOUNT
	    $( "#amount" ).val( $( "#slider-range-min" ).slider( "value" ) );

		//APPARITION BOUTON SUPPRIMER UNE OFFRE
		$('#sup_article_offre').change(function(){
			var id_offre_sup = $('#sup_article_offre').val();

			$('#btn_supp_article_offre').css('display','block');
		});	//FIN $('#sup_article_offre').click
		
		//BOUTON POUR SUPPRIMER UN ARTICLE
		$('#btn_supp_article_offre').click(function(){
			var id_offre_sup = $('#sup_article_offre').val();
			//Pour avoir une confirmation de la suppression
			var confirmation = confirm("Êtes-vous sûr de vouloir supprimer?");

			if(confirmation){
		    	$.ajax({
					type: "POST",
					url: "ajax/sup_offre.php",
					data: {"id_offre_sup" : id_offre_sup},
					dataType:"html",
					error:function(msg){
						alert( "Error !: " + msg );
					},
					success:function(data){
						$('#mess_validation').html(data);
						$('#sup_article_offre :selected').remove();
					},	//FIN SUCCES
		        }); //FIn AJAX
			}
		});	//FIN $('#btn_supp_article_offre').click

		//APPARITION BOUTON MODIFIER UNE OFFRE
		$('#mod_article_offre').change(function(){
			var id_offre_mod = $('#mod_article_offre').val();

	    	$.ajax({
				type: "POST",
				url: "ajax/pop_modif_article_offre.php",
				data: {"id_offre_mod" : id_offre_mod},
				dataType:"html",
				error:function(msg){
					alert( "Error !: " + msg );
				},
				success:function(data){
					$('#bg_popup_ssm').css('display','block');
					$('#btn_modif_article_offre').css('display','block');
					$('#pop_modif_article').html(data);
				},	//FIN SUCCES
			 }); //FIn AJAX
		});	//FIN $('#btn_modif_article_offre').click

		//BOUTON POUR MODIFIER UNE OFFRE
		$('#btn_modif_article_offre').click(function(){
			var mod_titre_offre = $('#mod_titre_offre').val();
			var mod_description_offre = $('#mod_description_offre').val();
			var mod_prix_offre = $('#mod_prix_offre').val();
			var mod_article_offre = $('#mod_article_offre').val();

	    	$.ajax({
				type: "POST",
				url: "ajax/modif_article_offre.php",
				data: {"mod_titre_offre" : mod_titre_offre, "mod_description_offre" : mod_description_offre, "mod_prix_offre" : mod_prix_offre, "mod_article_offre" : mod_article_offre},
				dataType:"html",
				error:function(msg){
					alert( "Error !: " + msg );
				},
				success:function(data){
					$('#mess_validation2').html(data);	
				}	//FIN SUCCES
	        }); //FIn AJAX
		});	//FIN $('#btn_modif_article_offre').click
	});	//FIN JQUERY
</script>

<body>
<div id="wrapper">
	<?php
	//Ajouter le Menu Navigation  
	include("panel_nav.php");
	?>        
	<div id="container">
		<h4>Gérer les offres</h4>
		<hr />

		<!-- AJOUTER UNE OFFRE -->
		<div id="boite_separation">
			<form method="POST" action="upload_offres.php" enctype="multipart/form-data">
				<h1>Ajouter une nouvelle offre</h1>
				<p><label for="">Titre de l'offre</label><input type="text" name ='new_offre_titre' id="new_offre_titre"></p>
				<p><label for=''>Description de l'offre</label><textarea name ='new_offre_description' id='new_offre_description'></textarea></p>
				<p><label for="amount">Prix de l'Offre</label><span class='price'>$</span><input type="text" name='amount' id="amount" readonly style=" color:#f6931f; font-weight:bold; width:5%;"><div id="slider_pos"><div id="slider-range-min"></div></div></p>
				<p><label for="">Ajouter une image</label><input type="file" name="avatar" id='avatar'></p>
				<button id='btn_ajout_article_offre' value='Enregistrer' >Enregistrer</button>
				

			</form>
		</div>

		<!-- MODIFIER UNE OFFRE -->
		<div id="boite_separation">
			<h1>Modifier une offre</h1>
			
			<?php
				include("../connexion.php");
				$query = $bdd -> query("SELECT * FROM evasion_admin_article_offre ORDER BY titre") or die($bdd->error);

				echo "<select id='mod_article_offre'>";
				while($val = $query -> fetch_array())
				{
					echo "<option value='$val[id]'>$val[titre]</option>";
				}
				echo "</select>";		
			?>
			<div id="bg_popup_ssm">
				<div id="pop_modif_article"></div>
				<button id='btn_modif_article_offre' value='Modifier' >Modifier</button>
				<div id="mess_validation2"></div>
			</div>
		</div>

		<!-- SUPPRIMER UNE OFFRE -->
		<div id="boite_separation">
			<h1>Supprimer une offre</h1>
			<?php
				include("../connexion.php");
				$query = $bdd -> query("SELECT * FROM evasion_admin_article_offre ORDER BY titre") or die($bdd->error);
				
				echo "<select id='sup_article_offre'>";

				while($val = $query -> fetch_array())
				{
					echo "<option value='$val[id]'>$val[titre]</option>";
				}

				echo "</select>";		
			?>
			<button id='btn_supp_article_offre' value='Supprimer'>Supprimer</button>
			<div id="mess_validation"></div>
		</div>

	</div> <!-- FIN CONTAINER -->
</div> <!-- Fin wrapper -->
</body>
</html>					