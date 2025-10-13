<?php
    class Voiture extends Vehicule {
        public function __construct($nom){
        parent::__construct($nom);
        parent::set_type("Voiture");
        }
    }   
?>
