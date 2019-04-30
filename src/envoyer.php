<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';
require 'phpmailer/SMTP.php';

define('PRODUCTION', getenv('ENV_PROD'));
if(defined('PRODUCTION') && PRODUCTION === 'production' && $_SERVER["HTTP_HOST"] !== "localhost"){
    $pwd_stmp_gmail = getenv('PWD_STMP_GMAIL');
}else{
    include('../config.php');
    $pwd_stmp_gmail = $pwd_stmp_dev;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Kévin Ah-loye | Intégrateur Web </title>

    <!-- LINK CSS -->
    <!-- build:css css/min.css -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- endbuild -->

    <!-- FAV ICO -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
	<div id="confirmationCourriel">
		<?php
            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8';

			// Get variables
			@$nomExpediteur = $_POST["nomExpediteur"];
			@$sujetExpediteur = $_POST["sujetExpediteur"];
			@$courrielExpediteur = $_POST["courrielExpediteur"];
			@$messageExpediteur = $_POST["messageExpediteur"];
			str_replace("\n", '&nbsp', $messageExpediteur);

			// Message in HTML
			$message = "";
			$message = "
						<table width='500' style='border: none'>
							<tr>
								<td>$messageExpediteur</td>
                            </tr>
                            <tr>
                                <td>Voici le courriel de l'expediteur : <b>$courrielExpediteur</b></td>
                            </tr>
						</table>
			";

            try {
                //Server settings
                // $mail->SMTPDebug = 2;                                       // Enable verbose debug output
                $mail->isSMTP();                                            // Set mailer to use SMTP
                $mail->Host = 'tls://smtp.gmail.com';

                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'kal.cegep@gmail.com';                     // SMTP username
                $mail->Password   = $pwd_stmp_gmail;                               // SMTP password
                $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
                $mail->Port       = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom($courrielExpediteur, $nomExpediteur);
                $mail->addAddress('kevin.ahloye@gmail.com', 'Beau Gosse');

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $sujetExpediteur;
                $mail->Body    = $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo '<p><span class="confVert">Merci pour votre message, il a bien été envoyé.</span><br>
                Vous allez être redirigé vers l\'accueil du portfolio de Kevin AH-LOYE.</p>';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
		?>
	</div>

    <!-- LINK SCRIPT JAVA Et JQUERY-->
    <script type="text/javascript">
            function Redirect() {
            history.back();
            }
            setTimeout('Redirect()', 4000);
    </script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- build:js js/main.js -->
    <script src="js/covervid.min.js"></script>
    <script type="text/javascript" src="js/velocity.min.js"></script>
    <script src="js/jquery.vide.min.js"></script>
    <script src="js/jquery.viewportchecker.min.js"></script>
    <script type="text/javascript" src="js/jquery_kal.js"></script>
    <!-- endbuild -->
</body>
</html>