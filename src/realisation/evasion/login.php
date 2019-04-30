<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>Login Admin Évasion</title>
<link rel="stylesheet" href="css/styles_login.css">
	<link rel="stylesheet" href="clouds/css/clouds.css" />

	<script src="clouds/js/jquery.min.js"></script>
	<script src="clouds/js/clouds.js"></script>
	<script src="clouds/js/app.js"></script>
</head>

<body>
<div id="far-clouds" class="stage far-clouds"></div>
<div id="near-clouds" class="stage near-clouds"></div>

<div id="container_login">

	<div id="login">
		<h1 id="header">Login</h1>
		<form action="validation.php" method="post" name="form">
			<input type="text" placeholder="Username" id="username" name="uti"></input><br />
			<input type="password" placeholder="Password" name="pw"></input><br />
				<!-- Si les champs sont vides ou invalides -->
				<?php
				$tab_erreur=array("Champs vides !!!","Données invalides !!!");
				print '<p class=\'login_error\'>'.@$tab_erreur[$_GET["erreur"]].'</p>'; 
				?>
			<input type="submit" value="Submit" id="button"></input>
		</form>
	</div>



</div>


   
</body>
</html>
