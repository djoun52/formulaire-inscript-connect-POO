<?php


if (!isset($_SESSION['user'])) {
    header("Location: connexion.php");
    die();
}



function startGameOrContinu($param){
?>
    <a href="../controler/ControlerAuth.php?nom=deco">deconnexion</a>
<?php
if( $param == "game"){
?>
<a href="lettre.php">reprendre la partie</a> 
<?php
}else{
?>
<a href="newGame.php">commencer un partie</a> 
<?php
}

}


function printError($param){

$s= "";
    switch ($param) {
        case 0:
            $s= '<img src="./public/image/1.png">';
            break;
        case 1:
            $s= '<img src="./public/image/2.png">';
            break;
        case 2:
            $s= '<img src="./public/image/3.png">';
            break;
        case 3:
            $s= '<img src="./public/image/4.png">';
            break;
        case 4:
            $s= '<img src="./public/image/5.png">';
            break;
        case 5:
            $s= '<img src="./public/image/6.png">';
            break;
        case 6:
            $s= '<img src="./public/image/7.png">';
            break;
        
    }
    return $s;
}



