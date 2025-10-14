<?php

class Jus extends Boisson{
    private $fruit = "";

    public function __construct($nom, $contenance, $fruit = "Ananas"){
        parent::__construct($nom, $contenance);
        $this->fruit = $fruit;
    }

    function set_fruit($fruit){
        $this->fruit = $fruit;
    }

    function get_fruit(){
        return $this->fruit;
    }

    function afficher(){
        echo "<h2>Description du jus :</h2>";
        parent::afficher();
        echo "<p>Fruit : $this->fruit</p></br>";
    }
}

?>