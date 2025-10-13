<?php

class CompteDepot extends Compte{

    private $possede_chequier = false;
    private $possede_cb = false;

    function __construct($titulaire, $solde = 0, $devise = "€", $possede_chequier = false, $possede_cb = false){
        parent::__construct($titulaire, $solde, $devise);
        $this->possede_chequier = $possede_chequier;
        $this->possede_cb = $possede_cb;
    }

    function get_possede_chequier(){
        return $this->possede_chequier ? 1 : 0;
    }

    function set_possede_chequier($possede_chequier){
        $this->possede_chequier = $possede_chequier;
    }

    function get_possede_cb(){
        return $this->possede_cb ? 1 : 0;
    }

    function set_possede_cb($possede_cb){
        $this->possede_cb = $possede_cb;
    }

    function afficher(){
        parent::afficher();
        echo "<li><strong>Chéquier ? :</strong> " . $this->get_possede_chequier() . "</li>";
        echo "<li><strong>CB ? :</strong> " . $this->get_possede_cb() . "</li>";
        echo "</ul>";
    }
}

?>