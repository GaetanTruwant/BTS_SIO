<?php

class Chien implements Animal{

    private $nom;
    private $couleur;

    function __construct(){
        $this->nom=$nom;
        $this->couleur=$couleur;
    }
        
    function marcher() {
        echo '<p>Je marche</p>';
    }

    function voler() {
        echo '<p>Je ne vole pas</p>';
    }

    function grimper() {
        echo '<p>Je ne grimpe pas</p>';
    }

    function parle() {
        echo '<p>Je ne parle pas</p>';
    }

    function afficher() {
        echo "<p>Bonjour je suis Grumpy Cat le chat noir et blanc</p>";
        echo marcher();
        echo voler();
        echo grimper();
        echo parle();
    }
}

?>