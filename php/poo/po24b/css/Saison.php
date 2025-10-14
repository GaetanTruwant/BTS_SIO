<?php

    class Saison {
        private $id_saison = "";
        private $libelle = "";

        function __construct($id_saison){
            $this->id_saison = $id_saison;
        }

        function get_saison(){
            return $this -> id_saison;
        }

        function set_saison($id_saison){
            if 
        }

        function afficher(){
            return $this->id_saison . $this->libelle;
        }
    }