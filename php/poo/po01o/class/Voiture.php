<?php
    class Voiture extends Vehicule {
        public function __construct($nom){
        parent::__construct($nom);
        parent::set_type("Voiture");
        }

        function afficher(){
            echo "<p>--- Description de " . $this->get_nom() . " ---</p>";
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
