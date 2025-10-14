<?php
    class Camion extends Vehicule {

        private $chargement = null;

        public function __construct($nom){
            parent::__construct($nom);
            $this->chargement = 0;
        } 

        function set_chargement($chargement){
            $this->chargement=abs($chargement);
        }

        //Setter et Getter
        function charger($chargement){
            if ($chargement>0){
                $this->set_chargement($this->get_chargement() + $chargement);
                echo "<p>" . parent::get_nom() . " a chargé : " . $chargement . " kg</p>";
            } else {
                echo "<p>Erreur : " . parent::get_nom() . " ne peut pas charger : " . $chargement . " kg</p>";
            } 
        }
        
        function get_chargement(){
            return $this->chargement;
        }

        function afficher(){
            parent::afficher();
            echo "<li> charge : $this->chargement</li></ul>";
            echo "</ul>";
        }
        
    }
?> 