<?php

class CompteEpargne extends Compte{

    private $taux_interet = 0;

    function __construct($titulaire, $solde = 0, $taux_interet = 0){
        parent::__construct($titulaire, $solde);
        $this->set_taux_interet($taux_interet);
    }

    function get_taux_interet(){
        return $this->taux_interet;
    }

    function set_taux_interet($taux_interet){
        $this->taux_interet = $taux_interet;
    }

    function calculer_interet(){
        $solde = $this->get_solde() + $this->get_solde() * $this->taux_interet;
        $this->get_solde($solde);
    }


    function afficher(){
        parent::afficher();
        echo "<li><strong>Taux intérêt :</strong> " . $this->get_taux_interet() . "</li>";
        echo "</ul>";
    }

    function __destruct(){
        $this->reponse("Adieu...");
    }
}

?>