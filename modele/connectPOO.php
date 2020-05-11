<?php

abstract class DAO{
        
    private static $dbname = "user";
    private static $dsn    = "mysql:host=localhost;dbname=pendu";
    private static $dbuser = "root";
    private static $dbpass = "";
    
    //l'instance de PDO sera ici, elle est protected pour que seuls les modèles s'en servent
    protected static $connexion;
    
    protected static function connect(){
        //connexion à la BDD
        try{
     
           self:: $connexion = new PDO(self::$dsn,self:: $dbuser,self:: $dbpass,
           [
              PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC

           ]
        );
           
        }
        catch (PDOException $err) {
            $now = new DateTime("", new DateTimeZone('Europe/Paris'));
            $now = $now->format("d-M-Y H:i:s");
            $msg = $now . " - ERREUR BDD : " . $err->getMessage() . PHP_EOL;
            file_put_contents('log.txt', $msg, FILE_APPEND);
            die();
        }
    }        
}