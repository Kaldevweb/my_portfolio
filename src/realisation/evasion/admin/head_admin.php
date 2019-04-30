<?php

session_start();

?>
<!DOCTYPE html>

<html lang="fr">

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Admin</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

	<link rel="stylesheet" type="text/css" href="css/local.css" />

	<link rel="stylesheet" type="text/css" href="css/style6.css" />

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<!-- TYNIMCE POUR TEXTAREA -->

	<script src="tinymce/tinymce.min.js"></script>



</head>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>

	tinymce.init({

		selector: 'textarea#contenu_ss_menu',

		language:'fr_FR',

		height: 400,

		theme: 'modern',

		plugins: [

		'advlist autolink lists link image charmap print preview hr anchor pagebreak',

		'searchreplace wordcount visualblocks visualchars code fullscreen',

		'insertdatetime media nonbreaking save table contextmenu directionality',

		'emoticons template paste textcolor colorpicker textpattern imagetools'

		],

		toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',

		toolbar2: 'print preview media | forecolor backcolor emoticons',

		image_advtab: true,

		// style_formats: [

		//   {title : 'h1'}

		// ],

		//Pour l'upload

		image_list:'img_list.php',

		//Permet de metter un url absolute pour garder le chemin de l'image

		relative_urls: false,

		templates: [

		{ title: 'Test template 1', content: 'Test 1' },

		{ title: 'Test template 2', content: 'Test 2' }

		],

		content_css: [

		'//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',

		'//www.tinymce.com/css/codepen.min.css'

		]

	});

</script>