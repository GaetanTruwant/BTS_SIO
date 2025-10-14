<?php
// include "class/Voiture.php";
function my_autoloader($classe){
    include "class/".$classe.".php";
}
spl_autoload_register("my_autoloader");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>po01h</title>
    </head>
    <body>
        <?php
        // Voiture 1
        $voiture1 = new Voiture("voiture1");
        $voiture1->set_marque("Honda");
        $voiture1->afficher();
        // Voiture 2
        $voiture2 = new Voiture("voiture2");
        $voiture2->set_marque("Renault");
        $voiture2->set_modele("Megane");
        $voiture2->set_compteur(0);
        $voiture2->demarrer();
        $voiture2->avancer(-200); // On doit avancer de +200 km
        $voiture2->arreter();
        echo "<p>Mon nom est " . $voiture2->get_nom() . "</p>";
        $voiture2->afficher();
        echo "<p>constance DEMARREE = " . Voiture::DEMARREE ."</p>";
        echo "<p>constance ARRETEE = " . Voiture::ARRETEE ."</p>";
        ?>
    </body>
</html>
