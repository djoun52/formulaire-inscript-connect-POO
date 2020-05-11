<?php





$dsn    = "mysql:host=localhost;dbname=pendu";
$dbuser = "root";
$dbpass = "";

try {
    $GLOBALS['bdd'] = new PDO($dsn, $dbuser, $dbpass);
    $GLOBALS['bdd']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $GLOBALS['bdd']->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $GLOBALS['bdd']->exec("SET CHARACTER SET utf8");
} catch (PDOException $err) {
    $now = new DateTime("", new DateTimeZone('Europe/Paris'));
    $now = $now->format("d-M-Y H:i:s");
    $msg = $now . " - ERREUR BDD : " . $err->getMessage() . PHP_EOL;
    file_put_contents('log.txt', $msg, FILE_APPEND);
    die();
}

function getUsersByPseudo($param){

    try {
        $stmt =$GLOBALS['bdd']->prepare('SELECT * FROM users WHERE pseudo = :pseudo'); // requete vers database
        $stmt->bindParam("pseudo", $param); // requete vers database
        $stmt->execute(); // requete vers database
        $result = $stmt->fetch();
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }

    return $result;
}


function putUseresInBDD($param1,$param2,$param3,$param4,$param5){
    try {
        $stmt = $GLOBALS['bdd']->prepare("INSERT INTO users (nom, prenom, pseudo, password, partie, partie_win, secret) VALUES (?,?,?,?,?,?,?)");
        $stmt->execute(array($param1, $param2, $param3,$param4, 0, 0, $param5));
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }

}


function getUsersBySecret($param){
    try {
        $stmt =$GLOBALS['bdd']->prepare('SELECT * FROM users WHERE secret= :secret');
        $stmt->bindParam("secret", $param);
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


function addNbParti($param){
$stmt = $GLOBALS['bdd']->prepare('UPDATE `users` SET `partie`= partie+1 WHERE pseudo = :pseudo '); // requete vers database
$stmt->bindParam("pseudo", $param); // requete vers database
$stmt->execute(); // requete vers database
}


function addNbPartiWin($param){
    $stmt =$GLOBALS['bdd']->prepare('UPDATE `users` SET `partie_win`= partie_win+1 WHERE pseudo = :pseudo'); // requete vers database
        $stmt->bindParam("pseudo", $param); // requete vers database
        $stmt->execute(); // requete vers database
}