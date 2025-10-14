<?php
    class Camion extends Vehicule {

        private $chargement;

        function __construct($nom){

        } 

        function set_chargement($chargement){
            $this->chargement=abs($chargement);
        }

        //Setter et Getter
        function charger($chargement){
            if ($this->chargement<0){
                $this->set_chargement($this->get_chargement + $chargement);
                echo "<p>" . $this->get_nom() . " a chargé : " . $chargement . " kg</p>";
            } else {
                echo "<p>Erreur : " . $this->get_nom() . " ne peut pas charger : " . $chargement . " kg</p>";
            } 
        }
        
        function get_chargement(){
            return $this->chargement;
        }
    }
?> 