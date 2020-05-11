<?php

if (!isset($_SESSION['nbErreurMsg'])) {
    $_SESSION['nbErreurMsg'] = 0;
}

$token = bin2hex(random_bytes(24));

if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = $token;
} else {
    $token = $_SESSION['token'];
}

if (isset($_SESSION['user']) && !hash_equals($_SESSION['token'], $_SESSION['user']['token'])) {
    header("../controler/ControlerAuth.php?nom=deco");
}



function printMessError()
{
}


function soundInscription($parram)
{
    switch ($parram) {
        case 0:
?>
            <embed src="./public/sound/carioca.mp3" autoplay="true" autostart="True" type="audio/mp3" width=0 />
        <?php
            break;
        case 1:

        ?>
            <embed src="./public/sound/il-dit-quil-voit-pas-le-rapport-la-cite-de-la-peur.mp3" autoplay="true" autostart="True" type="audio/mp3" width=0 />

        <?php

            break;
        case 2:

        ?>
            <embed src="./public/sound/comment-voulez-vous-quavec-le-truc-je-fasse-le-chose-la-cite-de-la-peur.mp3" autoplay="true" autostart="True" type="audio/mp3" width=0 />
        <?php
            break;
        case 3:

        ?>
            <embed src="./public/sound/tu-bluffes-martoni.mp3" autoplay="true" autostart="True" type="audio/mp3" width=0 />
        <?php
            break;

        case 4:
        ?>
            <embed src="./public/sound/aie-eu.mp3" autoplay="true" autostart="True" type="audio/mp3" width=0 />
<?php
            $_SESSION['nbErreurMsg'] = 1;
            break;
    }
}


function soundConnection($parram){
    switch ($parram) {
        case 0:
?>
            <embed src="./public/sound/la-cite-de-la-peur-meurs-pourriture-communiste.mp3" autoplay="true" autostart="True" type="audio/mp3" width=0 />
        <?php
            break;
        case 1:

        ?>
            <embed src="./public/sound/il-dit-quil-voit-pas-le-rapport-la-cite-de-la-peur.mp3" autoplay="true" autostart="True" type="audio/mp3" width=0 />

        <?php

            break;
        case 2:

        ?>
            <embed src="./public/sound/comment-voulez-vous-quavec-le-truc-je-fasse-le-chose-la-cite-de-la-peur.mp3" autoplay="true" autostart="True" type="audio/mp3" width=0 />
        <?php
            break;
        case 3:

        ?>
            <embed src="./public/sound/tu-bluffes-martoni.mp3" autoplay="true" autostart="True" type="audio/mp3" width=0 />
        <?php
            break;

        case 4:
        ?>
            <embed src="./public/sound/aie-eu.mp3" autoplay="true" autostart="True" type="audio/mp3" width=0 />
<?php
            $_SESSION['nbErreurMsg'] = 1;
            break;
    }

}