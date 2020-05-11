<?php
session_start();

require_once ('../object/objectMots.php');

$m=['salut','marcher','saperlipopette','' ];
$lm= new Mots($m);
$j=$lm->getRandomMots();

if (!isset($_SESSION['nom'])) {
    header("Location: connexion.php");
}

if (isset($_SESSION["mots"])) {
    $_SESSION["mots"]=$j;
}

?>
