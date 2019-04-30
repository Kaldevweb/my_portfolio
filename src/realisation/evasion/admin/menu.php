
<?php  
include('head_admin.php');
?>

<script>
	$(function() {

		$( "#radio" ).buttonset();

		$( "input[type='radio']"  ).change(function(){
			var id_radio = $( 'input[name=radio]:checked' ).val();
			// alert(id_radio);
        	$.ajax({
				type: "POST",
				url: "ajax/pop_modif_titre_mp.php",
				data: {"id_radio" : id_radio},
				dataType:"html",
				error:function(msg){
					alert( "Error !: " + msg );
				},
				success:function(data){
					$('#bg_popup').css('display','block');
					$('#popup_modif_titre_mp').html(data);
					$('#btn_modif_titre_mp').css('display','inline-block');
				}	//FIN SUCCES
			 
            }); //FIn AJAX
		});	//FIN $( "input[type='radio']"  ).change

		// Click sur le boutton Modifier pour modifier le titre
		$("#btn_modif_titre_mp").click(function(){
			var new_titre = $('#nouveau_titre_mp').val();
			var id_radio = $( 'input[name=radio]:checked' ).val();
			
        	$.ajax({
				type: "POST",
				url: "ajax/modif_titre_mp.php",
				data: {"new_titre" : new_titre, "id_radio" : id_radio},
				dataType:"html",
				error:function(msg){
					alert( "Error !: " + msg );
				},
				success:function(data){
					if( data == "Veuillez remplir tous les champs !")
					{
						$('#info_pop_modif_titre_mp').html(data);
					}
					else
					{
						location.reload();
					}
					// Methode 2
					// //Dispatcher le data
					// var tab=data.split('||||')
					// $('#radio').html(tab[0]);
					// $( "#radio" ).buttonset();
					
					// $('#info_pop_modif_titre_mp').html(tab[1]);	
				}	//FIN SUCCES
            }); //FIn AJAX
		});	//FIN $("btn_modif_titre_mp").click



		$( "#sortable" ).disableSelection();

		//DRAGGABLE CHANGEMENT POS MP
		$( "#sortable" ).sortable({
			revert:true,
			stop:function(){
				var data = $(this).sortable('toArray'); //affiche le id du menu

				$.ajax({
					type: "POST",
					url: "ajax/position.php",
					data: {data:data},
					dataType:"html",
					error:function(msg){
					alert( "Error !: " + msg );
					},
					success:function(data){
					// $('#info_position').html("Chamngement effectué.");
				 
				}}); //FIN AJAX
			} //FIN stop
		});	//FIN $( "#sortable" ).sortable

	});	//FIN JQUERY
</script>

<body>
<div id="wrapper">

<?php
//Ajouter le Menu Navigation  
include("panel_nav.php");
?>        

<div id="container">
		<h4>Gérer les Menu Principaux</h4>
		<hr />

	<div id='boite_separation_2'>
	<!-- Changer le titre des menus principaux	 -->
		<h1>Choisissez le menu principal pour modifier le titre </h1>
		
	<!-- Creation liste Radio	 -->
		<?php  
		include("../connexion.php");

		$query = $bdd -> query("SELECT * FROM menuevasion WHERE parent='0' ORDER BY positionMenu") or die($bdd->error);
		
		echo "<div id='radio'>";
		while($val = $query -> fetch_array())
		{
			echo "
				<input type='radio' id='$val[id]' name='radio' value='$val[id]'><label for='$val[id]'>$val[nomMenu]</label>
			";
		}
		echo "</div>";
		?>
		
		<div id="bg_popup">
			<!-- Affiche la fenetre avec le titre à modifier -->
			<div id="popup_modif_titre_mp"></div>
			<!-- Bouton Modifier qui s'active après avoir choisi le mp -->
			<button id='btn_modif_titre_mp' value='Modifier'>Modifier</button>
			<!-- Afficher la validation de la modification		 -->
			<div id="info_pop_modif_titre_mp"></div>
		</div>
	</div>
	
	<div id='boite_separation'>
	<!-- Changer l'ordre des menus	 -->
		<h1>Changer la position des menus</h1>

	<!-- Creation menu sortable -->
		<?php  
		include("../connexion.php");

		$query = $bdd -> query("SELECT * FROM menuevasion WHERE parent='0' ORDER BY positionMenu") or die($bdd->error);

		echo "<ul id='sortable'>";
		while($val = $query -> fetch_array())
		{
			echo "
				<li id='$val[id]' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>$val[nomMenu]</li>
			";
		}
		echo "</ul>";
		?>
	</div>
</div> <!-- FIN CONTAINER -->

</div> <!-- Fin wrapper -->
</body>
</html>
