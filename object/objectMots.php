<?php
class Mots
{
    public $listeMots = [];




    public function __construct($c_listeMots)
    {
        $this->listeMots = $c_listeMots;
    }

    public function getListeMots()
    {
        return $this->listeMots;
    }

    public function addMot($param)
    {
        return array_push($this->getListeMots(), $param);
    }


    public function getRandomMots()
    {
        $s="";
        $input = $this->getListeMots();
        $rand_keys = array_rand($input, 2);
        $s.= $input[$rand_keys[0]];
        return $s;
    }
}

$m = ['salut', 'marcher', 'saperlipopette', ''];
$lm = new Mots($m);