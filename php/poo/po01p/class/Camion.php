<?php
    class Camion extends Vehicule {

        private $chargement = null;

        public function __construct($nom){
            parent::__construct($nom);
            $this->chargement = 0;
            parent::set_type("Camion");
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
                throw new Exception(" ne peut pas charger : " . $chargement . " kg</p>");
                // echo "<p>Erreur : " . parent::get_nom() . " ne peut pas charger : " . $chargement . " kg</p>";
            } 
        }
        
        function get_chargement(){
            return $this->chargement;
        }

        function afficher(){
            echo "<p>--- Description de " . $this->get_nom() . " ---</p>";
            echo "<ul>";
            echo "<li>Chargement : ". $this->get_chargement() . "</li>";
            echo "<li>Type        : " . $this->get_type() . "</li>";
            echo "<li>Marque      : " . $this->get_marque() . "</li>";
            echo "<li>Modèle      : " . $this->get_modele() . "</li>";
            echo "<li>Nom         : " . $this->get_nom() . "</li>";
            echo "<li>Compteur    : " . $this->get_compteur() . "</li>";
            echo "<li>A démarré ? : " . $this->get_lib_etat() . "</li>";  // Affiche 1 si true et rien si false
            echo "</ul>";
        }
        
    }
?> 