<?php

class Vin extends Boisson{
    private $couleur = ["rouge", "rosé", "blanc"];

    public function __construct($nom, $contenance, $couleur = "rosé"){
        parent::__construct($nom, $contenance);
        $this->couleur = $couleur ;
    }

    function set_couleur($couleur){
        $this->couleur = $couleur;
    }

    function get_couleur(){
        return $this->couleur;
    }

    function afficher(){
        echo "<h2>Description du vin :</h2>";
        parent::afficher();
        echo "Couleur du vin : $this->couleur";
    }
}

?>