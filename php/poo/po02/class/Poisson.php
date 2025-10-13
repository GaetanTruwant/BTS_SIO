<?php

class Poisson{
    
    function marcher() {
        echo '<p>Je ne marche pas</p>';
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