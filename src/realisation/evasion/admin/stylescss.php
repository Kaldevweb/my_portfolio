<?php  
include('head_admin.php');
?>

<script>
	$(function() {

		$("#btn_contenu_css").click(function(){
			var contenucss = $('#contenu_css').val();

        	$.ajax({
				type: "POST",
				url: "modifier_css.php",
				data: {"contenucss" : contenucss},
				dataType:"html",
				error:function(msg){
					alert( "Error !: " + msg );
				},
				success:function(data){
					$('#mess_validation').html(data);
					location.reload();
				}	//FIN SUCCES
            }); //FIn AJAX
		});	//FIN $("btn_contenu_css").click

	});	//FIN JQUERY

</script>

<body>

<div id="wrapper">
<?php
//Ajouter le Menu Navigation  
include("panel_nav.php");
?>    

<div id="container">
	<h4>Modifier les styles du css</h4>
	<hr />

	<div id="boite_separation_2">
		<!-- AFFICHER LA FEUILLE DE STYLES À MODIFIER -->
		<?php
			$fd = fopen("../styles.css", "r");
			$contenu="";
			
			while (!feof ($fd))
			{
				$contenu .= fgets ($fd);
			}    
			fclose ($fd);
		?>
<!-- 		<form action="modifier_css.php" method="post"> -->
			<textarea name="contenu" id="contenu_css" cols="50" rows="50"><?php print $contenu; ?></textarea><br />
			<input name="bouton" id='btn_contenu_css' type="submit" value="Modifier" /> 
<!-- 		</form> -->
		<div id="mess_validation"></div>		
	</div>
</div> <!-- FIN CONTAINER -->
</div> <!-- Fin wrapper -->
</body>
</html>		
