<?php

require_once('Modele/connect.php');
if (isset($_COOKIE['user'])) {
    $secret = htmlspecialchars($_COOKIE["user"]);

    getUsersBySecret($secret);
    
}
