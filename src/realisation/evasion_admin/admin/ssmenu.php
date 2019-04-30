<?php  

include('head_admin.php');

?>



<script>

	$(function() {



		//SELECTION DU MENU PRINCIPAL POUR AJOUTER UN SS

	    $( "#selectable" ).selectable({

			stop: function() {

				var result = $( "#select-result" ).empty();



				$( ".ui-selected", this ).each(function() {

			  		var nom_mp = $(this).text();



						$.ajax({

							type: "POST",

							url: "ajax/pop_ajout_ssm.php",

							data: {"nom_mp":nom_mp},

							dataType:"html",

							error:function(msg){

								alert( "Error !: " + msg );

							},

							success:function(data){

								$('#bg_popup_ssm').css('display','block');

								$('#pop_ajout_ssm').html(data);

								$('#btn_ajout_ssm').css('display','inline-block');

							}	//FIN SUCCES

						}); //FIN AJAX	

				});	//FIN $( ".ui-selected", this ).each

			}	//FIN STOP

	    });	//FIN $( "#selectable" ).selectable



	    //BOUTON POUR AJOUTER LE SOUS MENU

		$('#btn_ajout_ssm').click(function(){

			var nom_ss_menu = $('#nom_ss_menu').val();

			var id_nom_mp = $('#id_nom_mp').val();

			//POUR RÉCUPÉRER LES DONNÉES DU TINYMINCE, LE .val() n'est pas possible il faut ce code
			var contenu_ss_menu = tinyMCE.get('contenu_ss_menu').getContent();

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

		});	//FIN $('#btn_ajout_ssm').click



		//POPUP CONFIRMATION SUPPRESSION

		$( "#dialog-confirm" ).css("display","none");



		//ACTIVATION DU DRAGGABLE	

		$( "p", $( "#draggable" )).draggable({

	  		revert: true

		});	//FIN $( "p", $( "#draggable" )).draggable



		//CORBEILLE DROPPABLE + POPUP POUR CONFIRMATION SUPPRESSION	

	    $( "#droppable" ).droppable({

	      	drop: function( event, ui ) {

	        	var item = ui.draggable.attr("id");



	        	$( "#dialog-confirm" ).dialog({

	      		resizable: false,

	      		show: { effect: "explode", duration: 800 },

	      		height:200,

	      		width:400,

	      		modal: true,

	      		buttons: {

	        		"Supprimer": function() {

	    				$.ajax({

					  		type: "POST",

					  		url: "ajax/sup_ssm.php",

					  		data: {id:item},

					  		dataType:"html",

					  		error:function(msg){

								alert( "Error !: " + msg );

					  		},

					  		success:function(data){

					  			$('#draggable').html(data);
					  			location.reload();

				  	  		}

						});	//FIn AJAX



	      				$( this ).dialog( "close" );

	        		},	//FIN SUPPRIMER



	        		"Annuler": function() {

	          			$( this ).dialog( "close" );

	        		}

	      		}	//FIN buttons

	    	});	//FIN $( "#dialog-confirm" ).dialog

	       }

	   });	//FIN $( "#droppable" ).droppable	

	    //ACTIVATION DE L'ACCORDION
	    $( "#accordion" ).accordion({
	    	heightStyle: "content", //Pour que le height soit auto
	    	//Pour que l'accordion reste fermé en ouverture de page, il faut ces 2 éléments
	    	active: false,
	    	collapsible: true
	    });

	    //ACTIVATION SORTABLE 1 (draggable)
	    $( "#sortable1" ).disableSelection();
		//DRAGGABLE CHANGEMENT POS MP
		$( "#sortable1" ).sortable({
			revert:false,
			stop:function(){
				var data = $(this).sortable('toArray'); //affiche le id du menu

				$.ajax({
					type: "POST",
					url: "ajax/position_ssm.php",
					data: {data:data},
					dataType:"html",
					error:function(msg){
					alert( "Error !: " + msg );
					},
					success:function(data){
				}}); //FIN AJAX
			} //FIN stop
		});	//FIN $( "#sortable1" ).sortable

	    //ACTIVATION SORTABLE 3 (draggable)
	    $( "#sortable3" ).disableSelection();
		//DRAGGABLE CHANGEMENT POS SSM
		$( "#sortable3" ).sortable({
			revert:false,
			stop:function(){
				var data = $(this).sortable('toArray'); //affiche le id du menu

				$.ajax({
					type: "POST",
					url: "ajax/position_ssm.php",
					data: {data:data},
					dataType:"html",
					error:function(msg){
					alert( "Error !: " + msg );
					},
					success:function(data){
				}}); //FIN AJAX
			} //FIN stop
		});	//FIN $( "#sortable3" ).sortable

	    //ACTIVATION SORTABLE 2 (draggable)
	    $( "#sortable2" ).disableSelection();
		//DRAGGABLE CHANGEMENT POS SSM
		$( "#sortable2" ).sortable({
			revert:false,
			stop:function(){
				var data = $(this).sortable('toArray'); //affiche le id du menu

				$.ajax({
					type: "POST",
					url: "ajax/position_ssm.php",
					data: {data:data},
					dataType:"html",
					error:function(msg){
					alert( "Error !: " + msg );
					},
					success:function(data){
				}}); //FIN AJAX
			} //FIN stop
		});	//FIN $( "#sortable2" ).sortable

	    //ACTIVATION SORTABLE 4 (draggable)
	    $( "#sortable4" ).disableSelection();
		//DRAGGABLE CHANGEMENT POS SSM
		$( "#sortable4" ).sortable({
			revert:false,
			stop:function(){
				var data = $(this).sortable('toArray'); //affiche le id du menu

				$.ajax({
					type: "POST",
					url: "ajax/position_ssm.php",
					data: {data:data},
					dataType:"html",
					error:function(msg){
					alert( "Error !: " + msg );
					},
					success:function(data){
				}}); //FIN AJAX
			} //FIN stop
		});	//FIN $( "#sortable4" ).sortable

	    //ACTIVATION SORTABLE 5 (draggable)
	    $( "#sortable5" ).disableSelection();
		//DRAGGABLE CHANGEMENT POS SSM
		$( "#sortable5" ).sortable({
			revert:false,
			stop:function(){
				var data = $(this).sortable('toArray'); //affiche le id du menu

				$.ajax({
					type: "POST",
					url: "ajax/position_ssm.php",
					data: {data:data},
					dataType:"html",
					error:function(msg){
					alert( "Error !: " + msg );
					},
					success:function(data){
				}}); //FIN AJAX
			} //FIN stop
		});	//FIN $( "#sortable5" ).sortable

		$('#accordion_sortable ul li').click(function(){
			var id_ssm = $(this).attr('id');

				$.ajax({
					type: "POST",
					url: "ajax/pop_modif_ssm.php",
					data: {"id_ssm" : id_ssm},
					dataType:"html",
					error:function(msg){
					alert( "Error !: " + msg );
					},
					success:function(data){
					$('#bg_popup').css('display','block');
					$('#popup_modif_ssm').html(data);
					$('#btn_modif_titre_mp').css('display','inline-block');
				}}); //FIN AJAX		
		});	//Fin $('#accordion_sortable ul li').click

		// Click sur le boutton Modifier pour modifier le titre
		$("#btn_modif_titre_mp").click(function(){
			var id_ssm = $('#id_nom_ssm').val();
			var nvo_titre_ssm = $('#nvo_titre_ssm').val();

        	$.ajax({
				type: "POST",
				url: "ajax/modif_titre_ssm.php",
				data: {"id_ssm" : id_ssm, "nvo_titre_ssm" : nvo_titre_ssm},
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
						$('#info_pop_modif_titre_mp').html(data);
					}
				}	//FIN SUCCES
            }); //FIn AJAX
		});	//FIN $("btn_modif_titre_mp").click		 

	});	//FIN JQUERY
</script>

<body>

<div id="wrapper">



<?php

//Ajouter le Menu Navigation  

include("panel_nav.php");

?>        



<div id="container">

	<h4>Gérer les Sous-Menus</h4>

	<hr />

	

	<div id='boite_separation_2'>

		<!-- AJOUTER UN SOUS MENU -->

		<h1>Choisissez le Menu principal auquel vous souhaitez ajouter un Sous-menu </h1>



		<!-- CREATION SELECTABLE POUR CHOIX MENU PRINCIPAL -->

		<?php 

		include("../connexion.php");



		echo "<ol id='selectable'>";



		$query = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE parent='0' ORDER BY positionMenu") or die($bdd->error);

		while($val = $query -> fetch_array())

		{

			echo "<li id='$val[id]' value='$val[id]' class='ui-widget-content'>$val[nomMenu]</li>";

		}	



		echo "</ol>";



		?>

		<div id="bg_popup_ssm">

			<div id="pop_ajout_ssm"></div>

			<textarea id='contenu_ss_menu'></textarea>

			<button id='btn_ajout_ssm' value='Ajouter' >Ajouter</button>

			<div id="mess_validation"></div>

		</div>

	</div>



	<div id='boite_separation_2'>

		<!-- SUPPRIMER UN SOUS MENU -->

		<h1>Supprimer un Sous-menu par un Drag sur la poubelle</h1>



		<div id="bg_sup_ssm">

			<!-- CREATION DES SOUS-MENUS DRAGGABLE -->

			<?php

			include("../connexion.php");

			$query = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE parent!='0' ORDER BY positionMenu") or die($bdd->error);



			echo"<div id='draggable'>";				

			while($val=$query->fetch_array())

			{

				echo"<p class='ui-state-default' id='$val[id]'>$val[nomMenu]</p>";

			}

			echo"</div>";

			?>

			

			<!-- CREATION DE LA CORBEILLE POUR DROP LE SOUS-MENU -->

			<div id="droppable">

				<img src="corbeille.png" alt="">

			</div>

			<div class="nofloat"></div>

		</div>

	</div>

	

	<!-- POP UP POUR VALIDER LA SUPPRESSION OU PAS -->

	<div id="dialog-confirm" title="Confirmation de la suppression">

	  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>

	  	Vous allez supprimer définitivement ce Sous-Menu. 

	  	<strong>Êtes-vous certain ?</strong>

	  </p>

	</div>

	<div id='boite_separation_2'>
		<!-- SUPPRIMER UN SOUS MENU -->
		<h1>Changer l'ordre d'un Sous-menu ou Modifier le titre d'un Sous-menu</h1>

		<div id="accordion">
		<!-- Creation Menu en accordion	 -->
		<?php
			include("../connexion.php");
			@$count = 1;
			//Recupération des Menu Principaux
			$query = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE parent='0' ORDER BY positionMenu") or die($bdd->error);

			while($val=$query->fetch_array())
			{
				echo "	<h3>$val[nomMenu]</h3> ";

				//Récupération des Sous Menus
				$query_ssm = $bdd -> query("SELECT * FROM evasion_admin_menu WHERE parent='$val[id]' ORDER BY positionMenu") or die($bdd->error);
				
				echo "<div id='accordion_sortable'> <ul id='sortable$count'>";

				while($val_ssm=$query_ssm->fetch_array())
				{
					echo "<li id='$val_ssm[id]' class='ui-state-default'><span class='ui-icon ui-icon-arrowthick-2-n-s'></span>$val_ssm[nomMenu]</li>";
				}
				echo "</div> </ul>";
				$count ++;					
			}
		?>
		</div>
		<div id="bg_popup">
			<div id="popup_modif_ssm"></div>
			<button id="btn_modif_titre_mp" value="Modifier">Modifier</button>
			<div id="info_pop_modif_titre_mp"></div>
		</div>
	</div>



</div> <!-- FIN CONTAINER -->



</div> <!-- Fin wrapper -->

</body>

</html>

