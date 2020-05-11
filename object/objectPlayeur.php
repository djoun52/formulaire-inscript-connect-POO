<?php


class Player {
  // Properties

    private $nom;
    private $prenom;
    private $pseudo;
    private $gamePlay;
    private $gameWin;

    public function __construct($c_nom, $c_prenom, $c_pseudo,$_gamePlay,$_gameWin) 
    {
        $this->nom = $c_nom;
        $this->prenom = $c_prenom;
        $this->pseudo = $c_pseudo;
        $this->gamePlay = $_gamePlay;
        $this->gameWin = $_gameWin;
    }


    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function getGamePlay()
    {
        return $this->gamePlay;
    }
    public function getGameWin()
    {
        return $this->gameWin;
    }
    public function setGamePlay($p_gamePlay)
    {
        $this->gamePlay = $p_gamePlay;
    }
    public function setGameWin($p_gameWin)
    {
        $this->gameWin = $p_gameWin;
    }
    public function addGamePlay($a_gamePlay)
    {
        $this->gamePlay = $this->gamePlay + $a_gamePlay;
    }
    public function addGameWin($a_gameWin)
    {
        $this->gameWin = $this->gameWin + $a_gameWin;
    }
    


    public function infoplayer()
    {


        if ($this->getGameWin() !=0){
            $r=100/($this->getGamePlay()/$this->getGameWin() );
          $stat=round($r,2);
          }else{
            $stat=0;
          }


       $s= "";
       $s.="<h1>Profile Joueurs</h1> <br>";
       $s.="<p>pseudo joueur : " .  $this->getPseudo()  . " </p>";
       $s.="<p>nom joueur : ".  $this->getNom()  ."  </p>";
       $s.="<p>prenom joueur :  ".  $this->getPrenom()  ."</p>";
       $s.= "<br><br>";
       
       $s.="<h2>Statistique</h2>";
       $s.="<p>partie joué :  ".  $this->getGamePlay()  ." </p>";
       $s.="<p>partie gagné :  ".  $this->getGameWin()  ." </p>";
       $s.="<p>pourcentage de victoire : $stat </p>";
       
          return $s;

    }
    
}

$pler= new Player( $_SESSION['user']['nom'] , $_SESSION['user']['prenom'] , $_SESSION['user']['pseudo'] ,$_SESSION['user']['partie'] ,$_SESSION['user']['partie_win'] );

