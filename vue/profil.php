<?php
session_start();

require_once('../object/objectPlayeur.php');

// var_dump($_SESSION);

require_once('../controler/controlerMain.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body>
<div id="wrapper">

<?php

startGameOrContinu($_GET["nom"]);

echo $pler->infoplayer();
?>



</div>
</body>
</html>