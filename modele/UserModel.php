<?php
    require_once "connectPOO.php";

    class UserModel extends DAO{

        public function __construct(){
            //la propriété connexion contiendra une instance de PDO toute fraîche
            //grâce au DAO
            parent::connect();
        }

        public function getUsersByPseudo($param){
            try{
                $sql = "SELECT * FROM users WHERE pseudo = :pseudo";

            //préparation de la requète dans le serveur       
                $stmt = self::$connexion->prepare($sql);
            //injection des paramètres
                $pseudo = strtolower($param);
                $stmt->bindParam("pseudo", $pseudo); // requete vers database

            //execution
            $result = $stmt->fetch();
            //on retourne l'utilisateur en base de données
                return $result;
            }
            catch(Exception $e){
                return $e->getMessage();
                die();
            }
            
        }

        public function addUser($param1,$param2,$param3,$param4,$param5){
            try{
                $sql = "INSERT INTO users (nom, prenom, pseudo, password, partie, partie_win, secret) VALUES (?,?,?,?,?,?,?)";

            //préparation de la requète dans le serveur       
                $stmt = self::$connexion->prepare($sql);
            
                $stmt->execute(array($param1, $param2, $param3,$param4, 0, 0, $param5));
                
            //execution
                return $stmt->execute();
                
            }
            catch(Exception $e){
                return $e->getMessage();
                die();
            }
            
        }
        public function getUsersBySecret($param){
            try {
                $sql = 'SELECT * FROM users WHERE secret= :secret';


                //préparation de la requète dans le serveur       
                $stmt = self::$connexion->prepare($sql);

                //injection des paramètres
                $stmt->bindParam("secret", $param);

                 //execution
                $stmt->execute();
                $result = $stmt->fetch();
                if ($result !== false) {
                    $_SESSION['user'] = $result;
                    $_SESSION['error_msg'] = '';
                    // var_dump($_COOKIE);
                    header('Location: vue/newGame.php');
                    die();
                }
            } catch (PDOException $error) {
                $now = new DateTime("", new DateTimeZone('Europe/Paris'));
                $now = $now->format("d-M-Y H:i:s");
                $msg = $now . " - ERREUR BDD : " . $error->getMessage() . PHP_EOL;
                file_put_contents('log_cookie.txt', $msg, FILE_APPEND);
                $_SESSION['error_msg'] = "Hacker";
                // var_dump($_COOKIE);
        
                // header('Location: index.php');
                die();
            }
        }

    }