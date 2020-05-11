<?php
session_start();
require_once('../controler/controlerMain.php');
require_once('../object/objectPlayeur.php');

// var_dump($_SESSION);
// var_dump($_COOKIE);


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">

    <title>Document</title>
</head>

<body>
<div id="wrapper">
<a href="../controler/ControlerAuth.php?nom=deco">deconnexion</a>
<a href="./profil.php?nom=noGame">profil</a> 

  <a href="../controler/controlerNbPartie.php">nouvelle partie</a>
</div>
</body>

</html>