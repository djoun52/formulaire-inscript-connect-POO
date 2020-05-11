<?php
session_start();
// var_dump($_SESSION);

require_once('../controler/controlerIncriptAndConection.php');


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style_co.css">
    <title>Document</title>
</head>

<body>
    <div id="wrapper">



        <div class="nav-wrapper">
            <nav>
                <div class="navigation">
                    <ul class="nav-items">
                        <li><a href=" ../controler/ControlerAuth.php?nom=inscri">Inscription</a></li>
                        <li><a href="../controler/ControlerAuth.php?nom=deco">deconnexion</a></li>
                    </ul>
                    <div class="nav-toogler"></div>
                </div>
            </nav>
        </div>


        <form id="formu" method="post" action="../Controler/ControlerAuth.php?nom=connect">
            <div class="flex">
                <label id="labPseudo" for="u_nom">pseudo : </label>
                <input type="text" name="u_pseudo" size="15">
            </div>
            <div class="flex">
                <label id="labPassword" for="u_nom">password : </label>
                <input type="text" name="u_password" size="15">
            </div>
            <div class="flex">
                <label id="option">
                    <input type="checkbox" name="auto"> Se souvenir de moi</label>
            </div>
            <input type="hidden" value="<?= $token ?>" name="token">
            <div class="flex">
                <input type="submit" value="OK">
            </div>
        </form>
        <?php

        printMessError()
        ?>




        <object>
            <param name="autostart" value="true">
            <param name="src" value="sound.mp3">
            <param name="autoplay" value="true">

            <?php
             soundConnection($_SESSION['nbErreurMsg']);
            ?>
        </object>
    </div>


    <script>
        let navWrapper = document.querySelector('.nav-wrapper'),
            navToogler = document.querySelector('.nav-toogler')

        navToogler.addEventListener('click', function(event) {
            navWrapper.classList.toggle('active')
        })
    </script>
</body>

</html>