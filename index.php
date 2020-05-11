
<?php
session_start();
require_once('controler/controlerCookie.php');

// var_dump($_SESSION);
// var_dump($_COOKIE);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./vue/public/css/style.css">

    <title>Document</title>
</head>
<body>
<div id="wrapper">
    <!-- céation de compte joueur -->
    <a href=" ./controler/ControlerAuth.php?nom=inscri">Inscription</a>

    <!-- identification  -->
    <a href="./controler/ControlerAuth.php?nom=identi">Identification</a>



</div>

</body>
</html>