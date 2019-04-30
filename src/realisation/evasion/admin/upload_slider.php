<?php

session_start();
include("fonction.php");
?>
<!DOCTYPE html>

<html >

<head>

<meta charset="UTF-8">

<title>Login Admin Évasion</title>

<link rel="stylesheet" href="../css/styles_login.css">

<link rel="stylesheet" href="../clouds/css/clouds.css" />

<script src="../clouds/js/jquery.min.js"></script>

<script src="../clouds/js/clouds.js"></script>

<script src="../clouds/js/app.js"></script>



<style>



#container_login {

     display: flex;

}



#upload_result {

     text-align: center;

     width: 50%;

     padding: 50px;

     border: 2px solid white;

     margin: auto;

     background-color: rgba(145, 122, 122, 0.3);

}



</style>

</head>



<body>

<div id="far-clouds" class="stage far-clouds"></div>

<div id="near-clouds" class="stage near-clouds"></div>



<div id="container_login">

     <div id="upload_result">

          <?php

               //SECURITÉ ADMIN
               if (empty($_SESSION["uti"]) or empty($_SESSION["pw"]))
               {
                    echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";
               }
               else
               {
                    //SECURITER ULTIME
                    if(autorisation($_SESSION["uti"],$_SESSION["pw"]))
                    {
                         // RECUPERATION DONNÉES + CARACTERE SPECIAUX

                         include("fonc.php");

                         include('../connexion.php');

                         $dossier = '../img/slider/';

                         $fichier = basename($_FILES['avatar']['name']);

                         $taille_maxi = 10000000;

                         $taille = filesize($_FILES['avatar']['tmp_name']);

                         $extensions = array('.png', '.gif', '.jpg', '.jpeg');

                         $extension = strrchr($_FILES['avatar']['name'], '.'); 

                         //Début des vérifications de sécurité...

                         if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau

                         {

                              $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';

                         }

                         if($taille>$taille_maxi)

                         {

                              $erreur = 'Le fichier est trop gros...';

                         }

                         if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload

                         {

                              // //VALIDATION CHAMPS VIDE DESCRIPTION ET MOTS CLEF

                              // if(empty($new_article_titre) OR empty($new_article_description) OR empty($new_article_source))

                              // {

                              //      echo "<font color='red'>Veuillez remplir tous les champs</font>

                              //      <br />

                              //      <br />

                              //      <a href='index.php'>Retour</a> ";

                              // }

                              // //SI TOUS LES CHAMPS SONT CORRECT

                              // else

                              // {

                                   //On formate le nom du fichier ici...

                                   $fichier = mb_strtolower($fichier, 'UTF-8');

                                   $fichier = str_replace(

                                   array('à','â','ä','á','ã','å','î','ï','ì','í','ô','ö','ò','ó','õ','ø','ù','û','ü','ú','é','è','ê','ë','ç','ÿ','ñ', ),

                                   array('a','a','a','a','a','a','i','i','i','i','o','o','o','o','o','o','u','u','u','u','e','e','e','e','c','y','n', ),

                                   $fichier);

                                   $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);



                                   //PLACEMENT DANS LE DOSSIER SI TOUT EST OK

                                   if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...

                                   {

                                        //INSERTIONS DES DONNÉES DE L'ARTICLE DANS LA BDD

                                        $req_upload = $bdd->query("INSERT INTO slider VALUES('','$fichier')") or die($bdd->error);


                                        echo "<font color='green'>Votre nouvel article a bien été ajouté !</font>

                                        <br />

                                        <br />

                                         <a href='index.php'>Retour</a> 

                                        ";

                                   }

                                   else //Sinon (la fonction renvoie FALSE).

                                   {

                                        echo 'Echec de l\'upload !';

                                   }

                              // }

                         }

                         else //SI Taille et extension pas correct

                         {

                              echo "<font color='red'>".$erreur."<font color='red'><br /><br /><a href='index.php'>Retour</a>";

                         }

                    }
                    else
                    {
                         echo "<font style = 'color:red; font-size:150%; font-weight:bold;'>Vous n'avez pas l'autorisation !!!</font>";
                    }

               }
          ?>

     </div>

</div> <!-- FIN CONTAINER -->

</body>

</html>