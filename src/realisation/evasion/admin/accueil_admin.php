<?php  
include('head_admin.php');
?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.lettering.js"></script>
<script>
    $(function() {
        $("#letter-container h2 a").lettering();

    }); //FIN JQUERY
</script>        

<body>
    <div id="wrapper">
        <!-- Ajout du Menu Navigateur Panel -->
        <?php  
         include("panel_nav.php");
        ?>
        
        <div id="container_admin">
            <div id="letter-container" class="letter-container">
                <h2>
                    <a href="#">Administration du site Évasion</a>
                </h2>
            </div>
        </div>
    </div> <!-- FIN WRAPPER -->

</body>

</html>

