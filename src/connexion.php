<?php
define('PRODUCTION', getenv('ENV_PROD'));

if(defined('PRODUCTION') && PRODUCTION === 'production' && $_SERVER["HTTP_HOST"] !== "localhost"){
    // Connexion DB for heroku : production env
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $bdd = new mysqli($server, $username, $password, $db) or die($bdd->$connect_errno);
}else{
    // Connexion DB for local machine : develop env
    $bdd=new mysqli("localhost","root","","id7158402_kevinahloye" ) or die($bdd->$connect_errno);

}
$bdd->set_charset("utf8");
?>

